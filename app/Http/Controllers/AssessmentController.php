<?php

namespace App\Http\Controllers;

use App\Exports\ArrivalExport;
use App\Models\AfterAssessment;
use App\Models\Arrival;
use Illuminate\Http\Request;
use App\Exports\DataExport;
use App\Models\Department;
use App\Models\Language;
use App\Models\Setting;
use Excel;

class AssessmentController extends Controller
{
    public function visitor_form_link()
    {
        $departments = Department::all();
        return view('Admin.afterAssessment.links', get_defined_vars());
    }
    public function get_visitor_detail($visitor)
    {
        $visitor = AfterAssessment::where('id', $visitor)->first();
        return view('ajax.visit', get_defined_vars());
    }

    public function visitor_list()
    {
        $visitor = AfterAssessment::all();
        return view('Admin.afterAssessment.list', get_defined_vars());
    }
    /*public function success_assessment()
    {
        $visitor = AfterAssessment::where('check_temp', 1)->get();
        return view('Admin.afterAssessment.success_assessment', get_defined_vars());
    }*/
    public function fail_visitor()
    {
        $visitor = AfterAssessment::doesntHave('arrival')->get();
        return view('Admin.afterAssessment.fail_visitor', get_defined_vars());
    }
    public function arrival_list()
    {
        $arrival = Arrival::all();
        return view('Admin.arrival.list', get_defined_vars());
    }
    public function fail_arrival()
    {
        $arrival = Arrival::where('admit_entry', 'no')->where(function($q){
            $q->where('temperature','>',37.5)->orWhereHas('afterassessment', function ($query) {
                $query->where('check_temp', 1);
            });
        })->get();
        return view('Admin.arrival.fail_arrival', get_defined_vars());
    }
    public function exception_arrival()
    {
        $arrival = Arrival::where('admit_entry', 'yes')->where(function($q){
            $q->where('temperature','>',37.5)->orWhereHas('afterassessment', function ($query) {
                $query->where('check_temp', 1);
            });
        })->get();
        return view('Admin.arrival.exception', get_defined_vars());
    }
    public function success_arrival()
    {
        $arrival = Arrival::where('temperature','<=',37.5)->wherehas('afterassessment', function ($query) {
            $query->where('check_temp', 0);
        })->get();
        return view('Admin.arrival.success_arrival', get_defined_vars());
    }
    public function exportaArrival()
    {
        return Excel::download(new ArrivalExport, 'munster-joinery-visitor-data.xlsx');
    }
    public function arrival_data(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'after_assessments_id' => 'required',
            'department_id' => 'required',
            'temperature' => 'required',
        ]);
        $arrival = Arrival::where('after_assessments_id', $request->after_assessments_id)->first();
        if (!empty($arrival)) {
            $arrival->update([
                'date' => $request->date,
                'temperature' => $request->temperature,
                'approved_to_enter' => "",
                'department_id' => $request->department_id,
            ]);
        } else {
            $arrival  = Arrival::create([
                'date' => $request->date,
                'after_assessments_id' => $request->after_assessments_id,
                'temperature' => $request->temperature,
                'department_id' => $request->department_id,
                'approved_to_enter' => "",
            ]);
        }

        $after_assessment = AfterAssessment::where('id', $request->after_assessments_id)->first();

        $redirect = redirect()->back()->with('swal', '1');

        $first_form =  $after_assessment->check_temp;
        if ($first_form == 1  ||  (float)$request->temperature > 37.5) {
            $arrival->update([
                'admit_entry' => "no",
            ]);
            return redirect()->route('admit_entry', $arrival->id)->with('swal_title', 'Problem With Responses')->with('swal_type', 'error');
        } else {
            $arrival->update([
                'admit_entry' => "yes",
            ]);
            return $redirect->with('swal_title', 'Ok')->with('swal_type', 'success')->with('swal_text', 'Admitted ok');
        }
    }
    public function admit_entry($id)
    {
        $arrival = Arrival::find($id);
        return view('admin_entry', get_defined_vars());
    }
    public function save_admin_entry(Request $request, $id)
    {
        $arrival = Arrival::find($id);
        $arrival->reason = $request->admit_entry == 'yes' ? $request->reason_yes : $request->reason_no;
        $arrival->admit_entry = $request->admit_entry;
        $arrival->save();
        
        $arrival_id = Arrival::find($arrival->id);
        $driver_name = $arrival_id->afterassessment->driver_name;
        $hr_email = Setting::where('name', 'hr_email')->pluck('setting')->first();
        sendMail([
            'view' => 'email.admit_entry',
            'subject' => $driver_name . ' is '. ($request->admit_entry == 'yes' ? '' : 'not') .' admitted',
            'to' => $hr_email,
            'data' => [
                'driver_name' => $driver_name,
                'arrival' => $arrival
            ]
        ]);
        
        if($request->admit_entry == 'no')
            $msg = 'Not admitted';
        else
            $msg = 'Admitted with exception';
        
        return redirect(route('arrival') . '?department=' . $request->department_id)->with('swal', '1')->with('swal_title', $msg)->with('swal_type', 'info');
    }
    public function create(Request $request)
    {
       if($request->travel_alone == "no")
       {
         $request->validate([
            'passenger_name' => 'required',
            'passenger_contact' => 'required',
            'driver_name' => 'required',
            'taste_and_smell' => 'required',
            'countries' => 'required',
            'date' => 'required',
            'time' => 'required',
            'freight_company' => 'required',
            'driver_mobile' => 'required',
            'close_contact' => 'required',
            'diagnosed_with_Covid' => 'required',
            'travel_alone' => 'required',
            'department_id' => 'required',
        ]); 
     }
     else
     {
         $request->validate([
            'driver_name' => 'required',
            'taste_and_smell' => 'required',
            'countries' => 'required',
            'date' => 'required',
            'time' => 'required',
            'freight_company' => 'required',
            'driver_mobile' => 'required',
            'close_contact' => 'required',
            'diagnosed_with_Covid' => 'required',
            'travel_alone' => 'required',
            'department_id' => 'required',
        ]);
     }
     $signature = uploadSignature($request->Signatur_Data);

     $country_list = implode(', ', $request->countries);
     $assessment = AfterAssessment::create([
        'driver_name' => $request->driver_name,
        'driver_mobile' => $request->driver_mobile,
        'vehicle_number' => $request->vehicle_number,
        'date' => $request->date,
        'time' => $request->time,
        'travel_alone' => $request->travel_alone,
        'passenger_name' => $request->passenger_name,
        'passenger_contact' => $request->passenger_contact,
        'department_id' => $request->department_id,
        'freight_company' => $request->freight_company,
        'description_of_freight' => $request->description_of_freight,
        'joinery_zone_number' => $request->joinery_zone_number,
        'taste_and_smell' => $request->taste_and_smell,
        'countries' => $country_list,
        'close_contact' => $request->close_contact,
        'diagnosed_with_Covid' => $request->diagnosed_with_Covid,
        'signature' => $signature,
    ]);
     $depart = Department::find($request->department_id);
     $zone_num = $depart->zone->number;
     $redirect = redirect()->back()->with('swal', '1');
     $hr_email = Setting::where('name', 'hr_email')->pluck('setting')->first();
     if ($request->taste_and_smell == 'yes' && $request->close_contact == 'yes' && $request->diagnosed_with_Covid == 'no') {
        $assessment->update([
            'check_temp' => 1,
        ]);
    /*sendMail([
        'view' => 'email.problem_response',
        'subject' => 'Flagged response submitted by ' . $request->driver_name,
        'to' => $hr_email,
        'data' => [
            'arrival' => $assessment
        ]
    ]);*/
    $msg = "Thank you for your form submission, please proceed to $zone_num for temp check , 
    Please do not reply to this number";
    sendMessage($msg, $request->driver_mobile);
    return $redirect->with('swal_title', 'Not Ok')->with('swal_type', 'error')->with('swal_text', "You have submitted a flagged response, Please proceed to $request->joinery_zone_number etc for review");
} else if ($request->taste_and_smell == 'no' && $request->close_contact == 'no' && $request->diagnosed_with_Covid == 'yes') {
    $assessment->update([
        'check_temp' => 0,
    ]);
    $msg = "Thank you for your form submission, please proceed to $zone_num for temp check , 
    Please do not reply to this number";
    sendMessage($msg, $request->driver_mobile);
    return $redirect->with('swal_title', 'Ok')->with('swal_type', 'success')->with('swal_text', "Thank you for your form submission, please proceed to Zone $zone_num for temp check");
} else if ($request->taste_and_smell == 'yes' || $request->close_contact == 'yes' || $request->diagnosed_with_Covid == 'no')
{
    $assessment->update([
        'check_temp' => 1,
    ]);
    /*sendMail([
        'view' => 'email.problem_response',
        'subject' => 'Flagged response submitted by ' . $request->driver_name,
        'to' => $hr_email,
        'data' => [
            'arrival' => $assessment
        ]
    ]);*/
    $msg = "Thank you for your form submission, please proceed to $zone_num for temp check , 
    Please do not reply to this number";
    sendMessage($msg, $request->driver_mobile);
    return $redirect->with('swal_title', 'Not Ok')->with('swal_type', 'error')->with('swal_text', "You have submitted a flagged  response , Please proceed to Zone $zone_num for temp check");

} else {
    return $redirect;
}
return $redirect;
}
}

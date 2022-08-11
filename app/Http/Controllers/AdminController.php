<?php

namespace App\Http\Controllers;

use App\Models\AfterAssessment;
use App\Models\Arrival;
use App\Models\Department;
use App\Models\Language;
use App\Models\LanguageString;
use App\Models\Personnel;
use App\Models\Zone;
use Illuminate\Http\Request;
use Carbon\Carbon;
class AdminController extends Controller
{
    public function index()
    {
        $visitor_count = AfterAssessment::whereDate('created_at', Carbon::today())->count();
        $arrival_count = Arrival::whereDate('created_at', Carbon::today())->count();
        $allow_to_enter = Arrival::whereDate('created_at', Carbon::today())->where('admit_entry','yes')->count();
        $visitor = AfterAssessment::orderBy('created_at','desc')->limit(3)->get();


        //today failed Visitor data
        $today_actual_total_visitor = AfterAssessment::whereDate('created_at', Carbon::today())->count();
        $today_total_visitor = $today_actual_total_visitor ? : 1;
        $before_temperature = AfterAssessment::whereDate('created_at', Carbon::today())->where('check_temp',0)->count();
        $percent_fail_before_temp = ($before_temperature*100)/$today_total_visitor;

        $today_actual_arrival_count = Arrival::whereDate('created_at', Carbon::today())->count();
        $today_arrival_count = $today_actual_arrival_count ? : 1;
        $high_temperatur = Arrival::whereDate('created_at', Carbon::today())->where('approved_to_enter','no')->count();
        $percent_high_temperature = ($high_temperatur*100)/$today_arrival_count;

        //weekly failed visitor data
        $weekly_actual_total_visitor = AfterAssessment::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $weekly_total_visitor = $weekly_actual_total_visitor ? : 1 ;
        $weekly_before_temperature = AfterAssessment::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('check_temp',0)->count();
        $weekly_percent_fail_before_temp = ($weekly_before_temperature*100)/$weekly_total_visitor;

        $weekly_actual_total_arrival = Arrival::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $weekly_total_arrival = $weekly_actual_total_arrival ? : 1 ;
        $weekly_high_temperatur = Arrival::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('approved_to_enter','no')->count();
        $weelly_percent_high_temperature = ($weekly_high_temperatur*100)/$weekly_total_arrival;

        return view('index',get_defined_vars());
    }
    public function reset()
    {
        AfterAssessment::where('id', '>=', 1)->delete();
        Arrival::where('id','>=',1)->delete();
        Personnel::where('id','>=',1)->delete();
        return back()->with('message', 'The System is Reset Successfully');
    }
    public function list()
    {
        $langs = Language::all();
       return view('Admin.personnel.index',get_defined_vars()); 
    }
    public function create()
    {
        $languages = Language::all();
        return view('Admin.personnel.create',get_defined_vars());
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'language_id'=> 'required',
            'contact' =>'required',
          ]);
          $personnel =  Personnel::create([
               'name'=>$request->name,
               'contact'=>$request->contact,
               'language_id'=>$request->language_id,
               'url'=>"",
           ]);
           $language = Language::find($request->language_id);
           $lang_code = $language->short_code;
           $personnel->update([
               'url'=>route('home')."?personnel=$personnel->id&lang=$lang_code",
           ]);
        return redirect()->route('personnel.list')->with('message','personnel created Successfully');
    }
    public function edit($id)
    {
        $languages = Language::all();
        $personnel = Personnel::find($id);
        return view('Admin.personnel.edit',get_defined_vars());
    }
    public function update(Request $request,$id)
    {
        $personnel = Personnel::find($id);
        $personnel->name = $request->name;
        $personnel->contact = $request->contact;
        $personnel->language_id = $request->language_id;
        $personnel->save();
        return redirect()->route('personnel.list')->with('message','The List updated Successfully');
    }
    public function delete($id)
    {
        $personnel = Personnel::find($id);
        $personnel->delete();
        return redirect()->route('personnel.list')->with('message','The List is deleted successfully');
    }
}

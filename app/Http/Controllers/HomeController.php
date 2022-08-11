<?php

namespace App\Http\Controllers;

use App\Models\AfterAssessment;
use App\Models\Department;
use App\Models\Visitor;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\LanguageString;
use App\Models\Language;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $departments = Department::with('zone')->get();
        $language = Language::where('short_code', $request->lang)->pluck('id');
        $lang_string = LanguageString::where('language_id', $language)->pluck('value', 'key');
        return view('welcome', get_defined_vars());
    }
    public function arrival(Request $request)
    {
        //dd($request->all());
        if($request->department)
        {
            $departments = Department::find($request->department);
            $visitor = AfterAssessment::where('department_id', $request->department)->whereDoesntHave('arrival')->get();
        }
        else
            abort(403);
            
        return view('arrival_form',get_defined_vars());
    }
     public function thankYou(){
        return view('after_submission');
    }
}

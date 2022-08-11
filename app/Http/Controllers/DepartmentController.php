<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Visitor;
use App\Models\Zone;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments =  Department::with('zone')->get();
        return view('Admin.department.index', get_defined_vars());
    }
    public function create()
    {
        $zones = Zone::all();
        return view('Admin.department.create' , get_defined_vars());
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email' =>'required|email',
            'zone_id'=>'required',
        ]);
        Department::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'zone_id'=>$request->zone_id,
        ]);
        return redirect()->route('department.index')->with('message','The Department is Created Successfully');
    }
    public function delete($id)
    {
       $departments = Department::find($id);
       $departments->delete();
       return redirect()->route('department.index')->with('message','The department is deleted successfully');
    }
    public function edit($id)
    {
       $departments = Department::find($id); 
       $zones = Zone::all();
       return view('Admin.department.edit',get_defined_vars());
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'email' =>'required|email',
        ]);
       $departments = Department::find($id);
       $departments->name = $request->name;
       $departments->email = $request->email;
       $departments->zone_id = $request->zone_id;
       $departments->update();
       return redirect()->route('department.index')->with('message','The Department is updated successfull');
    }
}

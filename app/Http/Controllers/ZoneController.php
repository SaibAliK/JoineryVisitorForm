<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    public function index()
    {
        $zones = Zone::all();
        return view('Admin.zone.index' , get_defined_vars());
    }
    public function create()
    {
        return view('Admin.zone.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'number' =>'required',
        ]);
        Zone::create([
            'name'=>$request->name,
            'number'=>$request->number,
        ]);
        return redirect()->route('zone.index')->with('message','The Zone is Created Successfully');
    }
    public function edit($id)
    {
        $zone = Zone::find($id);
        return view('Admin.zone.edit',get_defined_vars());
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'number' =>'required',
        ]);
       $zone = Zone::find($id);
       $zone->name = $request->name;
       $zone->number = $request->number;
       $zone->update();
       return redirect()->route('zone.index')->with('message','The Zone is updated successfull');
    }
    public function delete($id)
    {
        $zone = Zone::find($id);
       $zone->delete();
       return redirect()->route('zone.index')->with('message','The Zone is deleted successfully');
    }
}

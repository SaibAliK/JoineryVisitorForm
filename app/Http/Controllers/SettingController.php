<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function create()
    {
        $setting = Setting::pluck('setting', 'name');
        return view('Admin.setting.create',get_defined_vars());
    }
    public function Save_Setting(Request $request)
    {
        $setting = $request->except('_token');
        foreach ($setting as $key => $value) {
            if (empty($value))
                continue;
            $set = Setting::where('name', $key)->first() ?: new Setting();
            $set->name = $key;
            $set->setting = $value;
            $set->save();
        }
        return redirect()->back()->with('message','The setting is created successfully');
    }
}

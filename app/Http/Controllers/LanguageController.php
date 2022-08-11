<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\LanguageString;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::all();
        return view('Admin.language.index', get_defined_vars());
    }


    public function create()
    {
        return view('Admin.language.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'short_code' => 'required',
        ]);
        Language::create([
            'name' => $request->name,
            'short_code' => $request->short_code
        ]);
        return redirect()->route('language.index')->with('message', 'The Language is Added Successfully');
    }
    public function edit($id)
    {
        $language = Language::find($id);
        return view('Admin.language.edit', get_defined_vars());
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'short_code' => 'required',
        ]);
        $language = Language::find($id);
        $language->name = $request->name;
        $language->short_code = $request->short_code;
        $language->update();
        return redirect()->route('language.index')->with('message', 'The language is updated successfull');
    }

    public function destroy($id)
    {
       
    }
    public function show($id)
    {
        $language = Language::find($id);
        $language->delete();
        return redirect()->back()->with('message', 'The language is deleted successfully');
    }

    public function add_language_translation($languageId)
    {
        $lang_id = $languageId;
        $language = LanguageString::where('language_id', $languageId)->pluck('value', 'key');
        return view('Admin.languageString.create', get_defined_vars());
    }

    public function store_language_translation(Request $request, $languageId)
    {
        // dd($request->all());
        $strings = $request->except('_token');
        foreach ($strings as $key => $value) {
            if (empty($value))
                continue;
            $set = LanguageString::where('key', $key)->where('language_id', $languageId)->first() ?: new LanguageString();
            $set->language_id = $languageId;
            $set->key = $key;
            $set->value = $value;
            $set->save();
        }

        return redirect()->back()->with('message', 'The Language Translation is Added Successfully');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'short_code',
    ];

    public function languageStrings()
    {
    	return $this->hasMany('App\Models\LanguageString');
    }
    public function personnels()
    {
        return $this->hasMany('App\Models\Personnel');
    }
}

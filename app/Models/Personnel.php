<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    protected $fillable =[
        'name','url','contact','language_id'
    ];
    
    public function language()
    {
        return $this->belongsTo('App\Models\Language');
    }
    public function afterassessment()
    {
        return $this->hasMany('App\Models\AfterAssessment');
    }
}

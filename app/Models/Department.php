<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'email',
        'zone_id'
    ];

    public function afterAssessments()
    {
    	return $this->hasMany('App\Models\AfterAssessment');
    }
    public function zone()
    {
        return $this->belongsTo('App\Models\Zone');
    }
    public function arrivals()
    {
    	return $this->hasMany('App\Models\Arrival');
    }
}

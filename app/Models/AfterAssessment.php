<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AfterAssessment extends Model
{
    use HasFactory;
    protected $fillable=[
        'driver_name','driver_mobile','freight_company',
        'description_of_freight','taste_and_smell',
        'countries','close_contact','diagnosed_with_Covid',
        'signature','check_temp','arrival','travel_alone',
        'department_id','date','time','passenger_contact','passenger_name',
        'vehicle_number','joinery_zone_number','dept_contact'
    ];
    public function arrival()
    {
        return $this->hasOne('App\Models\Arrival', 'after_assessments_id');
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }
}

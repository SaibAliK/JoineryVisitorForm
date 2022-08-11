<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrival extends Model
{
    use HasFactory;
    protected $fillable = [
        'date','after_assessments_id',
        'temperature','approved_to_enter',
        'admit_entry','comment','reason','department_id'
    ];

    public function afterassessment()
    {
        return $this->belongsTo('App\Models\AfterAssessment','after_assessments_id');
    }
    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }
}

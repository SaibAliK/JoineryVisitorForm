<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;
    protected $fillable =['name','number'];

    public function department()
    {
    	return $this->hasMany('App\Models\Department');
    }
}

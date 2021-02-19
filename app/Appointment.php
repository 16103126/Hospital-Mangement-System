<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable=[
       'patient_name','address','old','gender','phone','email','doctor','diseas'
    ];
}

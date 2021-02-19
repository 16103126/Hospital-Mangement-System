<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable=[
     'name','spacialist','qualification','schedule','contact','email','image','room'
    ];
}

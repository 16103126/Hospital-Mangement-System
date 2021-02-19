<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable=[
       'id','day','time','d_name','room_number'
    ];
}

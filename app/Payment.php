<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
   protected $fillable=['id','p_name','date','r_price','d_price','t_price','m_price','total_price'];
}

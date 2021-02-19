<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paymentoo extends Model
{
    protected $fillable=[
         'id','payment_id','payer_email','amount','currency','payment_status'
    ];
}

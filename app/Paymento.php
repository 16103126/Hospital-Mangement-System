<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paymento extends Model
{
    protected $fillable=[
         'id','payment_id','payer_email','amount','currency','payment_status'
    ];
}

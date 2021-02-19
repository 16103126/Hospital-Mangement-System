<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Receptionist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReceptionistController extends Controller
{
     public function index()
	{
   return view('backend.partials.receptiondashboard');
	     }
}

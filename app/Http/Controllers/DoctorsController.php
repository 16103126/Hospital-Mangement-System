<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Doctors;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorsController extends Controller
{
        public function index()
	{
   return view('backend.partials.doctordashboard');
	}
    
}

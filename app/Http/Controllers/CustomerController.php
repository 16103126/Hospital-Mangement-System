<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class CustomerController extends Controller
{
	public function printPDF(){
     
        
        $pdf = PDF::loadView('backend.customer');  
        return $pdf->stream('medium.pdf');
    }
}

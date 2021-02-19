<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use PDF;

class PaymentController extends Controller
{
   public function printPDF(){
     
        $payment=Payment::find(7);
       
        $pdf= PDF::loadView('backend.payment.show',compact('payment')); 
        
        return $pdf->stream('medium.pdf');
    }
    


    public function index()
    {

    	$payment=Payment::paginate(5);
    	return view('backend.payment.index',compact('payment'));
    }
     public function create()
    {
    	return view('backend.payment.create');
    }
    public function store(Request $request)
    {
    	$request->validate([
         
         'p_name'=> 'required',
         'date'=>'required',
         'r_price'=> 'required',
         'd_price'=>'required',
         't_price'=> 'required',
         'm_price'=> 'required'
         
    	]);
    	$payment= new Payment([
        
         'p_name'=>$request->get('p_name'),
         'date'=>$request->get('date'),
         'r_price'=>$request->get('r_price'),
         'd_price'=>$request->get('d_price'),
         't_price'=>$request->get('t_price'),
         'm_price'=>$request->get('m_price'),
         'total_price'=>($request->get('r_price') + $request->get('d_price') + $request->get('t_price') + $request->get('m_price') )
    	]); 
    	$payment->save();
    	return redirect('/payment')->with('success','payment is Saved');  

    	
    }
    public function edit($id)
    {

    	$payment= Payment::find($id);

    	return view('backend.payment.edit', compact('payment'));
    	
    }
    
    public function update( Request $request, $id)
    {
    	$request->validate([
         
         'p_name'=> 'required',
         'date'=>'required',
         'r_price'=> 'required',
         'd_price'=>'required',
         't_price'=> 'required',
         'm_price'=> 'required',
         
    	]);

    	$payment=Payment::findOrFail($id);
    	
    	$payment->p_name=$request->get('p_name');
    	$payment->date=$request->get('date');
    	$payment->r_price=$request->get('r_price');
    	$payment->d_price=$request->get('d_price');
    	$payment->t_price=$request->get('t_price');
    	$payment->m_price=$request->get('m_price');
    	$payment->total_price=($request->get('r_price') + $request->get('d_price') + $request->get('t_price') + $request->get('m_price') );
    	$payment->save();
    	return redirect('/payment')->with('success', 'Data is Update');
    }
    public function show($id)
    {
        $payment=Payment::findOrFail($id);
        return view('backend.payment.show', compact('payment'));
    }

    public function destroy($id)
    {
    	$payment=Payment::find($id);
    	$payment->delete();
    	return redirect('/room')->with('success', 'Data is delete Successfully');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presception;
use PDF;

class PresceptionController extends Controller
{
       public function printPDF(){
     
        $pres=Presception::find(6);
       
        $pdf= PDF::loadView('backend.presception.print',compact('pres')); 
        
        return $pdf->stream('medium.pdf');
       

    }


    public function index(){
    	$pres=Presception::paginate(5);
        return view('backend.presception.index',compact('pres'));
    }

    public function create()
    {
    	return view('backend.presception.create');
    }
    public function store( Request $request)
    {
    	$request-> validate([
         'd_name'=>'required',
         'date'=>'required',
         'p_name'=>'required',
         'age'=>'required',
         'gender'=>'required',
         'diseas'=>'required',
         'examination'=>'required',
         'provisional'=>'required',
         'differential'=>'required',
         'lab'=>'required',
         'advice'=>'required',
         'medicine'=>'required'
    	]);
    	$pres= new Presception([
         
         'd_name'=>$request->get('d_name'),
         'date'=>$request->get('date'),
         'p_name'=>$request->get('p_name'),
         'age'=>$request->get('age'),
         'gender'=>$request->get('gender'),
         'diseas'=>$request->get('diseas'),
         'examination'=>$request->get('examination'),
         'provisional'=>$request->get('provisional'),
         'differential'=>$request->get('differential'),
         'lab'=>$request->get('lab'),
         'advice'=>$request->get('advice'),
         'medicine'=>$request->get('medicine'),
         
    	]); 
    	$pres->save();
    	return redirect('/presception')->with('success','presception create successfully.'); 
    }
    public function show($id)
    {
        $pres=Presception::findOrFail($id);
        return view('backend.presception.show', compact('pres'));
    }
    public function edit($id)
    {

    	$pres= Presception::find($id);

    	return view('backend.presception.edit', compact('pres'));
    	
    }
    
    public function update( Request $request, $id)
    {
    	$request-> validate([
         'd_name'=>'required',
         'date'=>'required',
         'p_name'=>'required',
         'age'=>'required',
         'gender'=>'required',
         'diseas'=>'required',
         'examination'=>'required',
         'provisional'=>'required',
         'differential'=>'required',
         'lab'=>'required',
         'advice'=>'required',
         'medicine'=>'required'
    	]);
    	$pres=Presception::findOrFail($id);
    	$pres->d_name=$request->get('d_name');
    	$pres->date=$request->get('date');
    	$pres->p_name=$request->get('p_name');
    	$pres->age=$request->get('age');
    	$pres->gender=$request->get('gender');
    	$pres->diseas=$request->get('diseas');
    	$pres->examination=$request->get('examination');
    	$pres->provisional=$request->get('provisional');
    	$pres->differential=$request->get('differential');
    	$pres->lab=$request->get('lab');
    	$pres->advice=$request->get('advice');
    	$pres->medicine=$request->get('medicine');

    	$pres->save();
    	return redirect('/presception')->with('success', 'presception Update successfully.');
    }

    public function destroy($id)
    {
        Presception::where('id', $id)->delete();
    	
    	return redirect('/presception')->with('success', 'Data delete Successfully');

    }
}

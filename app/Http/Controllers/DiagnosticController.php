<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diagnostic;

class DiagnosticController extends Controller
{
     public function index()
    {
    	$diagnostic=Diagnostic::paginate(5);
    	return view('backend.diagnostic.index',compact('diagnostic'));
    }
    public function create()
    {
    	return view('backend.diagnostic.create');
    }
    public function store(Request $request)
    {
    	$request->validate([
         'p_name'=>'required',
         'date'=> 'required',
         't_name'=> 'required',
         'test_price'=>'required'
    	]);
    	$diagnostic= new Diagnostic([
         'p_name'=>$request->get('p_name'),
         'date'=>$request->get('date'),
         't_name'=>$request->get('t_name'),
         'test_price'=>$request->get('test_price')
    	]); 
    	$diagnostic->save();
    	return redirect('/diagnostic')->with('success','diagnostic is Saved');  

    	
    }
    public function edit($id)
    {

    	$diagnostic= Diagnostic::find($id);

    	return view('backend.diagnostic.edit', compact('diagnostic'));
    	
    }
    
    public function update( Request $request, $id)
    {
    	$request->validate([
         'p_name'=>'required',
         'date'=> 'required',
         't_name'=> 'required',
         'test_price'=>'required'
    	]);

    	$diagnostic=Diagnostic::findOrFail($id);
    	$diagnostic->p_name=$request->get('p_name');
    	$diagnostic->date=$request->get('date');
    	$diagnostic->t_name=$request->get('t_name');
    	$diagnostic->test_price=$request->get('test_price');
    	$diagnostic->save();
    	return redirect('/diagnostic')->with('success', 'Data is Update');
    }

    public function destroy($id)
    {
    	$diagnostic=Diagnostic::find($id);
    	$diagnostic->delete();
    	return redirect('/diagnostic')->with('success', 'Data is delete Successfully');

    }
}

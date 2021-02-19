<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
    	$contact=Contact::paginate(5);
    	
        return view('backend.contact.index', compact('contact'));
    }
    public function create()
    {
        return view('backend.contact.create');
    }
    public function store( Request $request)
    {
    	$request->validate([
           'contact_name'=>'required',
           'contact_email'=>'required',
           'contact_subject'=>'required',
           'contact_message'=>'required'
    	]);
    	$contact= new Contact([
         'contact_name'=>$request->get('contact_name'),
         'contact_email'=>$request->get('contact_email'),
         'contact_subject'=>$request->get('contact_subject'),
         'contact_message'=>$request->get('contact_message')
    	]);
    	$contact->save();

    	
    	return redirect('/create')->with('success','Message send.');
    }
    public function destroy($id)
    {
        $contact=Contact::findOrFail($id);
        $contact->delete();
        return redirect('/contact')->with('success','data delete successfully');

    }
}

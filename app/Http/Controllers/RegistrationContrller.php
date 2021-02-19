<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RegistrationContrller extends Controller
{
public function index()
{

    $user = User:: orderBy('id','desc')->get();
    return view('backend.user.index',compact('user'));
}

    public function create()
    {
        $user = User:: orderBy('id','desc')->get();
    	return view('frontend.registration.create',compact('user'));
    }
    public function store(Request $request)
    {
    	$request->validate([
    		'name'=>'required',
    		'email'=>'required|email',
    		'password'=>'required|confirmed',
            'role'=>'required'
    		]);
    	$registration= new User([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>$request->get('password'),
            'role'=>$request->get('role')
    	]);
    	$registration->save();
    	auth()->login($registration);
    	return redirect()->route('user.index')->with('success','You are Register now.');
    }
    public function edit($id)
    {
        $user = User:: orderBy('id','desc')->get();
        $registration=User::find($id);
        
        return view('backend.user.edit',compact('registration'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'role'=>'required'
            ]);
        $registration=User::find($id);
        $registration->name=$request->get('name');
        $registration->email=$request->get('email');
        $registration->role=$request->get('role');
        $registration->save();
        auth()->login($registration);
        return redirect('/user')->with('success', 'data update successfully');

    }
    public function destroy($id)
    {
        $registration=User::find($id);
        $registration->delete();
        return redirect('/user')->with('success', 'data delete successfully');
    }
}

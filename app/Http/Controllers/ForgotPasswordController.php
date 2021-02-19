<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Reminder;
use App\User;
use Mail;

class ForgotPasswordController extends Controller
{
    public function forgot()
    {
    	return view('frontend.login.forgot');
    }
    public function password(Request $request)
    {
    	$user=User::whereEmail($request->email)->first();
    	if(count($user)==0)
    	{
    		return redirect()->back()->with(['error'=> 'Email not exists']);
    	}
    	$user=Sentinal::findById($user->id);
    	$reminder=Reminder::exists($user)?:Reminder::create($user);
    	$this->sendEmail($user, $reminder->code);
    	return redirect()->back()->with(['success'=> 'Rset code sent to your email.']);
    }
    public function sendEmail($user, $code)
    {
        mail::send(
           'email.forgot',
           ['user'=>$user, 'codr'=>$code],
           function($message) use ($user){
           	$message->to($user->email);
           	$message->subject("Hello $user->name", "Activate your account.");
           }
        );
    }
    public function reset($email, $code)
    {
         $user=User::whereEmail($email)->first();
    	if($user==null)
    	{
    		echo 'Email not exists';
    	}
    	$user=Sentinal::findById($user->id);
    	$reminder=Reminder::exists($user);
    	if($reminder){
             if($code==$reminder->code)
             {
             	return view('frontend.login.reset_password')->with(['user'=>$user, 'code'=>$code]);
             }else 
             {
                  return redirect('/');
             }
    	}else
    	{
    		echo 'time expired';
    	}
    }
    public function resetPassword(Request $request, $email, $code)
    {
    	$this ->validate($request, [
    		'password'=>'required|min:7|max:12|confirmed',
    		'password_confirmation'=>'required|min:7|max:12'
    	]);
    	 $user=User::whereEmail($email)->first();
    	 if($user==null)
    	{
    		echo 'Email not exists';
    	}
    	 $user=Sentinal::findById($user->id);
    	 $reminder=Reminder::exists($user);
    	 if($reminder){
             if($code==$reminder->code)
             {
             	Reminder::complete($user, $code, $request->password);
             	return redirect('/login')->with('success', 'Password reset. Please login with new password.');
             }else 
             {
                  return redirect('/');
             }
    	}else
    	{
    		echo 'time expired';
    	}
    }
}

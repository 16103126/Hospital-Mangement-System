<?php

namespace App\Http\Controllers;
use App\Appointment;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
	 public function request()
    {
        $appointment=Appointment::all();
        return view('backend.appointment.patientInformation', compact('appointment'));
    }
    public function make()
    {
    	 
    	return view('backend.appointment.appointment');
    }
    public function list()
    {
         $appointment=Appointment::all();
        return view('backend.appointment.appointmentList', compact('appointment'));
            
    }
     public function show()
    {
         $appointment=Appointment::all();
        return view('backend.appointment.show', compact('appointment'));
            
    }
    public function store(Request $request)
    {
    	$request->validate([
    		'patient_name'=>'required',
    		'address'=>'required',
    		'old'=>'required',
    		'gender'=>'required',
    		'phone'=>'required',
    		'email'=>'required',
            'doctor'=>'required',
    		'diseas'=>'required'
    	]);
    	$appointment= new Appointment([
            'patient_name'=>$request->get('patient_name'),
            'address'=>$request->get('address'),
            'old'=>$request->get('old'),
            'gender'=>$request->get('gender'),
            'phone'=>$request->get('phone'),
            'email'=>$request->get('email'),
            'doctor'=>$request->get('doctor'),
            'diseas'=>$request->get('diseas')
    	]);
    	$appointment->save();
    	return redirect('/appointment')->with('success','Appointment send');
    }
    public function edit($id)
    {

        $appointment=Appointment::find($id);
        return view('backend.appointment.edit', compact('appointment'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $request->validate([
            'patient_name'=>'required',
            'address'=>'required',
            'old'=>'required',
            'gender'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'doctor'=>'required',
            'diseas'=>'required'
        ]);

        $appointment=Appointment::find($id);
        $appointment->patient_name = $request->get('patient_name');
           $appointment->address= $request->get('address');
           $appointment->old = $request->get('old');
            $appointment->gender = $request->get('gender');
            $appointment->phone= $request->get('phone');
            $appointment->email = $request->get('email');
            $appointment->doctor = $request->get('doctor');
            $appointment->diseas = $request->get('diseas');
        $appointment->save();
        return redirect()->route('appointmentList')->with('success', 'appointment Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment= Appointment::find($id);
       // dd($appointment);
        $appointment->delete();
        return redirect()->back()->with('success', 'appointment deleted!');
    }
       
}

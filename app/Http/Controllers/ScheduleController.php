<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;

class ScheduleController extends Controller
{
    public function index()
    {
    	$schedule=Schedule::paginate(5);
    	return view('backend.schedule.index',compact('schedule'));
    }
     public function show()
    {
        $schedule=Schedule::paginate(5);
        return view('backend.schedule.show',compact('schedule'));
    }
     
    public function create()
    {
    	return view('backend.schedule.create');
    }
    public function store(Request $request)
    {
    	$request->validate([
         'day'=>'required',
         'time'=> 'required',
         'd_name'=> 'required',
         'room_number'=>'required'
    	]);
    	$schedule= new Schedule([
         'day'=>$request->get('day'),
         'time'=>$request->get('time'),
         'd_name'=>$request->get('d_name'),
         'room_number'=>$request->get('room_number')
    	]); 
    	$schedule->save();
    	return redirect('/schedule')->with('success','schedule is Saved');  

    	
    }
    public function edit($id)
    {

    	$schedule= Schedule::find($id);

    	return view('backend.schedule.edit', compact('schedule'));
    	
    }
    
    public function update( Request $request, $id)
    {
    	$request->validate([
         'day'=>'required',
         'time'=> 'required',
         'd_name'=> 'required',
         'room_number'=>'required'
    	]);

    	$schedule=Schedule::findOrFail($id);
    	$schedule->day=$request->get('day');
    	$schedule->time=$request->get('time');
    	$schedule->d_name=$request->get('d_name');
    	$schedule->room_number=$request->get('room_number');
    	$schedule->save();
    	return redirect('/schedule')->with('success', 'Data is Update');
    }

    public function destroy($id)
    {
    	$schedule=Schedule::find($id);
    	$schedule->delete();
    	return redirect('/schedule')->with('success', 'Data is delete Successfully');

    }
}

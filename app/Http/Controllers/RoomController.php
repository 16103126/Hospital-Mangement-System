<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;





class RoomController extends Controller
{
    public function index()
    {
    	$room=Room::paginate(5);
    	return view('backend.room.index',compact('room'));
    }
    public function create()
    {
    	return view('backend.room.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'number'=>'required',
          'name'=>'required',
          'type'=>'required',
          'price'=>'required'

        ]);
        $room= new Room([
         'number'=>$request->get('number'),
         'name'=>$request->get('name'),
         'type'=>$request->get('type'),
         'price'=>$request->get('price')
        ]); 
        $room->save();
        return redirect('/room')->with('success','Room is Saved');  
    }
    
    
    public function edit($id)
    {

    	$room= Room::find($id);

    	return view('backend.room.edit', compact('room'));
    	
    }
    
    public function update( Request $request, $id)
    {
    	$request->validate([
    		'number'=>'required',
          'name'=>'required',
          'type'=>'required',
          'price'=>'required'

    	]);

    	$room=Room::findOrFail($id);
    	$room->number=$request->get('number');
    	$room->name=$request->get('name');
    	$room->type=$request->get('type');
    	$room->price=$request->get('price');
    	$room->save();
    	return redirect('/room')->with('success', 'Data is Update');
    }

    public function destroy($id)
    {
    	$room=Room::find($id);
    	$room->delete();
    	return redirect('/room')->with('success', 'Data is delete Successfully');

    }
    

}

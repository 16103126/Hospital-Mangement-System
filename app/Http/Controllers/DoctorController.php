<?php

namespace App\Http\Controllers;
use App\Doctor;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Doctor::latest()->paginate(5);
        return view('backend.doctors.index', compact('data'));
                   
    }
     public function view()
    {
        $data=Doctor::latest()->paginate(5);
        return view('backend.doctors.view', compact('data'));
                   
    }
    public function doctorlist()
    {
        $data=Doctor::latest()->paginate(5);
        return view('backend.doctors.doctorlist', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'name'=>'required',
          'spacialist'=>'required',
          'qualification'=>'required',
          'schedule'=>'required',
          'contact'=>'required',
          'email'=>'required',
          'room'=>'required',
          'image'=>'required|image|max:2048'
        ]);
        $image=$request->file('image');
        $new_name=rand() . '.'. $image->getClientOriginalExtension();
        $image->move(public_path('image'), $new_name);
        $form_data=array(
           'name' => $request->name,
           'spacialist'=>$request->spacialist,
           'qualification'=>$request->qualification,
           'schedule'=>$request->schedule,
           'contact'=>$request->contact,
           'email'=>$request->email,
           'room'=>$request->room,
           'image'=>$new_name
           );
        Doctor::create($form_data);
        return redirect('doctors')->with('succes', 'Data Added Successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Doctor::findOrFail($id);
        return view('backend.doctors.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Doctor::findOrFail($id);
        //dd($data);
        return view('backend.doctors.edit', compact('data'));
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
          'name'=>'required',
          'spacialist'=>'required',
          'qualification'=>'required',
          'schedule'=>'required',
          'contact'=>'required',
          'email'=>'required',
          'room'=>'required',
        
          ]);

  
        $image=$request->file('image');
       
        if ($image!= null)
        {
            $new_name=rand() . '.'. $image->getClientOriginalExtension();
           $image= $image->move(public_path('image'), $new_name);
            $form_data=array(
           'name' => $request->name,
           'spacialist'=>$request->spacialist,
           'qualification'=>$request->qualification,
           'schedule'=>$request->schedule,
           'contact'=>$request->contact,
           'email'=>$request->email,
           'room'=>$request->room,
           'image'=>$new_name

           );
           
           
              Doctor::whereId($id)->update($form_data);
             
              return redirect('doctors')->with('success', 'Data is Successfully update');
           
        }
      
          
       
           $form_data=array(
           'name' => $request->name,
           'spacialist'=>$request->spacialist,
           'qualification'=>$request->qualification,
           'schedule'=>$request->schedule,
           'contact'=>$request->contact,
           'email'=>$request->email,
           'room'=>$request->room,

           );
          

              Doctor::whereId($id)->update($form_data);
             
              return redirect('doctors')->with('success', 'Data is Successfully update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= Doctor::findOrFail($id);
        $data->delete();
        return redirect('doctors')->with('success', 'Data is Successfully deleted');
        
    }
}

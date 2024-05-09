<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Appointement;

class AdminController extends Controller
{
    public function addview()
    {
       

        return view('admin.add_doctor');
    }
    public function upload(Request $request)
    {

        $doctor=new doctor;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('doctorimage',$imagename);

        $doctor->image=$imagename;
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;
        

        $doctor->save();

        return redirect()->back()->with('message','Doctor Added Successfully');

    }
    public function show_appointement(){

        $data = Appointement::all();
        
        return view('admin.showappointements',compact('data'));
    }
    public function show_doctors(){

        $data = Doctor::all();
        
        return view('admin.doctors',compact('data'));
    }
    public function approved($id){
        $data = Appointement :: find($id);

        $data-> status = 'Approved';

        $data->save();

        return redirect()->back();


    }
    public function canceled($id){
        $data = Appointement :: find($id);
        
        $data-> status = 'Canceled';

        $data->save();

        return redirect()->back();


    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointement;
use App\Http\Middleware;

class HomeController extends Controller
{
    public function index(){

      if(Auth::id())
      {
        return redirect('home');
      }
      else{

        $doctor= doctor::all();

        return view('user.home',compact('doctor'));
      }
   

    }
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){

                $doctor = doctor::all();
                return view('user.home',compact('doctor'));
            }
            else{

                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
        
    }
    public function appointement(Request $request){

        if (!Auth::check()) {

            return redirect()->back()->with('message2', 'Appointment Request Failed. Login with your account first!');
        }
        else{
  
            $data=new appointement;

            $data->name=$request->name;

            $data->email=$request->email;

            $data->date=$request->date;

            $data->phone=$request->phone;

            $data->doctor=$request->doctor;

            $data->message=$request->message;

            $data->status='In Progress';

        
            $data->user_id=Auth::user()->id;

            $data->save();

                return redirect()->back()->with('message1','Appointment Request Succesful . We will contact with you soon');

            
        }
     
    }
    public function myappointement(){
        if(Auth::id()){

            $user_id=Auth::user()->id;
            $appoint=appointement::where('user_id',$user_id)->get();

            return view('user.my_appointement',compact('appoint'));

        }
        else{
            return redirect()->back();
        }

    }

    public function deleteapp($id){

        $data=appointement::find($id);
        $data->delete();

        return redirect()->back()->with('message3','Appointement was deleted successfully');
    }

}

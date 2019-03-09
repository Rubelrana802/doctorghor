<?php

namespace App\Http\Controllers;
use App\reg_doctor;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use image;

class DoctorRegisterController extends Controller
{
   public function RegistrationForm(){
        return view('doctor.register.register');
    }

    public function cregister(Request $request){
    	$doctoradd = new reg_doctor();
    	$doctoradd->name = $request->name;
    	$doctoradd->designation = $request->designation;
    	$doctoradd->specialty = $request->specialty;
      	$doctoradd->gender = $request->gender;
      	$doctoradd->mobile = $request->mobile;
      	$doctoradd->fee = $request->fee;
      	$doctoradd->image = $request->image;
      	$doctoradd->start_time = $request->starttime;
      	$doctoradd->end_time = $request->endtime;
      	$doctoradd->email = $request->email;
      	$doctoradd->password = $request->password;
      	$doctoradd->bmdc = $request->bmdc;
      	$doctoradd->description = $request->description;
      	$doctoradd->degree = $request->degree;
      	$doctoradd->address = $request->address;
      	$doctoradd->save();
    	return redirect()->back()->with('message','Doctor insert successfully.');
    }
    
}

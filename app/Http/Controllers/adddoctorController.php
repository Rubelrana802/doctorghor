<?php

namespace App\Http\Controllers;
use App\department;
use App\doctor;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use image;

class adddoctorController extends Controller
{
    public function index(){
        $hospital = Auth::guard('hospital')->user()->id ;
        $departments = DB::table('departments')
          ->select('id','name')
          ->where("hospital_id", "$hospital")
          ->get();
        return view('hospital.doctoradd.AddDoctor',get_defined_vars());
    }

    public function save(Request $request){
    	$doctoradd = new doctor();
    	$doctoradd->dept_id = $request->departments;
    	$doctoradd->name = $request->doctorname;
    	$doctoradd->Designation = $request->designation;
    	$doctoradd->Specialty = $request->specialty;
      $doctoradd->Gender = $request->Gender;
      $doctoradd->Mobile = $request->mobile;
      $doctoradd->fee = $request->fee;
      $doctoradd->start_time = $request->starttime;
      $doctoradd->end_time = $request->endtime;
      $doctoradd->email = $request->email;
      $doctoradd->password = $request->password;
      $doctoradd->bmdc = $request->bmdc;
      $doctoradd->Description = $request->description;
      $doctoradd->Degree = $request->degree;
      $doctoradd->Addreess = $request->addreess;

      //image upload
      if($request->hasFile('image')){
          $image_tmp = Input::file('image');
          if($image_tmp->isValid()){
            $extension = $image_tmp->getClientOriginalExtension();
            $filename = rand(111,99999).'.'.$extension;
            $large_image_path = 'public/admin/assets/images/doctor/large/'.$filename;
            $medium_image_path = 'public/admin/assets/images/doctor/medium/'.$filename;
            $small_image_path = 'public/admin/assets/images/doctor/small/'.$filename;
            // Resize Images
            Image::make($image_tmp)->save($large_image_path);
            Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
            Image::make($image_tmp)->resize(300,300)->save($small_image_path);
            // Store image name in products table
            $doctoradd->Image = $filename;
          }
        }
    	$doctoradd->save();
    	return redirect()->back()->with('message','Doctor insert successfully.');
    }

    public function manage(){
        $hospital = Auth::guard('hospital')->user()->id ;
        $doctors = DB::table('doctors')
          ->select('id','name', 'Designation', 'Mobile', 'Gender')
          ->where("dept_id", "$hospital")
          ->get();
        return view('hospital.doctoradd.ManageDoctor', compact('doctors'));
    }


    public function delete($id){
        $medicine = doctor::find($id);
        $medicine->delete();
        return redirect('/doctor/manage/')->with('message','Medicine name Deteted Successfully');
    }
}

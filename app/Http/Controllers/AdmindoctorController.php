<?php

namespace App\Http\Controllers;
use App\Hospital;
use App\doctor;
use App\reg_doctor;
use Illuminate\Http\Request;

class AdmindoctorController extends Controller
{
    public function index(){
    	$hospitals = Hospital::all();
        return view('admin.doctor.AddDoctor',get_defined_vars());
    }

	public function departments(){
      $hospitals_id = Input::get('hospital_id');
      $departments = department::where('hospital_id', '=', $hospitals_id)->get();
      return response()->json($departments);
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
            $doctoradd->image = $filename;
          }
        }
      $doctoradd->save();

    	return redirect()->back()->with('message','Doctor insert successfully.');
    }

    public function manage(){
        $doctors = doctor::all();
        return view('admin.doctor.ManageDoctor',get_defined_vars());
      }

    public function delete($id){
        $medicine = doctor::find($id);
        $medicine->delete();
        return redirect('/doctor/manage/')->with('message','Medicine name Deteted Successfully');
    }
    
    public function regdoctor(){
        $doctors = reg_doctor::all();
        return view('admin.regdoctor.showdoctor',get_defined_vars());
      }
}

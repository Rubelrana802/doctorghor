<?php

namespace App\Http\Controllers;
use Auth;
use App\Hospital;
use App\department;
use App\doctor;
use App\patient;
use DB;
use Illuminate\Http\Request;

class PatientController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:patient');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){ 
      $id = Auth::guard('patient')->user()->id;  
      $patients = DB::table('patients')
            ->join('doctors', 'patients.doctor_id', '=', 'doctors.id')
            ->join('departments', 'doctors.dept_id', '=', 'departments.id')
            ->join('hospitals', 'departments.hospital_id', '=', 'hospitals.id')
            ->select('patients.*', 'doctors.name AS doctor_name' ,'doctors.fee' , 'departments.name AS dept_name', 'hospitals.name AS hospital_name', 'hospitals.address')
            ->where('patients.id',$id)
            ->get();
      return view('patient.home.homeContent', get_defined_vars());
    }
}

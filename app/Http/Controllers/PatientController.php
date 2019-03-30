<?php

namespace App\Http\Controllers;
use Auth;
use App\Hospital;
use App\department;
use App\doctor;
use App\patient;
use App\otherpatient;
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
            ->select('patients.*', 'doctors.name AS doctor_name' ,'doctors.fee' ,'doctors.Mobile' , 'departments.name AS dept_name', 'hospitals.name AS hospital_name', 'hospitals.address')
            ->where('patients.id',$id)
            ->get();
      return view('patient.home.homeContent', get_defined_vars());
    }

    public function appointment(){
        return view('patient.doctorview.homeContent');
    }

    public function doctorviewpatient($id){ 
      $doctors = DB::table('doctors')
            ->join('departments', 'doctors.dept_id', '=', 'departments.id')
            ->join('hospitals', 'departments.hospital_id', '=', 'hospitals.id')
            ->select('doctors.*', 'departments.name AS dept_name', 'hospitals.name AS hospital_name')
            ->where('doctors.id',$id)
            ->get();
      return view('patient.doctorview.singledoctor', get_defined_vars());
    }

    public function patientappointment(Request $request){
    $doctor = $request->doctor_id;
    $datetime = $request->datetime;
    $doctors = DB::table('doctors')
            ->join('departments', 'doctors.dept_id', '=', 'departments.id')
            ->join('hospitals', 'departments.hospital_id', '=', 'hospitals.id')
            ->select('doctors.*', 'departments.name AS dept_name', 'hospitals.name AS hospital_name')
            ->where('doctors.id',$doctor)
            ->get();

    return view('patient.doctorview.appointment', get_defined_vars());
  }

    public function patientconfirm(Request $request){
      $patients = new otherpatient();
      $patients->patient_id = $request->patient_id;
      $patients->doctor_id = $request->doctor_id;
      $patients->datetime = $request->datetime;
      $patients->mobile = $request->mobile;
      $patients->save();
      return redirect('/patient/request/success')->with('message','Patient insert successfully.');
    }

      public function thankyou(){

    return view('patient.doctorview.request_success');
   }

    public function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('doctors')
        ->where('name', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; overflow-y: scroll; background-color:  #87CEFA; width: 100%; ">';
      foreach($data as $row)
      {
       $output .= '
       <li style="margin-left: 10px; margin-buttom: 10px; padding: 2px; "><a href="http://localhost/doctorghor/patient/single/'.$row->id.'">'.$row->name.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
}

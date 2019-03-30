<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\division;
use App\district;
use App\thana;
use App\Hospital;
use App\department;
use App\doctor;
use App\patient;
use App\notification;
use DB;
use App\Notifications\nofifydoctor;
use Auth;

class frontController extends Controller
{
    public function index(){
      $divisions = division::all();
      $departments = department::all();
      return view('frontend.home.homeContent', get_defined_vars());
    }

    public function districts(){
      $divs_id = Input::get('div_id');
      $districts = district::where('div_id', '=', $divs_id)->get();
      return response()->json($districts);
    }

    public function thanas(){
      $dists_id = Input::get('dist_id');
      $thanas = thana::where('dist_id', '=', $dists_id)->get();
      return response()->json($thanas);
    }

    public function hospitals(){
      $thanas_id = Input::get('thana_id');
      $hospitals = hospital::where('thana_id', '=', $thanas_id)->get();
      return response()->json($hospitals);
    }

    public function departments(){
      $hospitals_id = Input::get('hospital_id');
      $departments = department::where('hospital_id', '=', $hospitals_id)->get();
      return response()->json($departments);
    }

    public function doctors(){
      $depts_id = Input::get('departments');
      $doctors = doctor::where('dept_id', '=', $depts_id)->get();
      $hospitals = DB::table('doctors')
            ->join('departments', 'doctors.dept_id', '=', 'departments.id')
            ->join('hospitals', 'departments.hospital_id', '=', 'hospitals.id')
            ->select('doctors.*', 'departments.name AS dept_name', 'hospitals.name AS hospital_name')
            ->where('dept_id','=', $depts_id)
            ->get();

      return view('frontend.home.doctorview', get_defined_vars());
    }

    public function doctorsingle($id){ 
      $doctors = DB::table('doctors')
            ->join('departments', 'doctors.dept_id', '=', 'departments.id')
            ->join('hospitals', 'departments.hospital_id', '=', 'hospitals.id')
            ->select('doctors.*', 'departments.name AS dept_name', 'hospitals.name AS hospital_name')
            ->where('doctors.id',$id)
            ->get();
      return view('frontend.home.singledoctor', get_defined_vars());
    }

  public function appointment(Request $request){
    $doctor = $request->doctor_id;
    $datetime = $request->datetime;
    $doctors = DB::table('doctors')
            ->join('departments', 'doctors.dept_id', '=', 'departments.id')
            ->join('hospitals', 'departments.hospital_id', '=', 'hospitals.id')
            ->select('doctors.*', 'departments.name AS dept_name', 'hospitals.name AS hospital_name')
            ->where('doctors.id',$doctor)
            ->get();

    return view('frontend.home.appointment', get_defined_vars());
  }

  public function appointmentconfirm(Request $request){

      $patients = new patient();
      $patients->doctor_id = $request->doctorid;
      $patients->datetime = $request->datetime;
      $patients->name = $request->patientname;
      $patients->email = $request->email;
      $patients->mobile = $request->mobile;
      $patients->visit = $request->visit;
      $patients->password = $request->mobile;

      $mobile = $request->docmobile;

      $data_json = '{
       "from":"Infobip",
       "to":"'.$mobile.'",
       "text":"Hello, Your appointment Patient name: Rubel and appointment date & time: 25/03/2019 18:20. Thank you!"
    }';
    $authorization = base64_encode('rubelranaadmin:Rubel01775@');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Accept: application/json',"Authorization: Basic $authorization"));
    //curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_URL, 'https://api.infobip.com/sms/1/text/single');

    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response  = curl_exec($ch);
    //var_dump(curl_getinfo($ch));
    var_dump($response);
    curl_close($ch);
   $patients->save();

      return redirect('/thank/you')->with('message','patient insert successfully.');
  }


 
  public function thankyou(){

    return view('frontend.home.request_success');
   }

  public function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('doctors')
        ->where('name','Specialty', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; overflow-y: scroll; background-color:  #87CEFA; width: 100%; height: 242px;">';
      foreach($data as $row)
      {
       $output .= '
       <li style="margin-left: 10px; margin-buttom: 10px; padding: 2px; "><a target="_blank" href="http://localhost/doctorghor/doctor/single/'.$row->id.'">'.$row->name.'+'.($row->Specialty).'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }

    
}
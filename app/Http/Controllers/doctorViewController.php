<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medicine;
use App\patient;
use Auth;
use DB;
class doctorViewController extends Controller
{
  function index()
    {
     return view('doctor.medicineview.viewmedicine');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('medicines')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('unit', 'like', '%'.$query.'%')
         ->orWhere('generic', 'like', '%'.$query.'%')
         ->orWhere('price', 'like', '%'.$query.'%')
         ->orderBy('name')
         ->get();
         
      }
      else
      {
       $data = DB::table('medicines')
         ->orderBy('name')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->name.'</td>
         <td>'.$row->unit.'</td>
         <td>'.$row->generic.'</td>
         <td>'.$row->price.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }

    public function manage(){
        $doctor = Auth::guard('doctor')->user()->id;
        $patients = DB::table('patients')
          ->select('id','name', 'email', 'mobile', 'visit')
          ->where("doctor_id", $doctor)
          ->orderBy('id','desc')
          ->get();
        return view('doctor.patient.patientview', compact('patients'));
    }
}

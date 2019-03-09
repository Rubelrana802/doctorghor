<?php

namespace App\Http\Controllers;
use App\division;
use App\Hospital;
use Illuminate\Http\Request;

class HospitalRegisterController extends Controller
{
    public function Form(){
      $divisions = division::all();
      return view('hospital.register.register',get_defined_vars());
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

    public function hregister(Request $request){
    	$hospitaladd = new Hospital();
    	$hospitaladd->name = $request->name;
    	$hospitaladd->email = $request->email;
    	$hospitaladd->thana_id = $request->thanas;
    	$hospitaladd->address = $request->address;
    	$hospitaladd->password = $request->password;
    	$hospitaladd->save();

        return redirect('/hospital/login');
    }
}

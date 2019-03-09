<?php

namespace App\Http\Controllers;
use App\division;
use App\Hospital;
use Illuminate\Http\Request;

class AdminhospitalController extends Controller
{
    public function index(){
    	$divisions = division::all();
    	return view('admin.hospital.addhospital',get_defined_vars());
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
        return view('admin.hospital.addhospital');
    }

    public function manage(){
      $hospitals = Hospital::all();
      return view('admin.hospital.managehospital', get_defined_vars());
    }

    public function edit($id){
      $division = division::where('id',$id)->first();
      return view('admin.division.divisionEdit')->with(['division' => $division]);
    }

    public function update(Request $request){
      $division = division::find($request->divisionId); //form id 
      $division->name = $request->divisionName;
      $division->save();
      return redirect('/division/manage')->with('message','division Name Updated Successfully.');
    }

    public function delete($id){
        $divisions = division::find($id);
        $divisions->delete();
        return redirect('/division/manage/')->with('message','Detete Successfully');
    }

}

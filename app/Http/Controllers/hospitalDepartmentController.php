<?php

namespace App\Http\Controllers;
use App\Hospital;
use App\department;
use DB;
use Auth;
use Illuminate\Http\Request;

class hospitalDepartmentController extends Controller
{
    public function index(){
    	return view('hospital.department.adddepartment');
    }

    public function save(Request $request){
    	$hospitaladd = new department();
    	$hospitaladd->hospital_id = $request->hospitals;
    	$hospitaladd->name = $request->DepartmentName;
    	$hospitaladd->save();

    	return redirect('/hospitaldept/add')->with('message','Department Name Insert Successfully.');

    }

    public function manage(){
        $hospital = Auth::guard('hospital')->user()->id ;
        $departments = DB::table('departments')
          ->select('id','name')
          ->where("hospital_id", "$hospital")
          ->get();
        return view('hospital.department.managedepartment',get_defined_vars());
    }

    public function edit($id){
    	$division = division::where('id',$id)->first();
    	return view('hospital.division.divisionEdit')->with(['division' => $division]);
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

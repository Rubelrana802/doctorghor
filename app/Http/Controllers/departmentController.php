<?php

namespace App\Http\Controllers;
use App\Hospital;
use App\department;
use Illuminate\Http\Request;

class departmentController extends Controller
{
    public function index(){
    	$hospitals = hospital::all();
    	return view('admin.department.adddepartment', get_defined_vars());
    }

    public function save(Request $request){
    	$hospitaladd = new department();
    	$hospitaladd->hospital_id = $request->hospitals;
    	$hospitaladd->name = $request->DepartmentName;
    	$hospitaladd->save();

    	return redirect('/department/add')->with('message','Department Name Insert Successfully.');

    }

    public function manage(){
    	$departments = department::all();
    	return view('admin.department.managedepartment',get_defined_vars());
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

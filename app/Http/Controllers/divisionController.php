<?php

namespace App\Http\Controllers;

use App\division;

use Illuminate\Http\Request;

class divisionController extends Controller
{
    public function index(){
    	return view('admin.division.adddivision');
    }

    public function save(Request $request){
    	$divisionadd = new division();
    	$divisionadd->division_name = $request->divisionName;
    	$divisionadd->save();

    	return redirect('/division/manage')->with('message','Division Name Insert Successfully.');
    }

    public function manage(){
    	$division = division::all();
    	return view('admin.division.divisionManage')->with(['division' => $division]);
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

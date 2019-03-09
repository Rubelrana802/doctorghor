<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\district;
use App\division;



class districtController extends Controller
{
    public function index(){
        $division = division::all();
    	return view('admin.district.adddistrict', compact('division'));
    }

    public function save(Request $request){
    	$districtadd = new district();
        $districtadd->name = $request->DistrictName;
    	$districtadd->div_id = $request->division_id;
    	$districtadd->save();

    	return redirect()->back()->with('message','District Name Insert Successfully.');

    }

    public function manage(){
    	$district = district::all();
    	return view('admin.district.districtManage')->with(['district' => $district]);
    }


    public function edit($id){
    	$district = district::where('id',$id)->first();
    	return view('admin.district.districtEdit')->with(['district' => $district]);
    }

    public function update(Request $request){
    	$district = district::find($request->districtId); //form id 
    	$district->name = $request->DistrictName;
    	$district->save();
    	return redirect('/district/manage')->with('message','District Name Updated Successfully.');
    }

    public function delete($id){
        $districts = district::find($id);
        $districts->delete();
        return redirect('/district/manage/')->with('message','Detete Successfully');
    }


}

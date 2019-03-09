<?php

namespace App\Http\Controllers;
use App\medicine;
use App\company;
use DB;
use Auth;

use Illuminate\Http\Request;

class medicineController extends Controller
{
    public function index(){
    	return view('company.medicine.AddMedicine');
    }

    public function save(Request $request){
    	$medicineadd = new medicine();
    	$medicineadd->company_id = $request->company_id;
    	$medicineadd->name = $request->madicinename;
    	$medicineadd->unit = $request->unit;
    	$medicineadd->generic = $request->generic;
    	$medicineadd->price = $request->price;
    	$medicineadd->save();
    	return redirect()->back()->with('message','Medicine name insert successfully.');
    }

    public function manage(){
        $company = Auth::guard('company')->user()->id ;
        $medicine = DB::table('medicines')
          ->select('id','name', 'unit', 'generic', 'price')
          ->where("company_id", "$company")
          ->get();
        return view('company.medicine.ManageMedicine', compact('medicine'));
    }

    public function edit($id){
        $medicine = medicine::where('id',$id)->first();
        return view('company.medicine.EditMedicine')->with(['medicine' => $medicine]);
    }

    public function update(Request $request){
     $medicine = medicine::find($request->madicineid); //form id 
     $medicine->name = $request->input('madicinename');
     $medicine->unit = $request->input('unit');
     $medicine->generic = $request->input('generic');
     $medicine->price = $request->input('price');
     $medicine->save();
     return redirect('/medicine/manage')->with('message','Medicine name update successfully.');
    }

    public function delete($id){
        $medicine = medicine::find($id);
        $medicine->delete();
        return redirect('/medicine/manage/')->with('message','Medicine name Deteted Successfully');
    }

}

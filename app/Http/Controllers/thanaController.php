<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\division;
use App\district;
use App\thana;

class thanaController extends Controller
{
    public function index() { 
        $divisions = division::all();
        return view('admin.thana.addthana',get_defined_vars());

    }

    public function districts(){
      $divs_id = Input::get('div_id');
      $districts = district::where('div_id', '=', $divs_id)->get();
      return response()->json($districts);
    }

    public function save(Request $request){
    	$thanaadd = new thana();
    	$thanaadd->dist_id = $request->districts;
    	$thanaadd->name = $request->ThanaName;
    	$thanaadd->save();

    	return redirect('/thana/save')->with('message','Thana Name Insert Successfully.');

    }

    public function manage(){
        $thana = thana::all();
        return view('admin.thana.thanaManage')->with(['thana' => $thana]);
    }



}



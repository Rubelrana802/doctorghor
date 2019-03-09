<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyRegisterController extends Controller
{
    public function RegistrationForm(){
    	return view('company.register.register');
    }

    public function cregister(Request $request){
    	$conpanyadd = new Company();
    	$conpanyadd->name = $request->name;
    	$conpanyadd->Ref_code = $request->Reference_Code;
    	$conpanyadd->email = $request->email;
    	$conpanyadd->password = $request->password;
    	$conpanyadd->save();

        return redirect('/company/login');
    }
}

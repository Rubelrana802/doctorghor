<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Http\Request;

class AdminRegisterController extends Controller
{
    public function AdminRegistration(){
    	return view('admin.register.register');
    }

    public function Aregister(Request $request){
    	$adminadd = new Admin();
    	$adminadd->name = $request->name;
    	$adminadd->email = $request->email;
    	$adminadd->password = $request->password;
    	$adminadd->save();

        return redirect('/superadmin/login');
    }
}

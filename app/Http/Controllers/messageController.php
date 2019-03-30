<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messageController extends Controller
{
    public function sms(){
        return view('sms');
    }
}

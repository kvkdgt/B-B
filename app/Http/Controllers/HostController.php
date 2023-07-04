<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostController extends Controller
{
    public function dashboard(){
        return view('host/dashboard');
    }
}

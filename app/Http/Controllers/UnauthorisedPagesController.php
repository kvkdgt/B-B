<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnauthorisedPagesController extends Controller
{
    public function homepage(){
        return view('homepage');
    }

    public function about(){
        return view('about');
    }
}

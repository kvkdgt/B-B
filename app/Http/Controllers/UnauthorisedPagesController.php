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

    public function blogs(){
        return view('blogs');
    }

    public function blogDetails(){
        return view('blog-detail');
    }
}

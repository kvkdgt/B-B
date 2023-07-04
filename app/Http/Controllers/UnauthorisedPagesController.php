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

    public function safety(){
        return view('safety');
    }

    public function careers(){
        return view('careers');
    }

    public function terms(){
        return view('terms');
    }

    public function privacy(){
        return view('privacy');
    }

    public function map(){
        return view('map');
    }

    public function detail(){
        return view('detail');
    }

    public function chat(){
        return view('chat');
    }
}

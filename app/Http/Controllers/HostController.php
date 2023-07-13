<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostController extends Controller
{
    public function dashboard(){
        return view('host/dashboard');
    }

    public function hostProfile(){
        return view('host/host-profile');
    }

    public function createListing(){
        return view('host/create-listing');
    }

    public function editHostProfile(){
        return view('host/edit-host-profile');
    }
    public function hostNotification(){
        return view('host/host-notifications');
    }
}

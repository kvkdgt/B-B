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
    public function hostacceptedbooking(){
        return view('host/host-accepted-booking');
    }
    public function hostrejectedbooking(){
        return view('host/host-rejected-booking');
    }
    public function hostrefundedbooking(){
        return view('host/host-refunded-booking');
    }
    public function alllisting(){
        return view('host/viewall');
    } public function likedlisting(){
        return view('host/viewliked');
    } public function savedlisting(){
        return view('host/viewsaved');
    }
}
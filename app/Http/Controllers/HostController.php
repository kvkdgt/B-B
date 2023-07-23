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
    public function profilesetting(){
        return view('host/profilesetting');
    }
    public function hostNotification(){
        return view('host/host-notifications');
    }
    public function hostbooking(){
        return view('host/host-booking');
    }
    public function alllisting(){
        return view('host/viewall');
    } public function likedlisting(){
        return view('host/viewliked');
    } public function savedlisting(){
        return view('host/viewsaved');
    } public function sample(){
        return view('host-dashboard/sample');
    }
    public function revenue(){
        return view('host/revenue');
    }  public function netincome(){
        return view('host/netincom');
    }  public function paydetail(){
        return view('host/updatepaydetails');
    }
    public function changepassword(){
        return view('host/changepassword');
    }
    
}
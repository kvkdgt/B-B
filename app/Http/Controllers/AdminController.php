<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cms;


class AdminController extends Controller
{
    public function admindashboard(){
        return view('admin/dashboard2');
    }

    public function adminProfile(){
        return view('admin/host-profile');
    }
    public function adminprofilesetting(){
        return view('admin/profilesetting');
    }

    public function admincreateListing(){
        return view('admin/create-listing');
    }

    public function editadminProfile(){
        return view('admin/edit-host-profile');
    }
    public function adminNotification(){
        return view('admin/host-notifications');
    }
    public function adminbooking(){
        return view('admin/host-booking');
    }
    public function alllisting(){
        return view('admin/viewall');
    } public function likedlisting(){
        return view('admin/viewliked');
    } public function savedlisting(){
        return view('admin/viewsaved');
    } public function sample(){
        return view('admin-dashboard/sample');
    }
    public function revenue(){
        return view('admin/revenue');
    }  public function netincome(){
        return view('admin/netincom');
    }  public function paydetail(){
        return view('admin/updatepaydetails');
    }
    public function adminchangepassword(){
        return view('admin/changepassword');
    }

    public function users(){
        return view('admin/users');
    }

    public function cmsListing(){
        $data = Cms::get();
        return view('admin/cmsListing',['cms'=>$data]);
    }

    public function addNewPage(){
        return view('admin/addNewPage');
    }
}

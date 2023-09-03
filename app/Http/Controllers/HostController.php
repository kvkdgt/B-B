<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BNBListing;

class HostController extends Controller
{
    public function dashboard()
    {
        return view('host/dashboard');
    }
    public function hostProfile()
    {
        return view('host/host-profile');
    }

    public function createListing()
    {
        return view('host/create-listing');
    }

    public function editHostProfile()
    {
        return view('host/edit-host-profile');
    }
    public function profilesetting()
    {
        return view('host/profilesetting');
    }
    public function hostNotification()
    {
        return view('host/host-notifications');
    }
    public function hostbooking()
    {
        return view('host/host-booking');
    }
    public function alllisting()
    {
        return view('host/viewall');
    }
    public function likedlisting()
    {
        return view('host/viewliked');
    }
    public function savedlisting()
    {
        return view('host/viewsaved');
    }
    public function sample()
    {
        return view('host-dashboard/sample');
    }
    public function revenue()
    {
        return view('host/revenue');
    }
    public function netincome()
    {
        return view('host/netincom');
    }
    public function paydetail()
    {
        return view('host/updatepaydetails');
    }
    public function changepassword()
    {
        return view('host/changepassword');
    }

    public function editPaymentSetting()
    {
        return view('host/editPaymentSetting');
    }

    public function addListing(Request $request)
    {
        $bnbListing = new BNBListing;
        $bnbListing->title_of_listing = $request->title_of_listing;
        $bnbListing->listing_name = $request->listing_name;
          $bnbListing->language_of_instruction = $request->language_of_instruction;
          $bnbListing->what_guest_will_learn = $request->what_guest_will_learn;
          $bnbListing->learn_location = $request->learn_location;
          $bnbListing->about_BNB = $request->about_BNB;
          $bnbListing->listing_photos_videos = $request->listing_photos_videos;
          $bnbListing->country = $request->country;
          $bnbListing->state = $request->state;
          $bnbListing->city = $request->city;
          $bnbListing->property_type = $request->property_type;
          $bnbListing->max_no_of_guest = $request->max_no_of_guest;
          $bnbListing->sleep_location_img_n_title = $request->sleep_location_img_n_title;
          $bnbListing->ideal_guest = $request->ideal_guest;
          $bnbListing->included = $request->included;
          $bnbListing->previous_videos_n_title = $request->previous_videos_n_title;
          $bnbListing->check_in_check_out_dates = $request->check_in_check_out_dates;
          $bnbListing->cleaning_fee = $request->cleaning_fee;
          $bnbListing->refundable_security = $request->refundable_security;
          $bnbListing->service_fee = $request->service_fee;
          $bnbListing->rules = $request->rules;
          $bnbListing->check_in_checkout_time = $request->check_in_checkout_time;
          $bnbListing->amenities = $request->amenities;
          $bnbListing->safety = $request->safety;
        $bnbListing->save();

        return redirect()->route('/create-listing')->with('success', 'Listing Created successfully.');
    }
}

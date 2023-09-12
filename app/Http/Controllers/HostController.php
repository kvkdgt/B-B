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
        dd($request);
        $listing_photos_videos = array();
        if(isset($request->image1)){
            $request->validate([
                'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            $imageName = time().'.'.$request->image1->extension();  
            $request->image1->move(public_path('images'), $imageName);
            array_push($listing_photos_videos,$imageName);
        };
        if(isset($request->image2)){
            $request->validate([
                'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            $imageName = time().'.'.$request->image2->extension();  
            $request->image2->move(public_path('images'), $imageName);
            array_push($listing_photos_videos,$imageName);
        }
        if(isset($request->image3)){
            $request->validate([
                'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            $imageName = time().'.'.$request->image3->extension();  
            $request->image3->move(public_path('images'), $imageName);
            array_push($listing_photos_videos,$imageName);
        }
        if(isset($request->image4)){
            $request->validate([
                'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            $imageName = time().'.'.$request->image4->extension();  
            $request->image4->move(public_path('images'), $imageName);
            array_push($listing_photos_videos,$imageName);
        }
        if(isset($request->image5)){
            $request->validate([
                'image5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            $imageName = time().'.'.$request->image5->extension();  
            $request->image5->move(public_path('images'), $imageName);
            array_push($listing_photos_videos,$imageName);
        }
        
    
        $bnbListing = new BNBListing;
        $bnbListing->title_of_listing = $request->title_of_listing;
        $bnbListing->listing_name = $request->listing_name;
          $bnbListing->language_of_instruction = implode(" ",$request->language_of_instruction);
          $bnbListing->what_guest_will_learn = implode(" ",$request->what_guest_will_learn);
          $bnbListing->learn_location = $request->learn_location;
          $bnbListing->about_BNB = $request->about_BNB;
          $bnbListing->listing_photos_videos = $imageName;
          $bnbListing->country = $request->country;
          $bnbListing->state = $request->state;
          $bnbListing->city = $request->city;
          $bnbListing->property_type = $request->property_type;
          $bnbListing->max_no_of_guest = $request->max_no_of_guest;
          $bnbListing->sleep_location_img_n_title = $request->sleep_location_img_n_title;
          $bnbListing->ideal_guest = implode(" ",$request->ideal_guest);
          $bnbListing->included = implode(" ",$request->included);
          $bnbListing->previous_videos_n_title = $request->previous_videos_n_title;
          $bnbListing->check_in_check_out_dates = $request->check_in_check_out_dates;
          $bnbListing->cleaning_fee = $request->cleaning_fee;
          $bnbListing->refundable_security = $request->refundable_security;
          $bnbListing->service_fee = $request->service_fee;
          $bnbListing->rules = implode(" ",$request->rules);
          $bnbListing->check_in_checkout_time = $request->check_in_checkout_time;
          $bnbListing->amenities = implode(" ",$request->amenities);
          $bnbListing->safety =implode(" ",$request->safety);
        $bnbListing->save();

        return redirect('/create-listing')->with('success', 'Listing Created successfully.');
    }
}

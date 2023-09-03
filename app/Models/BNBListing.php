<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BNBListing extends Model
{
    use HasFactory;
    protected $table = "BNBListing";
    protected $fillable = [
        "title_of_listing",
        "listing_name",
        "language_of_instruction",
        "what_guest_will_learn",
        "learn_location",
        "about_BNB",
        "listing_photos_videos",
        "country",
        "state",
        "city",
        "property_type",
        "max_no_of_guest",
        "sleep_location_img_n_title",
        "ideal_guest",
        "included",
        "previous_videos_n_title",
        "check_in_check_out_dates",
        "cleaning_fee",
        "refundable_security",
        "service_fee",
        "rules",
        "check_in_checkout_time",
        "amenities",
        "safety",
    ];
}

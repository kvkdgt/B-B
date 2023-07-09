@extends('hometheme')
@section('content')

<main id="main">

    <!-- popular listings start -->
    <section class="create-listing">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h4>Create a New Listing</h4>
                        </div>
                        <div class="card-body">
                            <!--  Title of Listing  -->
                            <div class="item">
                                <div class="row">
                                    <label>Title of Listing</label>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input type="radio" name="listing_title" id="listing_title_stay" value="stay" checked>
                                            <label for="listing_title_stay">
                                                Stay &amp; Learn
                                            </label>
                                        </div>

                                        <p>What skills are you teaching your guests?</p>

                                        <input class="w-100" type="text" name="stay_course" placeholder="Type in Course">

                                        <input class="w-100" type="text" name="stay_sub_course" placeholder="Type in Sub-Course">

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input type="radio" name="listing_title" id="listing_title_foodie" value="foodie">
                                            <label for="listing_title_foodie">
                                                stay for event
                                            </label>
                                        </div>
                                        <p>What meal are you cooking for guests?</p>
                                        <input class="w-100" type="text" name="foodie_field" placeholder="Type in Cuisine">
                                    </div>
                                    
                                </div>
                            </div>


                            <!--  Maximum Guest Allowed  -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-4 d-grid">
                                        <label>Maximum Guest Per Room</label>
                                        <select class="w-100" name="property_type">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <!--  Listing Property Type  -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-4 d-grid">
                                        <label>Property Type</label>
                                        <select class="w-100" name="property_type">
                                            <option value="Renewable Home">Renewable Home</option>
                                            <option value="Smart City">Smart City</option>
                                            <option value="Green Home">Green Home</option>
                                            <option value="Home Office">Home Office</option>
                                            <option value="Hostel">Hostel</option>
                                            <option value="Lakefront">Lakefront</option>
                                            <option value="Vegan">Vegan</option>
                                            <option value="Sushi">Sushi</option>
                                            <option value="Home Tutor">Home Tutor</option>
                                            <option value="Farm House">Farm House</option>
                                            <option value="Hotel">Hotel</option>
                                            <option value="Country Home">Country Home</option>
                                            <option value="Cabin  House">Cabin House</option>
                                            <option value="Camper">Camper</option>
                                            <option value="Private Home">Private Home</option>
                                        </select>

                                    </div>
                                    <div class="col-md-4 d-grid">
                                        <label>Ideal Guest</label>
                                        <select class="w-100" name="ideal_guest">
                                            <option value="Student">Student</option>
                                            <option value="Team">Team</option>
                                            <option value="Cowork">Cowork</option>
                                            <option value="Private">Private</option>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <!--  Where Guest will sleep  -->
                            <div class="item">
                                <div class="row">
                                    <label>Upload detailed photos of the property</label>
                                    <div class="col-md-2 d-grid">
                                        <label class="upload_image_file" for="property_photo_1"><i class="bx bx-camera"></i></label>
                                        <input class="w-100" type="file" id="property_photo_1" name="property_photo_1" hidden>
                                    </div>
                                    <div class="col-md-2 d-grid">
                                        <label class="upload_image_file" for="property_photo_2"><i class="bx bx-camera"></i></label>
                                        <input class="w-100" type="file" name="property_photo_2" id="property_photo_2" hidden>
                                    </div>
                                    <div class="col-md-2 d-grid">
                                        <label class="upload_image_file" for="property_photo_3"><i class="bx bx-camera"></i></label>
                                        <input class="w-100" type="file" name="property_photo_3" id="property_photo_3" hidden>
                                    </div>
                                    <div class="col-md-2 d-grid">
                                        <label class="upload_image_file" for="property_photo_4"><i class="bx bx-camera"></i></label>
                                        <input class="w-100" type="file" id="property_photo_4" name="property_photo_4" hidden>
                                    </div>
                                    <div class="col-md-2 d-grid">
                                        <label class="upload_image_file" for="property_photo_5"><i class="bx bx-camera"></i></label>
                                        <input class="w-100" type="file" name="property_photo_5" id="property_photo_5" hidden>
                                    </div>
                                    <div class="col-md-2 d-grid">
                                        <label class="upload_image_file" for="property_photo_6"><i class="bx bx-camera"></i></label>
                                        <input class="w-100" type="file" name="property_photo_6" id="property_photo_6" hidden>
                                    </div>
                                </div>
                            </div>


                            <!--  What will you have as: (Select One Option)  -->
                            <div class="item">
                                <div class="row">
                                    <label>What will you have as: (Select One Option)</label>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input type="radio" name="listing_options" id="listing_options_stay" value="stay" checked>
                                            <label for="listing_options_stay">
                                                Stay &amp; Learn
                                            </label>
                                        </div>

                                        <input class="w-100" type="text" name="stay_course" placeholder="Type Here" value="Graphics">

                                        <input class="w-100" type="text" name="stay_course" placeholder="Type Here" value="Yoga Stance">

                                        <input class="w-100" type="text" name="stay_course" placeholder="Type Here" value="Types of Kung Fu">

                                        <input class="w-100" type="text" name="stay_course" placeholder="Type Here" value="Aerobatics">

                                        <input class="w-100" type="text" name="stay_course" placeholder="Type Here" value="Java">


                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input type="radio" name="listing_options" id="listing_options_foodie" value="foodie">
                                            <label for="listing_options_foodie">
                                                Stay for event
                                            </label>
                                        </div>

                                        <input class="w-100" type="text" name="stay_course" placeholder="Type Here" value="Breakfast [xxx]">

                                        <input class="w-100" type="text" name="stay_course" placeholder="Type Here" value="Lunch [xxx]">

                                        <input class="w-100" type="text" name="stay_course" placeholder="Type Here" value="Dinner [xxx]">

                                        <input class="w-100" type="text" name="stay_course" placeholder="Type Here" value="Snacks [xxx]">

                                        <input class="w-100" type="text" name="stay_course" placeholder="Type Here" value="Drinks [xxx]">

                                    </div>
                                    
                                </div>
                            </div>
                            <!--  About Listing  -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-8 d-grid">
                                        <label>About Listing</label>
                                        <textarea name="about_listing" placeholder="Please type message here" rows="5"></textarea>

                                    </div>
                                    <div class="col-md-4">
                                        <label>Upload Video</label>
                                        <label class="upload_image_file" for="listing_video"><i class="bx bx-video"></i></label>
                                        <input class="w-100" type="file" name="listing_video" id="listing_video" hidden>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gray" style="padding: 0 25px;margin: 0 -25px;">
                                <hr>
                                <!--  Listing Location  -->
                                <!-- <div class="item">
                                    <div class="row">
                                        <div class="col-md-4 d-grid">
                                            <label>Country</label>
                                            <select name="country">
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                            </select>

                                        </div>
                                        <div class="col-md-4 d-grid">
                                            <label>State</label>
                                            <select name="country">
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                            </select>

                                        </div>
                                        <div class="col-md-4 d-grid">
                                            <label>City</label>
                                            <select name="country">
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                            </select>

                                        </div>
                                    </div>
                                </div> -->


                                <!--  Where Guest will sleep  -->
                                <div class="item">
                                    <div class="row">
                                        <label>Where Guest will sleep</label>
                                        <div class="col-md-4 d-grid">
                                            <label class="upload_image_file" for="listing_photo_1"><i class="bx bx-camera"></i></label>
                                            <input class="w-100" type="file" id="listing_photo_1" name="listing_photo_1" hidden>
                                            <input class="w-100" type="text" name="listing_photo_text_1" placeholder="Enter Title">
                                        </div>
                                        <div class="col-md-4 d-grid">
                                            <label class="upload_image_file" for="listing_photo_2"><i class="bx bx-camera"></i></label>
                                            <input class="w-100" type="file" name="listing_photo_2" id="listing_photo_2" hidden>
                                            <input class="w-100" type="text" name="listing_photo_text_2" placeholder="Enter Title">
                                        </div>
                                        <div class="col-md-4 d-grid">
                                            <label class="upload_image_file" for="listing_photo_3"><i class="bx bx-camera"></i></label>
                                            <input class="w-100" type="file" name="listing_photo_3" id="listing_photo_3" hidden>
                                            <input class="w-100" type="text" name="listing_photo_text_3" placeholder="Enter Title">
                                        </div>
                                    </div>
                                </div>

                                <!--  Amenties (Type in available fields)  -->
                                <div class="item">
                                    <div class="row">
                                        <label>Amenties (Type in available fields)</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input class="w-100" type="text" name="stay_course" placeholder="Type Here" value="Free Wifi">
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <input class="w-100" type="text" name="stay_course" placeholder="Type Here" value="EV Charger">
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <input class="w-100" type="text" name="stay_course" placeholder="Type Here" value="Heater">
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <input class="w-100" type="text" name="stay_course" placeholder="Type Here" value="Fire Extinguisher">
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <input class="w-100" type="text" name="stay_course" placeholder="Type Here">
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <input class="w-100" type="text" name="stay_course" placeholder="Type Here">
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <input class="w-100" type="text" name="stay_course" placeholder="Type Here">
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <input class="w-100" type="text" name="stay_course" placeholder="Type Here">
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <input class="w-100" type="text" name="stay_course" placeholder="Type Here">
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <input class="w-100" type="text" name="stay_course" placeholder="Type Here">
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <input class="w-100" type="text" name="stay_course" placeholder="Type Here">
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <input class="w-100" type="text" name="stay_course" placeholder="Type Here">
                                        </div>
                                    </div>
                                </div>

                                <hr>
                            </div>

                            <!--  Type of Booking Available  -->
                            <div class="item">
                                <div class="row">
                                    <label>Type of Booking Available</label>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-check">
                                            <input type="radio" name="booking_type" id="booking_type_dates" value="stay" checked>
                                            <label for="booking_type_dates">
                                                Choose Dates
                                            </label>
                                        </div>

                                        <p>Select Dates from calendar</p>

                                        <div id="booking_type_calendar" class="card">

                                        </div>

                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-check">
                                            <input type="radio" name="booking_type" id="booking_type_day" value="foodie">
                                            <label for="booking_type_day">
                                                Day Pass
                                            </label>
                                        </div>

                                        <p>Day Pass does not include overnight stay</p>
                                        <p>Day pass is between 10AM &amp; 4PM</p>
                                    </div>
                                    <div class="col-md-4 col-sm-12">

                                    </div>
                                </div>
                            </div>

                            <hr>

                            <!--  Availability  -->
                            <div class="item">
                                <div class="row">
                                    <label>Availability</label>
                                    <div class="col-md-6 col-sm-12">
                                        <p>Disable the dates youe property will not be available for booking</p>
                                        <p><b>NOTE</b>No one will be available to book your propert on selected dates</p>

                                        <div id="availability_calendar" class="calendar card">

                                        </div>


                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <p>Your property cannot be booked on</p>
                                        <ol>
                                            <li>25 March 2023</li>
                                            <li>27 March 2023</li>
                                            <li>29 March 2023</li>
                                            <li>02 April 2023</li>
                                            <li>21 April 2023</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>


                            <!--  Timing  -->
                            <div class="item">
                                <div class="row">

                                    <div class="col-md-6 col-sm-12 d-grid">
                                        <label>Time In</label>
                                        <input type="time" name="time_in" placeholder="00:00" value="07:00 AM">
                                    </div>
                                    <div class="col-md-6 col-sm-12 d-grid">
                                        <label>Time Out</label>
                                        <input type="time" name="time_out" placeholder="00:00" value="07:00 PM">
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <!--  Set Your Price  -->

                            <div class="item">
                                <div class="row">
                                    <h3>Set your Price</h3>
                                    <div class="col-md-4 col-sm-12 d-grid">
                                        <label>Price per Night</label>
                                        <select name="pernight">
                                            <option value="€5">€5</option>
                                            <option value="€15">€15</option>
                                            <option value="€25">€25</option>
                                            <option value="€35">€35</option>
                                            <option value="€45">€45</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-sm-12 d-grid">
                                        <label>Cleaning Fee</label>
                                        <select name="cleaning">
                                            <option value="€5">€5</option>
                                            <option value="€15">€15</option>
                                            <option value="€25">€25</option>
                                            <option value="€35">€35</option>
                                            <option value="€45">€45</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-sm-12 d-grid">
                                        <label>Security Deposit</label>
                                        <select name="security">
                                            <option value="€5">€5</option>
                                            <option value="€15">€15</option>
                                            <option value="€25">€25</option>
                                            <option value="€35">€35</option>
                                            <option value="€45">€45</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="bg-gray" style="padding: 0 25px;margin: 0 -25px;">
                                <hr>
                                <!--  Any Other Fees -->
                                <div class="item">
                                    <div class="row">
                                        <h5>Do you charge any other Fee?</h5>

                                        <div class="col-md-4 form-check">
                                            <input class="form-check-input" type="radio" name="otherfees" value="yes" id="otherfeesyes" checked>
                                            <label for="otherfeesyes">Yes</label>
                                        </div>
                                        <div class="col-md-4 form-check">
                                            <input class="form-check-input" type="radio" name="otherfees" value="no" id="otherfeesno">
                                            <label for="otherfeesno">No</label>
                                        </div>
                                        <div id="otherfees_div" style="display: contents;">
                                            <div class="col-md-6 col-sm-12 d-grid">
                                                <label>Title of Fee</label>
                                                <input type="text" name="title" placeholder="Type Here" value="Service Fee">
                                            </div>
                                            <div class="col-md-6 col-sm-12 d-grid">
                                                <label>Amount</label>
                                                <select name="security">
                                                    <option value="€5">€5</option>
                                                    <option value="€15">€15</option>
                                                    <option value="€25">€25</option>
                                                    <option value="€35">€35</option>
                                                    <option value="€45">€45</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 col-sm-12 d-grid">
                                                <label>Title of Fee</label>
                                                <input type="text" name="title" placeholder="Type Here" value="Lorem Fee">
                                            </div>
                                            <div class="col-md-6 col-sm-12 d-grid">
                                                <label>Amount</label>
                                                <select name="security">
                                                    <option value="€5">€5</option>
                                                    <option value="€15">€15</option>
                                                    <option value="€25">€25</option>
                                                    <option value="€35">€35</option>
                                                    <option value="€45">€45</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                            </div>

                            <!--  Discount  -->
                            <div class="item">
                                <div class="row">
                                    <label>Discount</label>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input type="radio" name="discount" id="discount_5" value="5" checked>
                                            <label for="discount_5">
                                                5%
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input type="radio" name="discount" id="discount_10" value="10">
                                            <label for="discount_10">
                                                10%
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input type="radio" name="discount" id="no_discount" value="no_discount">
                                            <label for="no_discount">
                                                No Discount
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--  Calculations  -->

                            <div class="calculations">
                                <div class="calculate">
                                    <h5>Total Charges (Basic)</h5>
                                    <h6>€1250</h6>
                                </div>
                                <div class="calculate">
                                    <h5>Service Fees</h5>
                                    <h6>€150</h6>
                                </div>
                                <div class="calculate">
                                    <h5>Discount</h5>
                                    <h6>€50</h6>
                                </div>
                                <div class="calculate">
                                    <h5>Grand Total</h5>
                                    <h6>€1350</h6>
                                </div>
                            </div>

                            <div class="mt-5 d-flex align-items-center justify-content-between">
                                <button class="btn btn-primary-outline">Preview</button>
                                <button class="btn btn-primary">Publish</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main><!-- End #main -->
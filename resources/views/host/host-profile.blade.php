@extends('hometheme')
@section('content')

<main id="main">

    <!-- popular listings start -->
    <section class="host-profile">
        <div class="container" data-aos="fade-up">
            <div class="row mt-5">
                <div class="col-md-12 col-sm-12">
                    <div class="card card-gray">
                        <div class="card-header">
                            <div class="profile d-flex align-items-center" style="justify-content: space-around; flex-wrap: wrap;">
                            <div>
                                <img src="assets/img/avatar.png" style="width:105px">
                            </div>
                            <div class="d-flex" style="gap:20px">
                                <div>
                                    <h3 class="m-0">Kartik Trivedi Kartik Trivedi</h3>
                                    <h4 style="margin-bottom: 10px;">Yoga Trainer</h4>
                                    <button>Edit Profile</button>
                                    <p style="margin:10px 0">Joined December 2020</p>
                                </div>
                            </div>
                                <div>
                                    <div>
                                        <h3 class="m-0">Profile ID</h3>
                                        <p style="margin: 7px 0">8875AF</p>
                                    </div>
                                    <div>
                                        <button>Verify Now</button>
                                        <p style="margin: 7px 0 0">20 Days Left</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!--  Right Side Cart  -->
                            <div class="col-md-3 col-sm-12">
                                <div class="card card-gray">
                                    <div class="card-body">
                                        <div class="item">
                                            <p><b>Verified User</b></p>
                                        </div>
                                        <div class="item">
                                            <p><b>1403 Reviews</b></p>
                                        </div>
                                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>

                                        <div class="sidebar">
                                            <h4>Details Provided</h4>
                                            <div class="side-cart-item" style="display:flex;">
                                                <p>Email Address</p>
                                                <i class='bx bx-check'></i>
                                            </div>
                                            <div class="side-cart-item" style="display:flex;">
                                                <p>Phone Number</p>
                                                <i class='bx bx-check'></i>
                                            </div>
                                            <div class="side-cart-item" style="display:flex;">
                                                <p>Government ID Card</p>
                                                <i class='bx bx-check'></i>
                                            </div>
                                        </div>


                                        <!-- Other Info -->
                                        <div class="sidebar">
                                            <a href="chat.html" class="btn btn-primary w-100">Chat with
                                                Me</a>
                                        </div>


                                        <!-- Timing -->
                                        <div class="sidebar">
                                            <h4>Payment Type</h4>
                                            <div class="side-cart-item">
                                                <p>Stripe</p>
                                            </div>
                                            <div class="side-cart-item">
                                                <p>PayPal</p>
                                            </div>
                                        </div>

                                        <!-- Cancellation Policy -->
                                        <div class="sidebar" style="margin-bottom: 0;">
                                            <h4 style="margin-bottom: 15px;">House Rules</h4>
                                            <div class="side-cart-item">
                                                <ul style="list-style-type: disc; margin: 0;">
                                                    <li>No pets</li>
                                                    <li>No shoes</li>
                                                    <li>No smoking</li>
                                                    <li>No outside food</li>
                                                    <li>No loud music</li>
                                                    <li>No parties</li>
                                                    <li style="padding: 0;">No unauthorized guests</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-5 col-sm-12">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h3 style="margin: 0 0 10px;">About Me</h3>
                                </div>
                                <h6>Joined in 2018</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum tortor
                                    eget nisi
                                    bibendum morbi at pulvinar consectetur. Ac id nec sed sed nulla faucibus.
                                    Massa eu
                                    sit
                                    laoreet nunc mauris pellentesque. Tincidunt semper facilisi tortor netus a
                                    pellentesque
                                    auctor maecenas id. Ac, egestas magna a consectetur fermentum. Urna, nec
                                    quam sed
                                    massa,
                                    pellentesque. Diam enim vel porta diam iaculis tellus cursus mauris. </p>
                                <!-- </div> -->

                                <div class="divider" style=" border-top: 1px solid gray;margin: 16px 0;"></div>
                                <div class="m-4" style="display: flex; align-items: center; justify-content: space-between; margin: 1.5em 0 !important;">
                                    <h3 class="m-0">Location</h3>
                                    <p class="m-0">Paris , Frence</p>
                                </div>
                                <div class="divider" style=" border-top: 1px solid gray;margin: 16px 0;"></div>
                                <div class="m-4" style="display: flex; align-items: center; justify-content: space-between; margin: 1.5em 0 !important;">
                                    <h3 class="m-0">Languages</h3>
                                    <p class="m-0">English , French</p>
                                </div>
                                <div class="divider" style=" border-top: 1px solid gray;margin: 16px 0;"></div>
                                <!-- <div class="card"> -->
                                <div class="d-flex align-items-center justify-content-between">
                                    <h3>Academic Qualification</h3>
                                </div>
                                <ul style="list-style: disc">
                                    <li><b>B.SC Fitness: </b>University of Poland, Poland </li>
                                    <li style="padding: 0"><b>Diploma Graphics: </b>University of Poland, Poland </li>
                                </ul>
                                <div class="divider" style=" border-top: 1px solid gray;margin: 16px 0;"></div>
                                <!-- </div> -->
                                <div class="d-flex align-items-center justify-content-between">
                                    <h3>About My Listing</h3>
                                </div>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum tortor
                                    eget nisi
                                    bibendum morbi at pulvinar consectetur. Ac id nec sed sed nulla faucibus.
                                    Massa eu
                                    sit
                                    laoreet nunc mauris pellentesque. Tincidunt semper facilisi tortor netus a
                                    pellentesque
                                    auctor maecenas id. Ac, egestas magna a consectetur fermentum. Urna, nec
                                    quam sed
                                    massa,
                                    pellentesque. Diam enim vel porta diam iaculis tellus cursus mauris. </p>

                                <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
                                <h3>What's Included</h3>
                                <div class="item" style="display: flex;">
                                    <ul style="list-style-type: disc; flex: 1;">
                                        <li>Wi-Fi</li>
                                        <li>Breakfast</li>
                                        <li>Room cleaning</li>
                                    </ul>
                                    <ul style="list-style-type: disc; flex: 1;">
                                        <li>Hot shower</li>
                                        <li>Air conditioning</li>
                                        <li>Gym access</li>
                                    </ul>
                                </div>

                            </div>

                            <!--  My Listing  -->
                            <div class="col-md-4 col-sm-12">
                                <div class="card card-gray">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h4>My Listings </h4>
                                    </div>
                                    <div class="card-body listings">
                                        <div class="listing-item sm" style="margin-bottom: 20px;">
                                            <div class="sub-main">
                                                <div class="img-sec p-rel">
                                                    <img src="assets/img/hotels/hotel-1.png" alt="">
                                                    <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                                </div>
                                                <div class="slider-content">
                                                    <a href="detail.html">Stay and Learn Yoga </a>
                                                    <div class="d-flex justify-content-between">
                                                        <p>Ashtanga Yoga</p>
                                                        <p>
                                                            <span>4.3</span> 7 Ratings
                                                        </p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p>$200 Per Night</p>
                                                        <p> <i class="fa fa-map-marker"></i> Paris , France</p>
                                                    </div>
                                                </div>
                                                <div class="footer">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex">
                                                            <img src="assets/img/avatar.png">

                                                            <div class="m-2">
                                                                <h6 class="m-0">Kartik Trivedi</h6>
                                                                <p class="m-0">Yoga Trainer</p>
                                                            </div>
                                                        </div>
                                                        <a href="chat.html">Chat Now</a>
                                                    </div>
                                                </div>
                                                <div class="share">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="m-2">
                                                            <a class="m-0" href="#"><i class="bx bxl-twitter"></i>Share
                                                                on
                                                                Twitter</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="listing-item sm">
                                            <div class="sub-main">
                                                <div class="img-sec p-rel">
                                                    <img src="assets/img/hotels/hotel-1.png" alt="">
                                                    <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                                </div>
                                                <div class="slider-content">
                                                    <a href="detail.html">Stay and Learn Yoga </a>
                                                    <div class="d-flex justify-content-between">
                                                        <p>Ashtanga Yoga</p>
                                                        <p>
                                                            <span>4.3</span> 7 Ratings
                                                        </p>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <p>$200 Per Night</p>
                                                        <p> <i class="fa fa-map-marker"></i> Paris , France</p>
                                                    </div>
                                                </div>
                                                <div class="footer">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex">
                                                            <img src="assets/img/avatar.png">
                                                            <div class="m-2">
                                                                <h6 class="m-0">Kartik Trivedi</h6>
                                                                <p class="m-0">Yoga Trainer</p>
                                                            </div>
                                                        </div>

                                                        <a href="chat.html">Chat Now</a>
                                                    </div>
                                                </div>
                                                <div class="share">
                                                    <div class="d-flex justify-content-center">
                                                        <div class="m-2">
                                                            <a class="m-0" href="#"><i class="bx bxl-twitter"></i>Share
                                                                on
                                                                Twitter</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!-- My co-host-->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-center">
                        <h4>My Co-host</h4>
                    </div>
                    <div class="card-body">
                        <div class="album">
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-12">
                                        <div style="border: 1px solid; border-radius: 10px; width: 70%;
                                            margin: auto; padding: 20px; background: #ededed;">
                                            <img src="assets/img/avatar.png" style="margin-right: 10px;">
                                            <h4 class="m-0">Kartik Trivedi</h4>
                                        </div>
                                        <div>
                                            <h5>Yoga Trainer</h5>
                                            <p>5 years of experience</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-12">
                                        <div style="border: 1px solid; border-radius: 10px; width: 70%;
                                            margin: auto; padding: 20px; background: #ededed;">
                                            <img src="assets/img/avatar.png" style="margin-right: 10px;">
                                            <h4 class="m-0">John Doe</h4>
                                        </div>
                                        <div>
                                            <h5>Pilates Instructor</h5>
                                            <p>8 years of experience</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-12">
                                    <div style="border: 1px solid; border-radius: 10px; width: 70%;
                                            margin: auto; padding: 20px; background: #ededed;">
                                            <img src="assets/img/avatar.png" style="margin-right: 10px;">
                                            <h4 class="m-0">Jane Smith</h4>
                                        </div>
                                        <div>
                                            <h5>Zumba Instructor</h5>
                                            <p>3 years of experience</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-12">
                                       <div style="border: 1px solid; border-radius: 10px; width: 70%;
                                            margin: auto; padding: 20px; background: #ededed;">
                                            <img src="assets/img/avatar.png" style="margin-right: 10px;">
                                            <h4 class="m-0">Alex Johnson</h4>
                                        </div>
                                        <div>
                                            <h5>Meditation Teacher</h5>
                                            <p>10 years of experience</p>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--  My Album  -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-center">
                        <h4>Media</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <img src="assets/img/hotels/hotel-3.png" width="100%">
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <img src="assets/img/hotels/hotel-2.png" width="100%">
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <img src="assets/img/hotels/hotel-3.png" width="100%">
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <img src="assets/img/hotels/hotel-4.png" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->
@extends('hometheme')
@section('content')

<style>
.profile {
    padding: 25px 0 10px;
}

.listings h4 {
    margin: 0 0 10px;
}

.host-block {
    /* border: 1px solid rgba(0, 0, 0, 0.5);
        box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.07); */
    border-radius: 25px;
}

.host-gray {
    background: #EEEEEE;
}

.host-body {
    padding: 25px;
}

.album {
    margin: 40px 0 0;
}

.co-host-block {
}

/* ========= */
.side-edit-bar {
    background: #070760;
    border-radius: 20px;
    padding: 20px 10px;
}

button.edit-btn {
    border-radius: 20px;
    border: none;
    padding: 4px 10px;
    font-size: 14px;
    margin: 0px 10px 10px;
}

.user-block {
    color: #fff;
    text-align: center;
    padding: 10px 0;
    margin-top: 20px;
}

.user-block h4 {
    margin: 5px 0 0;
}

.user-block a,
.user-block a:hover {
    color: #fff;
}

ul.menu {
    list-style: none;
    margin: 20px 0 0;
    padding: 0;
}

ul.menu li {
    padding: 0 0 10px;
}

ul.menu li a {
    color: #fff;
    display: block;
    padding: 5px 20px;
    transition: all 0.5s ease;
    border-radius: 20px;
}

ul.menu li a:hover {
    background: #fff;
    color: green;
    transition: all 0.5s ease;
}

ul.menu li.dropdown {
    position: relative;
}

ul.menu li.dropdown i {
    position: absolute;
    right: 20px;
    top: 7px;
}

ul.sub-menu {
    list-style: none;
    margin: 0;
    padding: 0;
    display: none;
}

ul.menu li.dropdown.active i {
    transform: rotate(180deg);
}

.active ul.sub-menu {
    display: block;
    position: absolute;
    right: -210px;
    top: 0;
    z-index: 1;
    background: #070760;
    width: 100%;
    padding: 20px 10px;
}

.edit-profile {
    margin: 0 0 30px;
}

.edit-profile label {
    display: block;
}

.edit-profile select {
    line-height: 35px;
    width: 100%;
    height: 39px;
    display: block;
}

.edit-profile input {
    border-radius: 25px;
    height: 39px;
}

.edit-profile .form-control:focus,
.edit-profile select:focus {
    box-shadow: none;
    border: 1px solid #000;
}

.edit-profile select:focus-visible {
    outline: none;
}

.edit-profile .radio-group input {
    margin: 0 10px 0 0;
}

.edit-profile .update-btn {
    line-height: 10px;
}

.edit-profile input#profile,
.edit-profile input#id {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    height: 100px;
}

.file-wrapper button {
    border: 1px solid #D9D9D9;
    border-radius: 25px;
    box-shadow: none;
    line-height: 35px;
    width: 100%;
    height: 100px;
    display: block;
    background: transparent;
    font-size: 24px;
}

.file-wrapper {
    overflow: hidden;
    position: relative;
}

.error-block {
    background: rgb(255, 0, 0, 10%);
    color: red;
    padding: 12px;
    border-radius: 5px;
    margin: 0 0 30px;
}

.user-img-top {
    position: absolute;
    top: 10px;
    left: 10px;
}

.user-img-top img {
    width: 50px;
    height: 50px;
    border: 2px solid #bee500;
    border-radius: 50%;
}

.listings .listing-item  {
    position: relative;
}

.listings .listing-item .sub-main .footer a {
    color: #1DA1F2;
    font-weight: 500;
    font-size: 18px;
    margin: auto 0;
    padding: 5px;
    border-radius: 25px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
}

.listings .listing-item .sub-main .footer a:hover {
    background: #fff !important;
    color: #73cf42 !important;
}

.listings .listing-item .sub-main .footer {
    padding: 5px !important;
}

/* .container {
        width: 1320px !important;
        max-width: 1320px !important;
    } */

/* @media screen and (min-width: 1400px) {
        .container {
            max-width: 1320px !important;
            width: 1320px !important;
        } 
    }

    @media screen and (min-width: 1200px) {
        .container {
            max-width: 1140px !important;
            width: 1140px !important;
        } 
    }

    @media screen and (min-width: 992px) {
        .container {
            max-width: 970px !important;
            width: 970px !important;
        } 
    }
    @media screen and (min-width: 768px) {
        .container {
            max-width: 750px !important;
            width: 750px !important;
        } 
    }

    @media screen and (min-width: 576px) {
        .container {
            max-width: 100% !important;
            width: 100% !important;
        } 
    } */
</style>

<main id="main">

    <!-- popular listings start -->
    <section class="host-profile">
        <div class="container" data-aos="fade-up">
            <div class="row mt-5">
                <div class="col-md-12 col-sm-12">

                    <div class="host-header">
                        <div class="profile d-flex align-items-center"
                            style="justify-content: space-around; flex-wrap: wrap;">
                            <div>
                                <img src="assets/img/avatar.png" style="width:105px">
                            </div>
                            <div class="d-flex" style="gap:20px">
                                <div>
                                    <h3 class="m-0">Kartik Trivedi</h3>
                                    <h4 style="margin-bottom: 10px;">Yoga Trainer</h4>
                                    <a class="btn btn-primary" href="{{ route('editHostProfile') }}">Edit Profile</a>
                                    <p style="margin:10px 0">Joined December 2020</p>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <h3 class="m-0">Profile ID</h3>
                                    <p style="margin: 7px 0">8875AF</p>
                                </div>
                                <div>
                                    <a class="btn btn-primary">Verify Now</a>
                                    <p style="margin: 7px 0 0">20 Days Left</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>

                    <div class="host-body">
                        <div class="row">
                            <!--  Right Side Cart  -->
                            <div class="col-lg-3">
                                <div class="host-block">
                                    <div class="">
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

                                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
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
                                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
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
                            <div class="col-lg-5">
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
                                <div
                                    style="display: flex; align-items: center; justify-content: space-between; margin: 1.5em 0;">
                                    <h3 class="m-0">Location</h3>
                                    <p class="m-0">Paris , Frence</p>
                                </div>
                                <div class="divider" style=" border-top: 1px solid gray;margin: 16px 0;"></div>
                                <div
                                    style="display: flex; align-items: center; justify-content: space-between; margin: 1.5em 0;">
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
                            <div class="col-lg-4">
                                <div class="host-block">
                                    <div class="listings">
                                        <h4>My Listings </h4>
                                        <div class="listing-item">
                                            <div class="sub-main">
                                                <div class="img-sec p-rel">
                                                    <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                                    <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                                    <span class="icon-sec-right"><i class="fas fa-heart"></i></span>

                                                </div>
                                                <div class="slider-content">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a href="{{env('BASE_URL')}}detail" class="text-green">Stay and Learn </a>
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M23 12l-2.44-2.79.34-3.69-3.61-.82-1.89-3.2L12 2.96 8.6 1.5 6.71 4.69 3.1 5.5l.34 3.7L1 12l2.44 2.79-.34 3.7 3.61.82L8.6 22.5l3.4-1.47 3.4 1.46 1.89-3.19 3.61-.82-.34-3.69L23 12zm-12.91 4.72l-3.8-3.81 1.48-1.48 2.32 2.33 5.85-5.87 1.48 1.48-7.33 7.35z"></path></svg>
                                                    </div>
                                                    <div class="inner-content">
                                                        <p>Python (Intro)</p>
                                                        <p>Paris, France | 10km away</p>
                                                        <p> Dec 20 - Dec 28, 2023</p>
                                                        <p>150 | 2 Adult Guests</p>
                                                        <p><b>428 Reviews</b></p>
                                                    </div>
                                                </div>
                                                <div class="footer chat-button">
                                                    <a href="{{env('BASE_URL')}}chat">Chat Now</a>
                                                </div>
                                                <div class="user-img-top">
                                                    <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
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
                                        <div class="listing-item">
                                            <div class="sub-main">
                                                <div class="img-sec p-rel">
                                                    <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                                    <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                                    <span class="icon-sec-right"><i class="fas fa-heart"></i></span>

                                                </div>
                                                <div class="slider-content">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <a href="{{env('BASE_URL')}}detail" class="text-green">Stay and Learn </a>
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M23 12l-2.44-2.79.34-3.69-3.61-.82-1.89-3.2L12 2.96 8.6 1.5 6.71 4.69 3.1 5.5l.34 3.7L1 12l2.44 2.79-.34 3.7 3.61.82L8.6 22.5l3.4-1.47 3.4 1.46 1.89-3.19 3.61-.82-.34-3.69L23 12zm-12.91 4.72l-3.8-3.81 1.48-1.48 2.32 2.33 5.85-5.87 1.48 1.48-7.33 7.35z"></path></svg>
                                                    </div>
                                                    <div class="inner-content">
                                                        <p>Python (Intro)</p>
                                                        <p>Paris, France | 10km away</p>
                                                        <p> Dec 20 - Dec 28, 2023</p>
                                                        <p>150 | 2 Adult Guests</p>
                                                        <p><b>428 Reviews</b></p>
                                                    </div>
                                                </div>
                                                <div class="footer chat-button">
                                                    <a href="{{env('BASE_URL')}}chat">Chat Now</a>
                                                </div>
                                                <div class="user-img-top">
                                                    <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
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

            <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>

            <!-- My co-host-->
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="co-host-block">
                        <div class="co-host-header d-flex align-items-center justify-content-center">
                            <h2>My Co-host</h2>
                        </div>
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
            <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>

            <!--  My Album  -->
            <div class="col-md-12">
                <div class="host-block">
                    <div class="host-header d-flex align-items-center justify-content-center">
                        <h2>Media</h2>
                    </div>
                    <div class="host-body">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <img src="assets/img/hotels/hotel-3.png" width="100%">
                                <div style="text-align:center">
                                    <h5>How we Work</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <img src="assets/img/hotels/hotel-3.png" width="100%">
                                <div style="text-align:center">
                                    <h5>About Facility</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <img src="assets/img/hotels/hotel-3.png" width="100%">
                                <div style="text-align:center">
                                    <h5>Rooms</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <img src="assets/img/hotels/hotel-3.png" width="100%">
                                <div style="text-align:center">
                                    <h5>Water Park</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



</main><!-- End #main -->
@extends('hometheme')
@section('content')

<style>

    .profile {
        padding: 25px 0 10px;
    }

    .listings h4 {
        margin: 0 0 10px;
    }

    .host-block{
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
        padding: 50px 0;
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
    }

    .user-block h4 {
        margin: 5px 0 0;
    }

    .user-block a, .user-block a:hover {
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

    .edit-profile .form-control:focus, .edit-profile select:focus {
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

    .edit-profile input#profile, .edit-profile input#id {
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
                    <div class="host-block host-gray">

                        <div class="host-header">
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
                                    <div style="display: flex; align-items: center; justify-content: space-between; margin: 1.5em 0;">
                                        <h3 class="m-0">Location</h3>
                                        <p class="m-0">Paris , Frence</p>
                                    </div>
                                    <div class="divider" style=" border-top: 1px solid gray;margin: 16px 0;"></div>
                                    <div style="display: flex; align-items: center; justify-content: space-between; margin: 1.5em 0;">
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
            </div>
            <!-- My co-host-->
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="co-host-block">
                        <div class="co-host-header d-flex align-items-center justify-content-center">
                            <h3>My Co-host</h3>
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

            <!--  My Album  -->
            <div class="col-md-12">
                <div class="host-block">
                    <div class="host-header d-flex align-items-center justify-content-center">
                        <h3>Media</h3>
                    </div>
                    <div class="host-body">
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


    <section class="edit-profile">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-12">
                    <div class="side-edit-bar">
                        <button class="edit-btn">Edit Profile</button>
                        <div class="user-block">
                            <img src="" alt="" width="50" height="50">
                            <h4>nehu nee</h4>
                            <a href="#">nehu09@mailinator.com</a>
                        </div>
                        <ul class="menu">
                            <li class="dropdown"><a href="#"><span>Dashboard</span> <i class="fa-solid fa-caret-right"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">French</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>Bookings</span> <i class="fa-solid fa-caret-right"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">French</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><span>My Listings</span> <i class="fa-solid fa-caret-right"></i></a></li>
                            <li class="dropdown"><a href="#"><span>Wish List</span> <i class="fa-solid fa-caret-right"></i></a></li>
                            <li class="dropdown"><a href="#"><span>Payments & Payouts</span> <i class="fa-solid fa-caret-right"></i></a></li>
                            <li class="dropdown"><a href="#"><span>Expenses as Guest</span> <i class="fa-solid fa-caret-right"></i></a></li>
                            <li class="dropdown"><a href="#"><span>Settings</span> <i class="fa-solid fa-caret-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-12">
                    <div class="error-block d-flex align-items-center justify-content-between"> 
                        <p class="m-0">Please verify your identity.</p>
                        <button class="btn btn-primary">Verify</button>
                    </div>
                    <div class="d-flex align-items-center justify-content-between m-4">
                        <h3 class="m-0">Edit Profile</h3>
                        <a href="#" class="btn btn-primary">ID # VTRULYR9</a>
                    </div>
                    <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
                    <form action="">
                        <div class="row m-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <h4>Personal Details</h4>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="profile">Profile Image</label>
                                    <div class="file-wrapper">
                                        <button type="button"><i class="fa-solid fa-camera"></i></button>
                                        <input type="file" id="profile" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" id="fname" class="form-control" placeholder="nehu" required />
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" id="lname" class="form-control" placeholder="nee" required />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="title">Host Title</label>
                                    <input type="text" id="title" class="form-control" placeholder="eg.Pythonn Tutor" required />
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select id="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="date">Date of Birth</label>
                                    <input type="date" id="date" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="address">Address</label>
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <select id="country">
                                            <option disabled selected hidden>Please Selecte a Country</option>
                                            <option value="country">Afghanistan</option>
                                            <option value="country">Australia</option>
                                            <option value="country">India</option>
                                        </select>   
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <select id="state">
                                            <option disabled selected hidden>Please Selecte a State</option>
                                            <option value="state">Abaco</option>
                                            <option value="state">Cat Island</option>
                                            <option value="state">Long Island</option>
                                        </select>   
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <select id="city">
                                            <option disabled selected hidden>Please Selecte a City</option>
                                            <option value="city">Ahmedabad</option>
                                            <option value="city">Rajkot</option>
                                            <option value="city">Junagadh</option>
                                        </select>   
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="language">Languages</label>
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <select id="lan">
                                            <option disabled selected hidden>Enter languages</option>
                                            <option value="lan">English</option>
                                            <option value="lan">Gujrati</option>
                                            <option value="lan">Marathi</option>
                                        </select>   
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <select id="lan">
                                            <option disabled selected hidden>Enter languages</option>
                                            <option value="state">Bengali</option>
                                            <option value="state">Hindi</option>
                                            <option value="state">French</option>
                                        </select>   
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <select id="lan">
                                            <option disabled selected hidden>Enter languages</option>
                                            <option value="city">Spanish</option>
                                            <option value="city">Arabic</option>
                                            <option value="city">Japanese</option>
                                        </select>   
                                    </div>
                                </div>
                            </div>
                            <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <h4>Links</h4>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="id">Government ID</label>
                                    <div class="file-wrapper">
                                        <button type="button"><i class="fa-solid fa-camera"></i></button>
                                        <input type="file" id="id" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control" placeholder="example@gmail.com" required />
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="no">Phone</label>
                                    <input type="text" id="no" class="form-control" placeholder="0912345678" required />
                                </div>
                            </div>
                            <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <h4>Timing for Property</h4>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="timein">Time In</label>
                                    <input type="time" id="timein" class="form-control" placeholder="example@gmail.com" required />
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="timeout">Time Out</label>
                                    <input type="time" id="timeout" class="form-control" placeholder="0912345678" required />
                                </div>
                            </div>
                            <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="property">Property Type</label>
                                    <div class="row radio-group">
                                        <div class="col-sm-3 col-12 d-flex align-items-center">
                                            <input type="radio" id="appartments" name="property" value="appartments">
                                            <label for="appartments" class="m-0">Appartments</label>
                                        </div>
                                        <div class="col-sm-3 col-12 d-flex align-items-center">
                                            <input type="radio" id="private" name="property" value="private">
                                            <label for="private" class="m-0">Private</label>
                                        </div>
                                        <div class="col-sm-3 col-12 d-flex align-items-center">
                                            <input type="radio" id="homr" name="property" value="homr">
                                            <label for="homr" class="m-0">Home Tutor</label>
                                        </div>
                                        <div class="col-sm-3 col-12 d-flex align-items-center">
                                            <input type="radio" id="bootcamp" name="property" value="bootcamp">
                                            <label for="bootcamp" class="m-0">Team Bootcamp</label>
                                        </div>
                                        <div class="col-sm-3 col-12 d-flex align-items-center">
                                            <input type="radio" id="house" name="property" value="house">
                                            <label for="house" class="m-0">Smart House</label>
                                        </div>
                                        <div class="col-sm-3 col-12 d-flex align-items-center">
                                            <input type="radio" id="renewable" name="property" value="renewable">
                                            <label for="renewable" class="m-0">Renewable Home</label>
                                        </div>
                                        <div class="col-sm-3 col-12 d-flex align-items-center">
                                            <input type="radio" id="duplex" name="property" value="duplex">
                                            <label for="duplex" class="m-0">Duplex</label>
                                        </div>
                                        <div class="col-sm-3 col-12 d-flex align-items-center">
                                            <input type="radio" id="office" name="property" value="office">
                                            <label for="office" class="m-0">Home Office</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="about">About Host</label>
                                    <textarea id="about" cols="30" rows="8" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
                            <div class="col-sm-12">
                                <h4>Qualification</h4>
                                <button class="btn btn-primary">Add More</button>
                            </div>
                            <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
                            <div class="d-flex align-items-center justify-content-between">
                                <h4>My Album</h4>
                                <button class="btn btn-primary">Add More</button>
                            </div>
                            <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
                            <div class="col-sm-12">
                                <input type="submit" class="btn btn-primary update-btn form-control" value="Update" />
                            </div>
                        </div>   
                    </form>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
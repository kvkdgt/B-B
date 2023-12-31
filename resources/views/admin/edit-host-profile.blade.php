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
    padding: 50px 0;
}

/* ========= */
.side-edit-bar {
    background: #777;
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

ul.menu li span {
    color: #000;
    display: block;
    padding: 5px 20px;
    transition: all 0.5s ease;
    border-radius: 20px;
}

ul.menu li span:hover {
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
    color: white;
    list-style: none;
    margin: 0 20px;
    padding: 10px;
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
    font-size: 18px;
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
<script>
function toggleSubMenu(icon) {
    var subMenu = icon.nextElementSibling;
    subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
}
</script>

<main id="main">

    <section class="edit-profile">
        <div class="container">
        <div class="row m-0 page-wrapper-dashboard">
        <div class="col-lg-2 col-md-3 col-sm-1 col-1">
     <div class="mobile-menu">
<span><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M256 0a256 256 0 1 0 0 512A256 256 0 1 0 256 0zM135 241c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l87 87 87-87c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L273 345c-9.4 9.4-24.6 9.4-33.9 0L135 241z"/></svg></span>
                <div class="page-sidebar">
                    <div class="user-block">
                        <img src="{{env('BASE_URL')}}/assets/img/avatar.png" alt="" width="50" height="50">
                        <h4>Kartik Trivedi</h4>
                        <a href="#">kartik@mailinator.com</a>
                    </div>
                    <ul class="menu">
                        <li class="dropdown">
                            <div onclick="toggleSubMenu(this)">
                                <span><a href="{{route('admindashboard')}}">Admin Dashboard</a></span> <i
                                    class="fa-solid fa-caret-right"></i>
                            </div>
                            <ul class="sub-menu dropdown">
                                <li><span><a href="{{route('adminNotification')}}">Notification</a></span></span>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <div onclick="toggleSubMenu(this)">
                                <a href="{{route('adminbooking')}}"> <span>Bookings</span> </a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <div onclick="toggleSubMenu(this)">
                                <a href="{{route('users')}}"> <span>Users</span> </a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <div onclick="toggleSubMenu(this)">
                                <span>All Listing</span> <i class="fa-solid fa-caret-right"></i>
                            </div>
                            <ul class="sub-menu">
                                <li><span><a href="{{route('alllistingadmin')}}">View All</a></li>

                            </ul>
                        </li>
                        <li><span><a href="{{route('chat')}}">Chat</a></span></span></li>
                        <li class="dropdown">
                            <div onclick="toggleSubMenu(this)">
                                <span>Payments & Payouts</span> <i class="fa-solid fa-caret-right"></i>
                            </div>
                            <ul class="sub-menu">
                                <!-- <li><a href="{{route('revenueadmin')}}"><span>Revenue</span></a></li>
                                <li><a href="{{route('netincomeadmin')}}"><span>Net Income</span></a></li> -->
                                                                <li><a href="{{route('paydetailadmin')}}"><span>Request Payout</span></a></li>

                            </ul></i>
                        </li>
                        <li class="dropdown">
                            <div onclick="toggleSubMenu(this)">
                                <span>Settings</span> <i class="fa-solid fa-caret-right"></i>
                            </div>
                             <ul class="sub-menu">
                                <li><a href="{{route('adminprofilesetting')}}"><span>Profile Setting</span></a></li>
                                <li><a href="{{route('adminchangepassword')}}"><span>Change Password</span></a></li>
                                <li><a href="{{route('cms')}}"><span>Update Pages</span></a></li>
                                <!-- <li><span>Block IP addresses</span></li> -->
                            </ul>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </div>
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
                                        <button type="button">Uploade Photo</button>
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
                                    <input type="text" id="title" class="form-control" placeholder="eg.Pythonn Tutor"
                                        required />
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
                                        <button type="button">Uploade Photo</button>
                                        <input type="file" id="id" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control" placeholder="example@gmail.com"
                                        required />
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
                                    <input type="time" id="timein" class="form-control" placeholder="example@gmail.com"
                                        required />
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="timeout">Time Out</label>
                                    <input type="time" id="timeout" class="form-control" placeholder="0912345678"
                                        required />
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
                                <h4>Academic Qualification</h4>
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
    <script>
        $(document).ready(function () {
            $('.mobile-menu').click(function () {
                $('body').toggleClass('open-menu')
            });
        });
    </script>
</main>
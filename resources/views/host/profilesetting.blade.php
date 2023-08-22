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

.page-sidebar {
    background: #fff;
    height: calc(100vh - 75px);
    margin: -10px;
    box-shadow: 0 0 15px #ededed;
    overflow-y: scroll;
}

.page-content {
    height: calc(100vh - 75px);
    overflow-y: scroll;
    padding: 30px;
    margin: -10px;
}

.page-content::-webkit-scrollbar {
    width: 7px;
}

.page-content::-webkit-scrollbar-track {
    background: #fff;
}

.page-content::-webkit-scrollbar-thumb {
    background: #bee500;
    border-radius: 10px;
}

.page-sidebar::-webkit-scrollbar {
    width: 5px;
}

.page-sidebar::-webkit-scrollbar-track {
    background: #fff;
}

.page-sidebar::-webkit-scrollbar-thumb {
    background: rgb(190 229 0 / 50%);
    border-radius: 10px;
}

body {
    overflow: hidden;
}

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
    /* color: #fff; */
    text-align: center;
    padding: 10px 0;
}

.user-block h4 {
    margin: 5px 0 0;
}

/* .user-block a,
.user-block a:hover {
    color: #fff;
} */

ul.menu {
    list-style: none;
    margin: 20px 0 0;
    padding: 0;
}

ul.menu li {
    padding: 0 0 10px;
}

ul.menu li span {
    /* color: #fff; */
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

/* .edit-profile label {
    display: block;
} */

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

span input {
    height: auto !important;
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


<script>
const activitiesSelect = document.getElementById('activities');
const activityDetails = document.getElementById('activityDetails');

activitiesSelect.addEventListener('change', updateSelectedActivities);

function updateSelectedActivities() {
    const selectedActivities = Array.from(activitiesSelect.selectedOptions).map(option => option.text);
    activityDetails.textContent = "Selected activities: " + selectedActivities.join(", ");
}
</script>

<main id="main">

    <section class="edit-profile">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-3">
                <div class="mobile-menu open-menu">

                    <div class="page-sidebar">
                        <div class="user-block">
                            <img src="{{env('BASE_URL')}}/assets/img/avatar.png" alt="" width="50" height="50">
                            <h4>Kartik Trivedi</h4>
                            <a href="#">kartik@mailinator.com</a>
                        </div>
                        <ul class="menu">
                            <li class="dropdown">
                                <div onclick="toggleSubMenu(this)">
                                    <span><a href="{{route('dashboard')}}">Host Dashboard</a></span> <i
                                        class="fa-solid fa-caret-right"></i>
                                </div>
                                <ul class="sub-menu dropdown">
                                    <li><span><a href="{{route('editHostProfile')}}">Profile</a></span></span>
                                <span><a href="{{route('hostNotification')}}">Notification</a></span></span>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <div onclick="toggleSubMenu(this)">
                                    <a href="{{route('hostbooking')}}"> <span>Bookings</span> </a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <div onclick="toggleSubMenu(this)">
                                    <span>My Listing</span> <i class="fa-solid fa-caret-right"></i>
                                </div>
                                <ul class="sub-menu">
                                    <li><span><a href="{{route('alllisting')}}">View All</a></li>
                                    <!-- <li><span><a href="{{route('likedlisting')}}">View Liked Listing</span></a></li>
                                <li><span><a href="{{route('savedlisting')}}">View Saved Listing</span></a></li>
                                <li><span><a href="{{route('createListing')}}">Create New Listing</span></a></li> -->
                                </ul>
                            </li>
                            <li class="dropdown">
                                <div onclick="toggleSubMenu(this)">
                                    <span>Payments & Payouts</span> <i class="fa-solid fa-caret-right"></i>
                                </div>
                                <ul class="sub-menu">
                                    <!-- <li><a href="{{route('revenue')}}"><span>Revenue</span></a></li>
                                <li><a href="{{route('netincome')}}"><span>Net Income</span></a></li> -->
                                    <li><a href="{{route('paydetail')}}"><span>Request Payout</span></a></li>
                                    <li><a href="{{route('editPaymentSetting')}}"><span>Edit Account Details</span></a>
                                    </li>
                                </ul></i>
                            </li>
                            <li class="dropdown">
                                <div onclick="toggleSubMenu(this)">
                                    <span>Settings</span> <i class="fa-solid fa-caret-right"></i>
                                </div>
                                <ul class="sub-menu">
                                    <li><a href="{{route('profilesetting')}}"><span>Profile Setting</span></a></li>
                                    <li><span><a href="{{route('changepassword')}}">Change Password</a></span></li>
                                    <li><span><a href="#">Delete my Account</a></span></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-9 col-12">
                <div class="page-content">
                    <div class="d-flex align-items-center justify-content-between m-4">
                        <h3 class="m-0">Profile Setting</h3>
                        <!-- <a href="#" class="btn btn-primary">ID # VTRULYR9</a> -->
                    </div>
                    <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
                    <form action="">
                        <div class="row m-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <h4>Personal Details</h4>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" id="fname" class="form-control" placeholder="first name"
                                        required />
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" id="lname" class="form-control" placeholder="last name"
                                        required />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="profile">Profile Image</label>
                                    <div class="file-wrapper">
                                        <button type="button">Uploade Photo</button>
                                        <input type="file" id="profile" class="form-control" required />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <label for="address">Location</label>
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
                            <div class="col-12">
                                <div>
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

                            </div>

                            <div class="divider" style=" border-top: 1px solid gray;margin: 16px 0;"></div>
                            <div class="col-sm-12">
                                <div>
                                    <h3 style="margin: 0 0 10px;">My Listing</h3>
                                </div>
                                <label for="address">Location of Listing</label>
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

                            <div class="divider" style=" border-top: 1px solid gray;margin: 16px 0;"></div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="property">Language</label>
                                    <div class="row radio-group">
                                        <div class="col-sm-4 col-12 d-flex align-items-center">
                                            <input type="radio" id="appartments" name="property" value="appartments">
                                            <label for="appartments" class="m-0">English</label>
                                        </div>
                                        <div class="col-sm-4 col-12 d-flex align-items-center">
                                            <input type="radio" id="private" name="property" value="private">
                                            <label for="private" class="m-0">French</label>
                                        </div>
                                        <div class="col-sm-4 col-12 d-flex align-items-center">
                                            <input type="radio" id="homr" name="property" value="homr">
                                            <label for="homr" class="m-0">Hindi</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divider" style=" border-top: 1px solid gray;margin: 16px 0;"></div>

                            <div class="col-sm-12">
                                <label for="address">Property Type</label>
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <select id="country">
                                            <option disabled selected hidden>Please Selecte a Country</option>
                                            <option value="country">Villa</option>
                                            <option value="country">Resort</option>
                                            <option value="country">Appartment</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
                            <div class="col-12">
                                <div>
                                    <h3 style="margin: 0 0 10px;">About the listing</h3>
                                </div>
                                <h5>Koh Samui, Suratthani, Thailand</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum tortor eget
                                    nisi bibendum morbi at pulvinar consectetur. Ac id nec sed sed nulla faucibus.
                                    Massa eu sit laoreet nunc mauris pellentesque. Tincidunt semper facilisi tortor
                                    netus a pellentesque auctor maecenas id. Ac, egestas magna a consectetur
                                    fermentum. Urna, nec quam sed massa, pellentesque. Diam enim vel porta diam
                                    iaculis tellus cursus mauris. </p>
                                <!-- </div> -->

                            </div>
                            <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>

                            <div class="col-sm-12">
                                <h3 style="margin: 0 0 10px; width: 100%;">What's Included</h3>
                                <div class="row">
                                    <div class="col-4">
                                        <input type="checkbox" id="breakfast" name="activities" value="breakfast"
                                            style="margin-right: 5px; height: auto;">
                                        <label for="breakfast">Breakfast </label>
                                    </div>
                                    <div class="col-4">
                                        <input type="checkbox" id="gaming" name="activities" value="gaming"
                                            style="margin-right: 5px; height: auto;">
                                        <label for="gaming">Gaming</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="checkbox" id="cityTour" name="activities" value="cityTour"
                                            style="margin-right: 5px; height: auto;">
                                        <label for="cityTour">City Tour</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="checkbox" id="steamRoom" name="activities" value="steamRoom"
                                            style="margin-right: 5px; height: auto;">
                                        <label for="steamRoom">Steam Room</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="checkbox" id="movieTheater" name="activities" value="movieTheater"
                                            style="margin-right: 5px; height: auto;">
                                        <label for="movieTheater">Movie Theater</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="checkbox" id="wifi" name="activities" value="wifi"
                                            style="margin-right: 5px; height: auto;">
                                        <label for="wifi">Wifi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
                            <div class="col-sm-12">
                                <h4>Academic Qualification</h4>
                                <div class="col-sm-4 col-12">
                                    <div class="form-group">
                                        <label for="email">Title of Quaification</label>
                                        <input type="email" id="email" class="form-control" placeholder="qualification"
                                            required />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="email">School Name</label>
                                        <input type="email" id="email" class="form-control" placeholder="School Name"
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <label for="email">From Year</label>
                                    <select id="state">
                                        <option value="state"> 2020</option>
                                        <option value="state">2021</option>
                                        <option value="state">2022</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-12">
                                    <label for="email">To Year</label>
                                    <select id="city">
                                        <option value="state"> 2020</option>
                                        <option value="state">2021</option>
                                        <option value="state">2022</option>
                                    </select>
                                </div>
                                <span class="d-flex align-items-center justify-content-center">
                                    <button class="btn btn-primary">Add More</button>
                                </span>
                            </div>
                            <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <h4>Co-Host</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="fname">First Name</label>
                                                <input type="text" id="fname" class="form-control"
                                                    placeholder="First name" required />
                                            </div>
                                            <label for="email">Area of Experince</label>
                                            <select id="state">
                                                <option value="state"> 2020</option>
                                                <option value="state">2021</option>
                                                <option value="state">2022</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="lname">Last Name</label>
                                                <input type="text" id="lname" class="form-control"
                                                    placeholder="Last name" required />
                                            </div>
                                            <label for="email">Years of Experince</label>
                                            <select id="state">
                                                <option value="state"> 2020</option>
                                                <option value="state">2021</option>
                                                <option value="state">2022</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="profile">Profile Image</label>
                                                <div class="file-wrapper">
                                                    <button type="button">Uploade Photo</button>
                                                    <input type="file" id="profile" class="form-control" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <span class="d-flex align-items-center justify-content-center">
                                                <button class="btn btn-primary">Add More</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>

                            <div class="d-flex align-items-center justify-content-between">
                                <div class="col-sm-12">
                                    <h4>House Rules</h4>
                                    <div class="d-flex">
                                        <span style="flex: 0 0 30%;">
                                            <input type="checkbox" id="breakfast" name="activities" value="breakfast"
                                                style="margin-right: 5px;">
                                            <label for="breakfast">No pets</label>
                                        </span>
                                        <span style="flex: 0 0 30%;">
                                            <input type="checkbox" id="gaming" name="activities" value="gaming"
                                                style="margin-right: 5px;">
                                            <label for="gaming">No smoking</label>
                                        </span>
                                        <span style="flex: 0 0 30%;">
                                            <input type="checkbox" id="cityTour" name="activities" value="cityTour"
                                                style="margin-right: 5px;">
                                            <label for="cityTour">No guest</label>
                                        </span>
                                        <button class="btn btn-primary">Add More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>

                            <div class="d-flex align-items-center justify-content-between">
                                <div class="col-sm-12">
                                    <h4>Amenities</h4>
                                    <div class="d-flex">
                                        <span style="flex: 0 0 30%;">
                                            <input type="checkbox" id="breakfast" name="activities" value="breakfast"
                                                style="margin-right: 5px;">
                                            <label for="breakfast">CCTV</label>
                                        </span>
                                        <span style="flex: 0 0 30%;">
                                            <input type="checkbox" id="gaming" name="activities" value="gaming"
                                                style="margin-right: 5px;">
                                            <label for="gaming">TV</label>
                                        </span>
                                        <span style="flex: 0 0 30%;">
                                            <input type="checkbox" id="cityTour" name="activities" value="cityTour"
                                                style="margin-right: 5px;">
                                            <label for="cityTour">Bath</label>
                                        </span>
                                        <button class="btn btn-primary">Add More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>

                            <div class="d-flex align-items-center justify-content-between">
                                <div class="col-sm-12">
                                    <h4>Media</h4>
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
                                    <button class="btn btn-primary">Add More</button>
                                </div>
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
</main>
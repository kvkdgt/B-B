@extends('hometheme')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
.profile {
    padding: 25px 0 10px;
}

.second-tr:hover {
    background-color: white !important;
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
    color: #000;
    text-align: center;
    padding: 10px 0;
    margin-top: 20px;
}

.user-block h4 {
    margin: 5px 0 0;
}

.user-block a,
.user-block a:hover {
    color: #000;
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
    color: #000;
}

ul.sub-menu {
    color: #000;
    list-style: none;
    margin: 0 5px;
    padding: 10px 10px 0;
    display: none;
}

ul.sub-menu li:last-child {
    padding: 0;
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

.file-wrapper input#profile {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    opacity: 0;
}

.error-block {
    background: rgb(255, 0, 0, 10%);
    color: red;
    padding: 12px;
    border-radius: 5px;
    margin: 0 0 30px;
}

.total-block {
    /* background: #FFFFFF; */
    border: 1px solid rgba(0, 0, 0, 0.5);
    /* box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.07); */
    border-radius: 25px;
    margin-bottom: 25px;
    padding: 25px;
}

.total-header {
    margin: 0 0 20px;
}

.total-header select {
    margin: 0;
    padding: 7px;
}

.form-block label {
    font-family: "Time New Roman", Garamond, serif;
    font-size: 24px;
}
/* .container {
    max-width: 1600px;
    width: 100%
}

@media (min-width: 1799px) {
    .container {
        width: 1440px;
    }
}


@media (min-width: 1470px) {
    .container {
        width: 1140px;
    }
} */

body {
    overflow: hidden;
}

.page-sidebar {
    /* width: 100%;
    max-width: 250px; */
    background: #fff;
    height: calc(100vh - 75px);
    margin: -10px;
    box-shadow: 0 0 15px #ededed;
    overflow-y: scroll;
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

footer#footer {
    display: none;
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

.mobile-menu span {
    display: none;
}

table thead {
    background: #fff !important;
}

@media screen and (max-width: 767px) {
    /*.page-sidebar {
        display: none;
    }
 .mobile-menu>span {
        font-size: 24px;
        position: absolute;
        top: -60px;
        z-index: 999;
        display: block;
    }*/

    #header .logo {
        margin-left: auto !important;
    }

    /* .search-area {
        display: block !important;
    } */

    .search-block form {
        margin: 0;
    }

    /* .mobile-menu.open-menu .page-sidebar {
        display: block;
        margin: -15px;
    } */

    /* .mobile-menu.open-menu span.hide-menu {
        display: block;
    }

    span.hide-menu,
    .mobile-menu.open-menu span.show-menu {
        display: none;
    } */

}

/* ul.sub-menu li a {
    color: #fff;
} */

.listing-name input[type="text"] {
    margin: 0;
}

.row.listing-name {
    margin-top: 30px;
}

.listing-header {
    margin-bottom: 20px !important;
}

.lag-radio-block {
    flex-wrap: wrap;
}

.lag-radio-block span {
    flex: 0 0 20%;
    margin-top: 10px;
}

.guest-location h3 {
    padding: 0 0 20px;
}

.guest-location input {
    width: 100%;
}

.location-block h3 {
    padding: 0 0 10px;
}

.property-block select {
    width: 100%;
}

.guest-block p {
    margin: 10px 0 0;
}

.more-block {
    margin: 20px 0;
}

.details-block h3 {
    margin: 0 0 20px;
}

.guest-freebies span {
    flex: 0 0 33.33%;
    flex: 0 0 50%;
    margin-top: 10px;
}

.ideal-block .col-12:not(:last-child) {
    margin-bottom: 10px;
}

.location-block select {
    width: 100%;
}

.details-content p {
    margin: 10px 0 0;
}

.details-content img {
    max-width: 100%;
}

.details-content .col-sm-6 {
    margin-bottom: 16px;
}

.more-block {
    margin: 0;
}

.previous-wrapper {
    margin: 0 -12px;
}

.previous-block {
    flex: 0 0 22.5%;
    padding: 0 12px;
}

table tbody tr td:nth-child(3n) {
    border-right: 1px solid #000;
}

table thead th:first-child {
    border-right: 1px solid #000;
}

table thead th:not(:nth-last-of-type(2)) {
    border-right: 1px solid #000;
}

table thead th:last-child {
    border-right: none;
}

table thead th {
    color: #000 !important;
}

table tbody tr:hover {
    background: #fff !important;
}

@media (max-width: 667px) {
    .search-area {
        width: 70% !important;
    }
}

.text-red {
    color: red;
}

.text-green {
    color: green;  
}
</style>
<main id="main">

    <script>
    function toggleSubMenu(icon) {
        var subMenu = icon.nextElementSibling;
        subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
    }
    </script>

    <script>
    function toggleLearnDiv() {
        var learnCheckbox = document.getElementById("event");
        var learnDiv = document.getElementById("learnDiv");

        if (!learnCheckbox.checked) {
            learnDiv.style.display = "block";
        } else {
            learnDiv.style.display = "none";
        }
    }

    function toggleListDiv() {
        var learnCheckbox = document.getElementById("learn");
        var learnDiv = document.getElementById("listdiv");

        if (learnCheckbox.checked) {
            learnDiv.style.display = "block";
        } else {
            learnDiv.style.display = "none";
        }
    }


    function toggleDiv() {
        toggleListDiv();
        toggleLearnDiv();
    }
    </script>



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
                                <li><a href="{{route('editPaymentSetting')}}"><span>Edit Account Details</span></a></li>
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
        <div class="col-lg-10 col-md-9 col-sm-9 col-12" style="background-color: #99999982;">
                <div class="page-content">
                    <div class="row">
                        <div class="listing-header d-flex justify-content-between maintitle">
                            <h2 class="m-0">Create a New Listing</h2>
                        </div>

                        <div class="listing-content">
                            <!--  Title of Listing  -->
                            <div class="titlelisting">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <h3 class="m-0">Title of Listing</h3>
                                    </div>
                                    <div class="row" text-center" style="margin-top: 10px;">
                                        <label for="stayOption">Select an Option:</label>
                                        <select id="stayOption" name="stay" onchange="toggleDiv()">
                                            <option value="learn" selected>Stay & Learn</option>
                                            <option value="event">Stay For Event</option>
                                        </select>
                                    </div>
                                    <!-- <div class=" col-md-6 col-sm-6">
                                        <input type="radio" id="learn" name="stay" value="learn" onclick="toggleDiv()"
                                            checked>
                                        <label for="learn" class="text-red">Stay & Learn</label>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <input type="radio" id="event" name="stay" value="event" onclick="toggleDiv()">
                                        <label for="event" class="text-green">Stay For Event</label>
                                    </div> -->
                                </div>
                                <div class="row listing-name">
                                    <div class="col-md-12">
                                        <h3 class="m-0">Listing Name</h3>
                                    </div>
                                    <div class="row d-flex flex-column gap-3">
                                        <input type="text" placeholder="Python (Intro)" />
                                        <input type="text" placeholder="Oktoberfest (Munich)" />

                                    </div>
                                    <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                                        <input type="text" placeholder="Python (Intro)" />
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6" id="listdiv">
                                        <input type="text" placeholder="Oktoberfest (Munich)" />
                                    </div> -->
                                </div>
                            </div>
                            <!--  Maximum Guest Allowed  -->
                            <div class="guest-location">
                                <h3>Language of Instruction</h3>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" placeholder="Language 1">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" placeholder="Language 2">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" placeholder="Language 3">
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col">
                                        <input type="text" placeholder="Language 4">
                                    </div>
                                </div>
                            </div>
                            <!--  Listing Property Type  -->

                            <div id="learnDiv">


                                <div class="guest-location">
                                    <h3>What guest will learn (only for stay & learn)</h3>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" placeholder="Lesson 1">
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" placeholder="Lesson 2">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" placeholder="Lesson 3">
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col">
                                            <input type="text" placeholder="Lesson 4">
                                        </div>
                                    </div>
                                </div>

                                <div class="item location-block">
                                    <h3>Learn Location (Where is the Learning Place? Select one)</h3>
                                    <!-- <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <input type="checkbox" name="b-b" value="only" id="only">
                                            <label for="only">B&B only</label>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <input type="checkbox" name="b-b" value="office" id="office">
                                            <label for="office">B&B and office</label>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <input type="checkbox" name="b-b" value="farm" id="farm">
                                            <label for="farm">B&B and farm</label>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <input type="checkbox" name="b-b" id="outdoor" value="outdoor">
                                            <label for="outdoor">B&B and outdoor</label>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <input type="checkbox" name="b-b" id="workshop" value="workshop">
                                            <label for="workshop">B&B and in the workshop</label>
                                        </div>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="accommodation">Select Accommodation:</label>
                                            <select name="accommodation" id="accommodation">
                                                <option value="only">B&B only</option>
                                                <option value="office">B&B and office</option>
                                                <option value="farm">B&B and farm</option>
                                                <option value="outdoor">B&B and outdoor</option>
                                                <option value="workshop">B&B and in the workshop</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="bblisting">
                                <div class="row">
                                    <div class="col-lg-12 textarea-block">
                                        <h3>About the B&B Listing </h3>
                                        <textarea rows="3" style="width:100%"
                                            placeholder="Tell guests what this stay & learn / stay for Event"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <h3>Listing photo & video</h3>
                                        <div class="details-block">
                                            <div class="d-flex align-items-center justify-content-between">
                                            </div>
                                            <div class="details-content">
                                                <!-- <div class="row">
                                                    <div class="col-md-4 col-sm-6 text-center">
                                                        <img src="assets/img/hotels/hotel-2.png">
                                                    </div>
                                                    <div class="col-md-4 col-sm-6 text-center">
                                                        <img src="assets/img/hotels/hotel-3.png">
                                                    </div>
                                                    <div class="col-md-4 col-sm-6 text-center">
                                                        <img src="assets/img/hotels/hotel-3.png">
                                                    </div>
                                                </div> -->
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-6 image-block text-center">
                                                        <div class="form-group">
                                                            <div class="file-wrapper">
                                                                <button type="button">Upload Photo</button>
                                                                <input type="file" id="profile" class="form-control"
                                                                    required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 image-block text-center">
                                                        <div class="form-group">
                                                            <div class="file-wrapper">
                                                                <button type="button">Upload Photo</button>
                                                                <input type="file" id="profile" class="form-control"
                                                                    required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 image-block text-center">
                                                        <div class="form-group">
                                                            <div class="file-wrapper">
                                                                <button type="button">Upload Photo</button>
                                                                <input type="file" id="profile" class="form-control"
                                                                    required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 image-block text-center">
                                                        <div class="form-group">
                                                            <div class="file-wrapper">
                                                                <button type="button">Upload Photo</button>
                                                                <input type="file" id="profile" class="form-control"
                                                                    required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 image-block text-center">
                                                        <div class="form-group">
                                                            <div class="file-wrapper">
                                                                <button type="button">Upload Photo</button>
                                                                <input type="file" id="profile" class="form-control"
                                                                    required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-6 image-block text-center">
                                                        <div class="form-group">
                                                            <div class="file-wrapper">
                                                                <button type="button"><i
                                                                        class="fa-regular fa-square-plus"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class=" location_section">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Location </h3>
                                        <div class="row location-block ">
                                            <div class="col-4">
                                                <select>
                                                    <option disabled selected hidden> Select Country </option>
                                                    <option> India </option>
                                                    <option> Australia </option>
                                                    <option> USA </option>
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <select>
                                                    <option disabled selected hidden> Select State </option>
                                                    <option> Gujarat </option>
                                                    <option> Maharastra </option>
                                                    <option> Rajasthan </option>

                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <select>
                                                    <option disabled selected hidden> Select City </option>
                                                    <option> Mehsana </option>
                                                    <option> Ahmedabad </option>
                                                    <option> Surat </option>
                                                </select>
                                            </div>
                                            <!-- <div class="col-2">
                                                                <button class="btn btn-primary">map</button>
                                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-12 property-block">
                                        <h3>Property Type</h3>
                                        <select>
                                            <option>Apartment</option>
                                            <option>Row House</option>
                                            <option>Bunglow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Maximum Number of Guests(Adults)</h3>
                                        <select>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>

                                        </select>
                                        <div class="details-block1">
                                            <div class="d-flex align-items-center justify-content-between row">
                                                <h3>Where Guest will sleep </h3>
                                            </div>
                                            <div class="details-content">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-6 image-block text-center">
                                                        <div class="form-group">
                                                            <div class="file-wrapper">
                                                                <button type="button">Upload Photo</button>
                                                                <input type="file" id="profile" class="form-control"
                                                                    required />
                                                            </div>
                                                        </div>
                                                        <input type="text" name="b-b" id="workshop"
                                                            placeholder="Enter title here" />
                                                    </div>
                                                    <div class="col-md-4 col-sm-6 image-block text-center">
                                                        <div class="form-group">
                                                            <div class="file-wrapper">
                                                                <button type="button">Upload Photo</button>
                                                                <input type="file" id="profile" class="form-control"
                                                                    required />
                                                            </div>
                                                        </div>
                                                        <input type="text" name="b-b" id="workshop"
                                                            placeholder="Enter title here" />
                                                    </div>
                                                    <div class="col-md-4 col-sm-6 image-block text-center">
                                                        <div class="form-group">
                                                            <div class="file-wrapper">
                                                                <button type="button">Upload Photo</button>
                                                                <input type="file" id="profile" class="form-control"
                                                                    required />
                                                            </div>
                                                        </div>
                                                        <input type="text" name="b-b" id="workshop"
                                                            placeholder="Enter title here" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12 guest-freebies">
                                    <h3>Ideal Guest</h3>
                                    <div class="row">
                                        <span>
                                            <input type="checkbox">
                                            <label>Students</label></span><span>
                                            <input type="checkbox">
                                            <label>Founders</label></span><span>
                                            <input type="checkbox">
                                            <label>Family</label></span><span>
                                            <input type="checkbox">
                                            <label>Digital Workers</label></span>
                                        <span>
                                            <input type="checkbox">
                                            <label>Tourists</label></span><span>
                                            <input type="checkbox">
                                            <label>Employees</label></span><span>
                                            <input type="checkbox">
                                            <label> Gen Z</label></span><span>
                                            <input type="checkbox">
                                            <label>Backpackers</label></span>


                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row  guest-freebies-main text-center">
                                <div class="row guest-freebies">
                                    <h3>Ideal Guest</h3>
                                    <div class="row">
                                        <label for="guest-type">Select Ideal Guest:</label>
                                        <select name="guest-type" id="guest-type">
                                            <option value="students">Students</option>
                                            <option value="founders">Founders</option>
                                            <option value="family">Family</option>
                                            <option value="digital-workers">Digital Workers</option>
                                            <option value="tourists">Tourists</option>
                                            <option value="employees">Employees</option>
                                            <option value="gen-z">Gen Z</option>
                                            <option value="backpackers">Backpackers</option>
                                        </select>
                                    </div>
                                </div>
                            </div> -->




                            <div class="guest-freebies">
                                <h3>What is included? (Select freebies you give guests)</h3>
                                <div class="row">
                                    <span>
                                        <input type="checkbox">
                                        <label>Breakfast</label></span><span>
                                        <input type="checkbox">
                                        <label>Dinner</label></span><span>
                                        <input type="checkbox">
                                        <label>Snacks</label></span><span>
                                        <input type="checkbox">
                                        <label>City Tour</label></span><span>
                                        <input type="checkbox">
                                        <label>Airport pick-up/drop off</label>
                                    </span>
                                    <span>
                                        <input type="checkbox">
                                        <label>Document Draft</label></span><span>
                                        <input type="checkbox">
                                        <label>Fre event tickets</label></span><span>
                                        <input type="checkbox">
                                        <label>Free parking tickets</label></span><span>
                                        <input type="checkbox">
                                        <label>Cycling</label></span><span>
                                        <input type="checkbox">
                                        <label>co-cook</label></span>
                                    <span>
                                        <input type="checkbox">
                                        <label>City Walk</label></span><span>
                                        <input type="checkbox">
                                        <label>Free toiletries</label></span><span>

                                </div>
                            </div>


                            <!-- ========== Page 2 ========== -->

                            <!-- <div class="row">
                                    <div class="col-12">
                                        <div class="table-block" style="overflow-x: scroll">
                                            <table>
                                                <thead>
                                                    <tr style="height: 40px;">
                                                        <th colspan="4" style="text-align: center;">Date (Select your availability)</th>
                                                        <th>Total Nights</th>
                                                        <th>Total Nights Cost</th>
                                                    </tr>
                                                </thead>
                                                <tr>
                                                    <td><input type="checkbox" name="check" value="1"></td>
                                                    <td>Day</td>
                                                    <td>Month</td>
                                                    <td>Year</td>
                                                    <td>5 Nights</td>
                                                    <td>$200</td>
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" name="check" value="2"></td>
                                                    <td>Day</td>
                                                    <td>Month</td>
                                                    <td>Year</td>
                                                    <td>5 Nights</td>
                                                    <td>$200</td>
        
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" name="check" value="3"></td>
                                                    <td>Day</td>
                                                    <td>Month</td>
                                                    <td>Year</td>
                                                    <td>5 Nights</td>
                                                    <td>$200</td>
        
                                                </tr>
                                                <tr>
                                                    <td><input type="checkbox" name="check" value="4"></td>
                                                    <td>Day</td>
                                                    <td>Month</td>
                                                    <td>Year</td>
                                                    <td>5 Nights</td>
                                                    <td>$200</td>
        
                                                </tr>
                                            </table>
                                        </div>
        
                                    </div>
                                </div> -->
                            <div class="table_section">
                                <div class="d-flex align-items-center justify-content-between ">
                                    <h3>Dates (Select your availability multiple date are possible)</h3>
                                </div>
                                <div class="row">
                                    <div class="table-block">
                                        <!-- <table>
                                            <thead>
                                                <tr style="height: 40px;">
                                                    <th colspan="3">Check in</th>
                                                    <th colspan="3">Check out</th>
                                                    <th>Total Nights</th>
                                                    <th>Total Cost</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td>
                                                    <select>
                                                        <option>Month</option>
                                                        <option>January</option>
                                                        <option>February</option>
                                                        <option>March</option>
                                                        <option>April</option>
                                                        <option>May</option>
                                                        <option>June</option>
                                                        <option>July</option>
                                                        <option>August</option>
                                                        <option>September</option>
                                                        <option>October</option>
                                                        <option>November</option>
                                                        <option>December</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select>
                                                        <option>Day</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                        <option>11</option>
                                                        <option>12</option>
                                                        <option>13</option>
                                                        <option>14</option>
                                                        <option>15</option>
                                                        <option>16</option>
                                                        <option>17</option>
                                                        <option>18</option>
                                                        <option>19</option>
                                                        <option>20</option>
                                                        <option>21</option>
                                                        <option>22</option>
                                                        <option>23</option>
                                                        <option>24</option>
                                                        <option>25</option>
                                                        <option>26</option>
                                                        <option>27</option>
                                                        <option>28</option>
                                                        <option>29</option>
                                                        <option>30</option>
                                                    </select>
                                                </td>

                                                <td>
                                                    <select>
                                                        <option>Year</option>
                                                        <option>2023</option>
                                                        <option>2024</option>
                                                        <option>2025</option>
                                                        <option>2026</option>
                                                    </select>
                                                </td>

                                                <td>
                                                    <select>
                                                        <option>Month</option>
                                                        <option>January</option>
                                                        <option>February</option>
                                                        <option>March</option>
                                                        <option>April</option>
                                                        <option>May</option>
                                                        <option>June</option>
                                                        <option>July</option>
                                                        <option>August</option>
                                                        <option>September</option>
                                                        <option>October</option>
                                                        <option>November</option>
                                                        <option>December</option>
                                                    </select>
                                                </td>

                                                <td>
                                                    <select>
                                                        <option>Day</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                        <option>11</option>
                                                        <option>12</option>
                                                        <option>13</option>
                                                        <option>14</option>
                                                        <option>15</option>
                                                        <option>16</option>
                                                        <option>17</option>
                                                        <option>18</option>
                                                        <option>19</option>
                                                        <option>20</option>
                                                        <option>21</option>
                                                        <option>22</option>
                                                        <option>23</option>
                                                        <option>24</option>
                                                        <option>25</option>
                                                        <option>26</option>
                                                        <option>27</option>
                                                        <option>28</option>
                                                        <option>29</option>
                                                        <option>30</option>
                                                    </select>
                                                </td>

                                                <td>
                                                    <select>
                                                        <option>Year</option>
                                                        <option>2023</option>
                                                        <option>2024</option>
                                                        <option>2025</option>
                                                        <option>2026</option>
                                                    </select>
                                                </td>

                                                <td>5</td>

                                                <td>&#8364; 300</td>
                                            </tr>
                                        </table> -->
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label>Check in :</label>
                                                        <br>
                                                        <select>
                                                            <option>Month</option>
                                                            <option>January</option>
                                                            <option>February</option>
                                                            <option>March</option>
                                                            <option>April</option>
                                                            <option>May</option>
                                                            <option>June</option>
                                                            <option>July</option>
                                                            <option>August</option>
                                                            <option>September</option>
                                                            <option>October</option>
                                                            <option>November</option>
                                                            <option>December</option>
                                                        </select>
                                                        <select>
                                                            <option>Day</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                            <option>13</option>
                                                            <option>14</option>
                                                            <option>15</option>
                                                            <option>16</option>
                                                            <option>17</option>
                                                            <option>18</option>
                                                            <option>19</option>
                                                            <option>20</option>
                                                            <option>21</option>
                                                            <option>22</option>
                                                            <option>23</option>
                                                            <option>24</option>
                                                            <option>25</option>
                                                            <option>26</option>
                                                            <option>27</option>
                                                            <option>28</option>
                                                            <option>29</option>
                                                            <option>30</option>
                                                        </select>
                                                        <select>
                                                            <option>Year</option>
                                                            <option>2023</option>
                                                            <option>2024</option>
                                                            <option>2025</option>
                                                            <option>2026</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>Check out:</label>
                                                        <br>
                                                        <select>
                                                            <option>Month</option>
                                                            <option>January</option>
                                                            <option>February</option>
                                                            <option>March</option>
                                                            <option>April</option>
                                                            <option>May</option>
                                                            <option>June</option>
                                                            <option>July</option>
                                                            <option>August</option>
                                                            <option>September</option>
                                                            <option>October</option>
                                                            <option>November</option>
                                                            <option>December</option>
                                                        </select>
                                                        <select>
                                                            <option>Day</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                            <option>13</option>
                                                            <option>14</option>
                                                            <option>15</option>
                                                            <option>16</option>
                                                            <option>17</option>
                                                            <option>18</option>
                                                            <option>19</option>
                                                            <option>20</option>
                                                            <option>21</option>
                                                            <option>22</option>
                                                            <option>23</option>
                                                            <option>24</option>
                                                            <option>25</option>
                                                            <option>26</option>
                                                            <option>27</option>
                                                            <option>28</option>
                                                            <option>29</option>
                                                            <option>30</option>
                                                        </select>
                                                        <select>
                                                            <option>Year</option>
                                                            <option>2023</option>
                                                            <option>2024</option>
                                                            <option>2025</option>
                                                            <option>2026</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <label>Total Nights :</label>
                                                        <input type="text" value="5">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <label>Total Cost :</label>
                                                        &#8364; 300
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>

                                                        <button class="btn btn-primary"
                                                            style="float: right; width:40%">Add
                                                            More
                                                            Dates</button>
                                                    </td>
                                                    <!-- </td> -->
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>


                            <div class="row othercost_section">
                                <div class="col-12">
                                    <h3>Other Costs</h3>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-2 col-sm-3 col-4">
                                            <p>Cleaning Fee</p>
                                        </div>
                                        <div class="col-3 d-flex align-items-center ">
                                            <div>

                                                <input type="text" placeholder="&#8364; | Amount" class="form-control">
                                            </div>
                                            <div class="flex align-items-center"
                                                style="padding-bottom: 10px; margin-left: 10px;">

                                                <input type="checkbox" id="costCheckbox">
                                            </div>

                                        </div>
                                        <div class="col-5">
                                            <p>(We suggest 10% of Booking Cost)</p>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center mt-3">
                                        <div class="col-md-2 col-sm-3 col-4">
                                            <p>Refundable Security</p>
                                        </div>
                                        <div class="col-3 d-flex align-items-center ">
                                            <div>

                                                <input type="text" placeholder="&#8364; |  Amount" class="form-control">
                                            </div>
                                            <div class="flex align-items-center"
                                                style="padding-bottom: 10px; margin-left: 10px;">

                                                <input type="checkbox" id="costCheckbox">
                                            </div>

                                        </div>
                                        <div class="col-5">
                                            <p>(We suggest 10% of Booking Cost)</p>
                                        </div>
                                    </div>
                                    <!-- <div class="row d-flex align-items-center">
                                        <div class="col-md-2 col-sm-3 col-4">
                                            <p>Refundable Security</p>
                                        </div>
                                        <div class="col-2">
                                            <input type="text" placeholder="&#8364; Amount" class="form-control">
                                        </div>
                                        <div class="flex align-items-center"
                                            style="padding-bottom: 20px; margin-left: 10px;">

                                            <input type="checkbox" id="costCheckbox">
                                        </div>
                                        <div class="col-5">
                                            <p>(To be retained bu Admin and refunded upon request)</p>
                                        </div>
                                    </div> -->
                                </div>
                            </div>



                            <div class="row total_section">
                                <div class="col-12">
                                    <h3>Total</h3>
                                    <div class="row align-items-center">
                                        <div class="col-md-2 col-sm-3 col-4">
                                            <p>Service Fee</p>
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" placeholder="&#8364; 20" disabled>
                                        </div>
                                        <div class="col-5">
                                            <p>(Host pays 5% of Booking. Guest pays 15% of Booking. A booking is total
                                                nightcost
                                                + cleaning fee)</p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-2 col-sm-3 col-4">
                                            <p>Total</p>
                                        </div>
                                        <div class="col-2">
                                            <div>

                                            </div>
                                            <input type="text" class="form-control" placeholder="&#8364; 50" disabled>
                                        </div>
                                        <div class="col-5">
                                            <p>(What guest will pay)</p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-2 col-sm-3 col-4">
                                            <p>Host income</p>
                                        </div>
                                        <div class="col-2">
                                            <input type="text" class="form-control" placeholder="&#8364; 30" disabled>
                                        </div>
                                        <div class="col-5">
                                            <p>(After deduction of host fee 5% and guest fee 15%)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- ========== Page 3 ========== -->
                            <div class="row rule_section">
                                <div class="col-12">
                                    <h3>Rules (Make your rules friendly for guests)</h3>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <input type="checkbox" id="pets" value="pets" name="no">
                                            <label for="pets">No Pets</label>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <input type="checkbox" id="smoking" value="smoking" name="no">
                                            <label for="smoking">No Smoking</label>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <input type="checkbox" id="visitors" value="visitors" name="no">
                                            <label for="visitors">No Visitors</label>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <input type="checkbox" id="parcel" value="parcel" name="no">
                                            <label for="parcel">No Parcel</label>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <input type="checkbox" id="parties" value="parties" name="no">
                                            <label for="parties">No Parties</label>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <input type="checkbox" id="under" value="under" name="no">
                                            <label for="under">No under 20 guest</label>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <input type="checkbox" id="unregister" value="unregister" name="no">
                                            <label for="unregister">No unregistered guest</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row rule_section text-center">
                                <h3>Rules (Make your rules friendly for guests)</h3>
                                <div class="row">

                                    <label for="rules">Select Rules:</label>
                                    <select name="rules" id="rules">
                                        <option value="pets">No Pets</option>
                                        <option value="smoking">No Smoking</option>
                                        <option value="visitors">No Visitors</option>
                                        <option value="parcel">No Parcel</option>
                                        <option value="parties">No Parties</option>
                                        <option value="under">No under 20 guests</option>
                                        <option value="unregister">No unregistered guests</option>
                                    </select>
                                </div>
                            </div> -->




                            <div class="row time_section">
                                <div class="col-12">
                                    <h3>Time</h3>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <label for="in-time">CheckIn Time</label>
                                            <input type="time" id="in-time" />
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label for="out-time">CheckOut Time</label>
                                            <input type="time" id="out-time" />
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row amenities_div">
                                <div class="col-12">
                                    <h3>Amenities (Select all that are available)</h3>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <input type="checkbox" id="kitchen" name="amenities" />
                                            <label for="kitchen">Functional Kitchen</label>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <input type="checkbox" id="parking" name="amenities" />
                                            <label for="parking">Free Parking</label>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <input type="checkbox" id="charger" name="amenities" />
                                            <label for="charger">EV Charger</label>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <input type="checkbox" id="pool" name="amenities" />
                                            <label for="pool">Pool</label>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <input type="checkbox" id="wifi" name="amenities" />
                                            <label for="wifi">WiFi</label>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <input type="checkbox" id="system" name="amenities" />
                                            <label for="system">Heating & Cooling System</label>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <input type="checkbox" id="work" name="amenities" />
                                            <label for="work">Workstation</label>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <input type="checkbox" id="maker" name="amenities" />
                                            <label for="maker">Coffee maker</label>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <input type="checkbox" id="tv" name="amenities" />
                                            <label for="tv">TV</label>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <input type="checkbox" id="games" name="amenities" />
                                            <label for="games">Games consoles</label>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <input type="checkbox" id="board" name="amenities" />
                                            <label for="board">Board Games</label>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <input type="checkbox" id="gym" name="amenities" />
                                            <label for="gym">Gym ojaizzi</label>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <input type="checkbox" id="hair" name="amenities" />
                                            <label for="hair">Hair Dryer</label>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <input type="checkbox" id="kit" name="amenities" />
                                            <label for="kit">Firstaid Kit</label>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <input type="checkbox" id="mets" name="amenities" />
                                            <label for="mets">Mosqui to mets</label>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <input type="checkbox" id="wash" name="amenities" />
                                            <label for="wash">Wash Machine</label>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row safety_section">
                                <div class="col-12">
                                    <h3>Safety</h3>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <input type="checkbox" id="cctv" name="cctv" />
                                            <label for="cctv">CCTV</label>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <input type="checkbox" id="fire" name="fire" />
                                            <label for="fire">Fire Extinguisher</label>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <input type="checkbox" id="smoke" name="smoke" />
                                            <label for="smoke">Smoke Detector</label>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <input type="checkbox" id="carbon" name="carbon" />
                                            <label for="carbon">Carbon monoxide Detector</label>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <input type="checkbox" id="sign" name="sign" />
                                            <label for="sign">Caution SIgns</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row safety_section text-center">

                                <h3>Safety</h3>
                                <div class="row">

                                    <label for="safety-features">Select Safety Features:</label>
                                    <select name="safety-features" id="safety-features">
                                        <option value="cctv">CCTV</option>
                                        <option value="fire">Fire Extinguisher</option>
                                        <option value="smoke">Smoke Detector</option>
                                        <option value="carbon">Carbon monoxide Detector</option>
                                        <option value="sign">Caution Signs</option>
                                    </select>
                                </div>
                            </div> -->


                            <div class="row howitwork_section">
                                <div class="col-lg-12 textarea-block">
                                    <h3>How it Work </h3>
                                    <!-- <textarea rows="3" style="width:100%"></textarea> -->
                                    <ul>
                                        <li>Contrary to popular belief, Lorem Ipsum is not simply random text</li>
                                        <li>There are many variations of passages of Lorem Ipsum available</li>
                                        <li>Contrary to popular belief, Lorem Ipsum is not simply random text</li>
                                    </ul>
                                </div>
                            </div>


                            <div class="row cancellation_section">
                                <div class="col-lg-12 textarea-block">
                                    <h3>Cancellation Policy </h3>
                                    <!-- <textarea rows="3" style="width:100%"></textarea> -->
                                    <ul>
                                        <li>There are many variations of passages of Lorem Ipsum available</li>
                                        <li>Contrary to popular belief, Lorem Ipsum is not simply random text</li>
                                        <li>There are many variations of passages of Lorem Ipsum available</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-12">
                                    <div class="block-heading d-flex align-items-center mb-4" style="gap: 30px;">
                                        <h3 class="m-0">Co-Hosts</h3>
                                        <div class="form-block">
                                            <label class="m-0" for="dontShowCheckbox">Don't show</label>
                                            <input type="checkbox" id="dontShowCheckbox">
                                        </div>
                                    </div>
                                    <div class="row" style="max-width: 70%; margin: auto;">
                                        <div class="col-md-4 col-sm-12">
                                            <div
                                                style="border: 1px solid;border-radius: 10px;padding: 20px;background: #ededed;display: flex;justify-content: center;">
                                                <img src="assets/img/avatar.png">
                                            </div>
                                            <div style="text-align: center;padding-top: 10px;">
                                                <h4 class="m-0">Rahul</h4>
                                                <h5>Yoga Trainer</h5>
                                                <p>5 years of experience</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div
                                                style="border: 1px solid;border-radius: 10px;padding: 20px;background: #ededed;display: flex;justify-content: center;">
                                                <img src="assets/img/avatar.png">
                                            </div>
                                            <div style="text-align: center;padding-top: 10px;">
                                                <h4 class="m-0">Rahul</h4>
                                                <h5>Yoga Trainer</h5>
                                                <p>5 years of experience</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div
                                                style="border: 1px solid;border-radius: 10px;padding: 20px;background: #ededed;display: flex;justify-content: center;">
                                                <img src="assets/img/avatar.png">
                                            </div>
                                            <div style="text-align: center;padding-top: 10px;">
                                                <h4 class="m-0">Rahul</h4>
                                                <h5>Yoga Trainer</h5>
                                                <p>5 years of experience</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 details-content">
                                    <div class="block-heading d-flex align-items-center mb-4" style="gap: 30px;">
                                        <h3 class="m-0">Media</h3>
                                        <div class="form-block">
                                            <label class="m-0" for="dontShowCheckbox">Don't show</label>
                                            <input type="checkbox" id="dontShowCheckbox">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 text-center">
                                            <img src="assets/img/hotels/hotel-2.png">
                                            <p>Bedroom</p>
                                        </div>
                                        <div class="col-md-4 col-sm-6 text-center">
                                            <img src="assets/img/hotels/hotel-3.png">
                                            <p>Garden</p>
                                        </div>
                                        <div class="col-md-4 col-sm-6 text-center">
                                            <img src="assets/img/hotels/hotel-3.png">
                                            <p>Kitchen</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item-block d-flex justify-content-between">
                                <button class="btn btn-primary" style="background:#bee500 !important">Preview</button>
                                <button class="btn btn-primary" style="background:#bee500 !important">Publish</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.mobile-menu').click(function () {
                $('body').toggleClass('open-menu')
            });
        });
    </script>

</main><!-- End #main -->
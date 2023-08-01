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
    font-size: 24px;
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
    background: #bee500 !important;
}

@media screen and (max-width: 767px) {
    .page-sidebar {
        display: none;
    }

    .mobile-menu>span {
        font-size: 24px;
        position: absolute;
        top: -60px;
        z-index: 999;
        display: block;
    }

    #header .logo {
        margin-left: auto !important;
    }

    .search-area {
        display: block !important;
    }

    .search-block form {
        margin: 0;
    }

    .mobile-menu.open-menu .page-sidebar {
        display: block;
        margin: -15px;
    }

    .mobile-menu.open-menu span.hide-menu {
        display: block;
    }

    span.hide-menu,
    .mobile-menu.open-menu span.show-menu {
        display: none;
    }

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

@media (max-width: 667px) {
    .search-area {
        width: 70% !important;
    }
}
</style>
<main id="main">

    <script>
    function toggleSubMenu(icon) {
        var subMenu = icon.nextElementSibling;
        subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
    }
    </script>



    <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3">
            <div class="mobile-menu open-menu">
                <span class="show-menu"><i class="bi bi-list"></i>
                </span>
                <span class="hide-menu"><i class="fa-solid fa-xmark"></i>
                </span>
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
                                <li><span><a href="{{route('hostNotification')}}">Notification</a></span></span>
                                </li>
                                <li><span><a href="{{route('chat')}}">Chat</a></span></span></li>
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
                                <li><a href="{{route('paydetail')}}"><span>Update pay Details</span></a></li>
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
                <div class="row">
                    <div class="listing-header d-flex align-items-center justify-content-between">
                        <h2 class="m-0">Create a New Listing</h2>
                    </div>
                    <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>

                    <div class="listing-content">
                        <!--  Title of Listing  -->
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-12">
                                <h3 class="m-0">Title of Listing</h3>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <input type="checkbox" id="learn" name="stay" value="learn">
                                <label for="learn">Stay & Learn</label>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <input type="checkbox" id="event" name="stay" value="event">
                                <label for="event">Stay For Event</label>
                            </div>
                        </div>
                        <div class="row align-items-center listing-name">
                            <div class="col-lg-4 col-md-12">
                                <h3 class="m-0">Listing Name</h3>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <input type="text" />
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <input type="text" />
                            </div>
                        </div>
                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
                        <!--  Maximum Guest Allowed  -->
                        <div class="guest-location">
                            <h3>Language of Instruction</h3>
                            <div class="row">
                                <div class="col">
                                    <input type="text" placeholder="Language 1">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Language 2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" placeholder="Language 3">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Language 4">
                                </div>
                            </div>
                        </div>
                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
                        <!--  Listing Property Type  -->
                        <div class="guest-location">
                            <h3>What guest will learn (only for stay & learn)</h3>
                            <div class="row">
                                <div class="col">
                                    <input type="text" placeholder="Location 1">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Location 2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" placeholder="Location 3">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Location 4">
                                </div>
                            </div>
                        </div>

                        <div class="item location-block">
                            <h3>Learn Location (Where is the Learning Place? Select one)</h3>
                            <div class="row">
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
                            </div>
                        </div>
                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
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
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 text-center">
                                                <img src="assets/img/hotels/hotel-2.png">
                                            </div>
                                            <div class="col-md-4 col-sm-6 text-center">
                                                <img src="assets/img/hotels/hotel-3.png">
                                            </div>
                                            <div class="col-md-4 col-sm-6 text-center">
                                                <img src="assets/img/hotels/hotel-3.png">
                                            </div>
                                            <div class="col-md-4 col-sm-6 text-center">
                                                <!-- <img src="assets/img/hotels/hotel-3.png">-->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                <h3>Location </h3>
                                <div class="row location-block">
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
                            <div class="col-lg-4 col-md-12 property-block">
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
                                <div class="details-block">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h3>Where Guest will sleep </h3>
                                    </div>
                                    <div class="details-content">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6 image-block text-center">
                                                <div class="form-group">
                                                    <div class="file-wrapper">
                                                        <button type="button"><i
                                                                class="fa-solid fa-camera"></i></button>
                                                        <input type="file" id="profile" class="form-control" required />
                                                    </div>
                                                </div>
                                                <input type="text" name="b-b" id="workshop" />
                                            </div>
                                            <div class="col-md-4 col-sm-6 image-block text-center">
                                                <div class="form-group">
                                                    <div class="file-wrapper">
                                                        <button type="button"><i
                                                                class="fa-solid fa-camera"></i></button>
                                                        <input type="file" id="profile" class="form-control" required />
                                                    </div>
                                                </div>
                                                <input type="text" name="b-b" id="workshop" />
                                            </div>
                                            <div class="col-md-4 col-sm-6 image-block text-center">
                                                <div class="form-group">
                                                    <div class="file-wrapper">
                                                        <button type="button"><i
                                                                class="fa-solid fa-camera"></i></button>
                                                        <input type="file" id="profile" class="form-control" required />
                                                    </div>
                                                </div>
                                                <input type="text" name="b-b" id="workshop" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>

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
                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
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
                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
                        <div class="details-block">
                            <div class="d-flex align-items-center justify-content-between">
                                <h3>Previous Videos (upload videos of Events & Tutorials) </h3>
                            </div>
                            <div class="details-content">
                                <div class="previous-wrapper">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 image-block text-center">
                                            <div class="form-group">
                                                <div class="file-wrapper">
                                                    <button type="button"><i
                                                            class="fa-solid fa-camera"></i></button>
                                                    <input type="file" id="profile" class="form-control" required />
                                                </div>
                                            </div>
                                            <input type="text" name="b-b" id="workshop" />
                                        </div>
                                        <div class="col-md-4 col-sm-6 image-block text-center">
                                            <div class="form-group">
                                                <div class="file-wrapper">
                                                    <button type="button"><i
                                                            class="fa-solid fa-camera"></i></button>
                                                    <input type="file" id="profile" class="form-control" required />
                                                </div>
                                            </div>
                                            <input type="text" name="b-b" id="workshop" />
                                        </div>
                                        <div class="col-md-4 col-sm-6 image-block text-center">
                                            <div class="form-group">
                                                <div class="file-wrapper">
                                                    <button type="button"><i
                                                            class="fa-solid fa-camera"></i></button>
                                                    <input type="file" id="profile" class="form-control" required />
                                                </div>
                                            </div>
                                            <input type="text" name="b-b" id="workshop" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>

                        <!-- ========== Page 2 ========== -->

                        <div class="row">
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
                        </div>

                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>

                        <div class="row">
                            <div class="col-12">
                                <h3>Other Costs</h3>
                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-4">
                                        <p>Cleaning Fee</p>
                                    </div>
                                    <div class="col-2">
                                        <p>$20</p>
                                    </div>
                                    <div class="col-5">
                                        <p>(We suggest 10% of Booking Cost)</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-4">
                                        <p>Refundable Security</p>
                                    </div>
                                    <div class="col-2">
                                        <p>$0</p>
                                    </div>
                                    <div class="col-5">
                                        <p>(To be retained bu Admin and refunded upon request)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>

                        <div class="row">
                            <div class="col-12">
                                <h3>Total</h3>
                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-4">
                                        <p>Service Fee</p>
                                    </div>
                                    <div class="col-2">
                                        <p>$48</p>
                                    </div>
                                    <div class="col-5">
                                        <p>(Host pays 5% of Booking. Guest pays 15% of Booking. A booking is total
                                            nightcost
                                            + cleaning fee)</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-4">
                                        <p>Total</p>
                                    </div>
                                    <div class="col-2">
                                        <p>$368</p>
                                    </div>
                                    <div class="col-5">
                                        <p>(What guest will pay)</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-4">
                                        <p>Host income</p>
                                    </div>
                                    <div class="col-2">
                                        <p>$304</p>
                                    </div>
                                    <div class="col-5">
                                        <p>(After deduction of host fee 5% and guest fee 15%)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
                        <!-- ========== Page 3 ========== -->
                        <div class="row">
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

                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>

                        <div class="row">
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

                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>

                        <div class="row">
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

                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>

                        <div class="row">
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
                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
                        <div class="row">
                            <div class="col-lg-12 textarea-block">
                                <h3>How it Work </h3>
                                <textarea rows="3" style="width:100%"></textarea>
                            </div>
                        </div>
                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>

                        <div class="row">
                            <div class="col-lg-12 textarea-block">
                                <h3>Cancellation Policy </h3>
                                <textarea rows="3" style="width:100%"></textarea>
                            </div>
                        </div>
                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Co-Hosts</h4>
                                <div class="row" style="width:70%">
                                    <div class="col-6">
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
                                    <div class="col-6">
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
                                <h3>Media</h3>
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
                        <div class="divider" style="border-top: 1px solid gray; margin: 16px 0;"></div>
                        <div class="item-block d-flex justify-content-between">
                            <button class="btn btn-primary">Preview</button>
                            <button class="btn btn-primary">Publish</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



</main><!-- End #main -->
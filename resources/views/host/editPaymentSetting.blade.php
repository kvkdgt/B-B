@extends('hometheme')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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

.search i {
    position: absolute;
    top: 8px;
    right: 10px;
    font-size: 20px;
}

.search input[type="text"] {
    padding: 5px 20px;
}

.search {
    position: relative;
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
</style>
<main id="main">

    <script>
    function toggleSubMenu(icon) {
        var subMenu = icon.nextElementSibling;
        subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
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
        <div class="col-lg-10 col-md-9 col-sm-11 col-10">
            <div class="page-content">
                <div class="row">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h2>
                            Edit Payment Setting
                        </h2>
                    </div>
                    <div class="card-body">
                        <hr>
                        <div class="stripe-account">
                            <center>
                                <h3 class="card-header d-flex align-items-center justify-content-between"> Stripe
                                    Account</h3>
                                <br />
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <h4>Account First Name</h4>
                                    </div>
                                    <div class="col-sm-9 col-12"><input type="text" style="width: 100%;"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <h4>Account Last Name</h4>
                                    </div>
                                    <div class="col-sm-9 col-12"><input type="text" style="width: 100%;"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <h4>Account IBAN</h4>
                                    </div>
                                    <div class="col-sm-9 col-12"><input type="text" style="width: 100%;"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <h4>Account BIC</h4>
                                    </div>
                                    <div class="col-sm-9 col-12"><input type="text" style="width: 100%;"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <h4>Account Routing Number</h4>
                                    </div>
                                    <div class="col-sm-9 col-12"><input type="text" style="width: 100%;"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <h4>Account Number</h4>
                                    </div>
                                    <div class="col-sm-9 col-12"><input type="text" style="width: 100%;"></div>
                                </div>
                        </div>
                        <hr>

                        <div class="stripe-account">
                            <center>
                                <h3 class="card-header d-flex align-items-center justify-content-between"> Paypal
                                    Account</h3>
                                <br />

                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <h4>Account Email</h4>
                                    </div>
                                    <div class="col-sm-9 col-12"><input type="text" style="width: 100%;"></div>
                                </div>
                                <button class="btn btn-primary">Update</button>
                        </div>
                        </center>
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
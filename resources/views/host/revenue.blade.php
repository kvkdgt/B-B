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
</style>
<main id="main">

    <script>
    function toggleSubMenu(icon) {
        var subMenu = icon.nextElementSibling;
        subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
    }
    </script>

    <div class="row">

        <div class="col-lg-2 col-md-3">
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
                                <span><a href="{{route('dashboard')}}">Dashboard</a></span> <i
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
                                <li><span><a href="{{route('likedlisting')}}">View Liked Listing</span></a></li>
                                <li><span><a href="{{route('savedlisting')}}">View Saved Listing</span></a></li>
                                <li><span><a href="{{route('createListing')}}">Create New Listing</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <div onclick="toggleSubMenu(this)">
                                <span>Payments & Payouts</span> <i class="fa-solid fa-caret-right"></i>
                            </div>
                            <ul class="sub-menu">
                                <li><a href="{{route('revenue')}}"><span>Revenue</span></a></li>
                                <li><a href="{{route('netincome')}}"><span>Net Income</span></a></li>
                                <li><a href="{{route('paydetail')}}"><span>Update pay Details</span></a></li>
                            </ul></i>
                        </li>
                        <li class="dropdown">
                            <div onclick="toggleSubMenu(this)">
                                <span>Settings</span> <i class="fa-solid fa-caret-right"></i>
                            </div>
                            <ul class="sub-menu">
                                <li><span>Profile Setting</span></li>
                                <li><span><a href="{{route('changepassword')}}">Change Password</a></span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-12">
            <div class="row">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h4>PAYMENTS &amp; PAYOUTS</h4>
                    <div class="search">
                        <button class="btn btn-danger">Delete</button>
                        <input type="text" name="search" placeholder="Search here">
                        <i class="bx bx-search"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="common-table">
                        <table>
                            <thead>
                                <th></th>
                                <th>Date</th>
                                <th>Listing Name</th>
                                <th>Host Name</th>
                                <th>Host Email</th>
                                <th>Guest Name</th>
                                <th>Guest Email</th>
                                <th>Country</th>
                                <th>Check In</th>
                                <th>Check Out</th>
                                <th>Total Nights</th>
                                <th>Booking ID</th>
                                <th>Service fee</th>
                                <th>Other fee</th>
                                <th>Security Deposit</th>
                                <th>Total Cost</th>
                                <th>Net Income</th>
                                <th>Total Payout</th>
                                <th>Action</th>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </td>
                                    <td>25/03/2023</td>
                                    <td><a href="detail.html">Stay &amp; Learn</a></td>
                                    <td><a href="host-profile.html">Host Name</a></td>
                                    <td>host@gmail.com</td>
                                    <td><a href="host-profile.html">Guest Name</a></td>
                                    <td>guest@gmail.com</td>
                                    <td>Germany</td>
                                    <td>03/04/2023</td>
                                    <td>09/04/2023</td>
                                    <td>08</td>
                                    <td>€49</td>
                                    <td>€49</td>
                                    <td>€49</td>
                                    <td>€49</td>
                                    <td>€495</td>
                                    <td>€49</td>
                                    <td>€49</td>
                                    <td>
                                        <a href="#"><i class="fa fa-eye"></i></a>
                                        <a href="chat.html"><i class="fa fa-dollar"></i></a>
                                        <a href="#"><i class="fa fa-print"></i></a>
                                    </td>
                                </tr>
                            </tbody>

                            <tfoot>
                                <th></th>
                                <th>Date</th>
                                <th>Listing Name</th>
                                <th>Host Name</th>
                                <th>Host Email</th>
                                <th>Guest Name</th>
                                <th>Guest Email</th>
                                <th>Country</th>
                                <th>Check In</th>
                                <th>Check Out</th>
                                <th>Total Nights</th>
                                <th>Booking ID</th>
                                <th>Service fee</th>
                                <th>Other fee</th>
                                <th>Security Deposit</th>
                                <th>Total Cost</th>
                                <th>Net Income</th>
                                <th>Total Payout</th>
                                <th>Action</th>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


</main><!-- End #main -->
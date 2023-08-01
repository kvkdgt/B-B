@extends('hometheme')
@section('content')

<main id="main">
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

.listing-card .listing-item {
        margin-bottom: 15px;
        background: #FFFFFF;
        border: 1px solid #DEDEDE;
        border-radius: 25px;
    }

    .listing-card .slider-content {
        padding: 10px;
    }

    .listing-card .listing-item .sub-main .slider-content a {
    color: #353535;
    font-weight: 600;
    font-size: 18px;
}

.listing-card .user-img-top {
    position: absolute;
    top: 10px;
    left: 40px;
}

.listing-card .user-img-top img {
    width: 50px;
    height: 50px;
    border: 2px solid #bee500;
    border-radius: 50%;
}

.listing-card .listing-item .sub-main .img-sec img {
    border-radius: 25px 25px 0 0;
    margin: 0;
}

.listing-card .listing-item .sub-main .slider-content p {
    font-size: 14px;
    color: #000;
    margin: 5px 0px;
}

.listing-card .listing-item .sub-main .footer a {
    color: #1DA1F2;
    font-weight: 500;
    font-size: 18px;
    margin: auto 0;
    padding: 5px;
    border-radius: 25px;
}

.listing-card .listing-item .sub-main .footer {
    border-top: 1px solid #DEDEDE;
    padding: 10px;
    text-align: center;
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
                        <img src="http://127.0.0.1:8000/assets/img/avatar.png" alt="" width="50" height="50">
                        <h4>Kartik Trivedi</h4>
                        <a href="#">kartik@mailinator.com</a>
                    </div>            
                    <ul class="menu">
                        <li class="dropdown">
                            <div onclick="toggleSubMenu(this)">
                                <span><a href="{{route('admindashboard')}}">Admin Dashboard</a></span> <i class="fa-solid fa-caret-right"></i>
                            </div>
                            <ul class="sub-menu dropdown">
                                <li><span><a href="{{route('adminNotification')}}">Notification</a></span></span>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="dropdown">
                            <div onclick="toggleSubMenu(this)">
                            <a href="{{route('adminbooking')}}">  <span>Bookings</span> </a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <div onclick="toggleSubMenu(this)">
                            <a href="{{route('users')}}">  <span>Users</span> </a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <div onclick="toggleSubMenu(this)">
                                <span>All Listing</span> <i class="fa-solid fa-caret-right"></i>
                            </div>
                            <ul class="sub-menu">
                                <li><span><a href="{{route('alllistingadmin')}}">View All</a></li>
                                <!-- <li><span><a href="{{route('likedlistingadmin')}}">View Liked Listing</span></a></li>
                                <li><span><a href="{{route('savedlistingadmin')}}">View Saved Listing</span></a></li>
                                <li><span><a href="{{route('createListing')}}">Create New Listing</span></a></li> -->
                            </ul>
                        </li>
                        <li><span><a href="{{route('chat')}}">Chat</a></span></span></li>
                        <li class="dropdown">
                            <div onclick="toggleSubMenu(this)">
                                <span>Payments & Payouts</span> <i class="fa-solid fa-caret-right"></i>
                            </div>
                            <ul class="sub-menu">
                                 <li><a href="{{route('revenueadmin')}}"><span>Revenue</span></a></li>
                                <li><a href="{{route('netincomeadmin')}}"><span>Net Income</span></a></li>
                                <li><a href="{{route('paydetailadmin')}}"><span>Update pay Details</span></a></li>
                            </ul></i>
                        </li>
                        <li class="dropdown">
                            <div onclick="toggleSubMenu(this)">
                                <span>Settings</span> <i class="fa-solid fa-caret-right"></i>
                            </div>
                            <ul class="sub-menu">
                                <li><span>Profile Setting</span></li>
                                <li><a href="{{route('changepassword')}}"><span>Change Password</span></a></li>
                                <li class="dropdown">
                                    <div onclick="toggleSubMenu(this)">
                                        <span>Update Pages</span> <i class="fa-solid fa-caret-right"></i>
                                    </div>
                                    <ul class="sub-menu">
                                        <li><span>FAQ</span></li>
                                        <li><span>Safety Tips</span></li>
                                        <li><span>How it works</span></li>
                                        <li><span>Privacy</span></li>
                                        <li><span>Terms</span></li>
                                        <li><span>About us</span></li>
                                    </ul>
                                </li>
                            </li>
                                <li><span>Block IP addresses</span></li>
                                <li class="dropdown">
                                    <div onclick="toggleSubMenu(this)">
                                        <span>Default Currency</span> <i class="fa-solid fa-caret-right"></i>
                                    </div>
                                    <ul class="sub-menu">
                                        <li><span>0 ₹</span></li>
                                        <li><span>0 $</span></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <div onclick="toggleSubMenu(this)">
                                        <span>Default Langauage</span> <i class="fa-solid fa-caret-right"></i>
                                    </div>
                                    <ul class="sub-menu">
                                        <li><span>English</span></li>
                                        <li><span>French</span></li>
                                        <li><span>German</span></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>  
            </div>
        </div>
        <div class="col-lg-10 col-md-9 col-sm-9 col-12">
            <div class="page-content">
                <div class="row">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h4>Saved Listing</h4>
                        <div class="search">
                            <button class="btn btn-danger">Delete</button>
                            <input type="text" name="search" placeholder="Search here">
                            <i class="bx bx-search"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="{{route('createListing')}}" class="btn btn-primary mb-3">Create New Listing</a>
                        <!-- <div class="common-table">
                            <table>
                                <thead>
                                    <th></th>
                                    <th>S/No</th>
                                    <th>Added Date</th>
                                    <th>Listing Name</th>
                                    <th>No of Likes</th>
                                    <th>No of Saves</th>
                                    <th>marked as Reported</th>
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
                                        <td>01</td>
                                        <td>25/03/2023</td>
                                        <td><a href="detail.html">Stay &amp; Learn</a></td>
                                        <td>25</td>
                                        <td>25</td>
                                        <td>25</td>
                                        <td>
                                            <a href="#"><i class="fa fa-edit"></i></a>
                                            <a href="#"><i class="fa fa-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <th></th>
                                    <th>S/No</th>
                                    <th>Added Date</th>
                                    <th>Listing Name</th>
                                    <th>No of Likes</th>
                                    <th>No of Saves</th>
                                    <th>marked as Reported</th>
                                    <th>Action</th>
                                </tfoot>
                            </table>

                        </div> -->
                        <div class="row listing-card">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-12 d-flex align-items-start">
                                    <input type="checkbox">
                                    <div class="listing-item">
                                        <div class="sub-main">
                                            <div class="img-sec p-rel">
                                                <img src="http://127.0.0.1:8000/assets/img/hotels/hotel-1.png" alt="" width="100%">
                                            </div>
                                            <div class="slider-content">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="{{route('detail')}}">Stay and Learn </a>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="#27a5f3">
                                                    <path
                                                        d="M211 7.3C205 1 196-1.4 187.6 .8s-14.9 8.9-17.1 17.3L154.7 80.6l-62-17.5c-8.4-2.4-17.4 0-23.5 6.1s-8.5 15.1-6.1 23.5l17.5 62L18.1 170.6c-8.4 2.1-15 8.7-17.3 17.1S1 205 7.3 211l46.2 45L7.3 301C1 307-1.4 316 .8 324.4s8.9 14.9 17.3 17.1l62.5 15.8-17.5 62c-2.4 8.4 0 17.4 6.1 23.5s15.1 8.5 23.5 6.1l62-17.5 15.8 62.5c2.1 8.4 8.7 15 17.1 17.3s17.3-.2 23.4-6.4l45-46.2 45 46.2c6.1 6.2 15 8.7 23.4 6.4s14.9-8.9 17.1-17.3l15.8-62.5 62 17.5c8.4 2.4 17.4 0 23.5-6.1s8.5-15.1 6.1-23.5l-17.5-62 62.5-15.8c8.4-2.1 15-8.7 17.3-17.1s-.2-17.3-6.4-23.4l-46.2-45 46.2-45c6.2-6.1 8.7-15 6.4-23.4s-8.9-14.9-17.3-17.1l-62.5-15.8 17.5-62c2.4-8.4 0-17.4-6.1-23.5s-15.1-8.5-23.5-6.1l-62 17.5L341.4 18.1c-2.1-8.4-8.7-15-17.1-17.3S307 1 301 7.3L256 53.5 211 7.3z" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p>Python (Intro)
                                                <p>
                                                    <span>Feb 5 - 15</span> Duplex
                                                </p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p>$300</p>
                                                <p> <span>&nbsp;18 </span>&nbsp;Reviews</p>

                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p>akeja, logos</p>
                                                <p> <i class="fa fa-map-marker"></i>10 km away</p>
                                            </div>
                                        </div>
                                        <div class="footer chat-button">
                                            <a href="{{route('chat')}}">Chat Now</a>
                                        </div>
                                            <div class="user-img-top">
                                                <img src="http://127.0.0.1:8000/assets/img/avatar.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-12 d-flex align-items-start">
                                    <input type="checkbox">
                                    <div class="listing-item">
                                        <div class="sub-main">
                                            <div class="img-sec p-rel">
                                                <img src="http://127.0.0.1:8000/assets/img/hotels/hotel-1.png" alt="" width="100%">
                                            </div>
                                            <div class="slider-content">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="{{route('detail')}}">Stay and Learn </a>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="#27a5f3">
                                                    <path
                                                        d="M211 7.3C205 1 196-1.4 187.6 .8s-14.9 8.9-17.1 17.3L154.7 80.6l-62-17.5c-8.4-2.4-17.4 0-23.5 6.1s-8.5 15.1-6.1 23.5l17.5 62L18.1 170.6c-8.4 2.1-15 8.7-17.3 17.1S1 205 7.3 211l46.2 45L7.3 301C1 307-1.4 316 .8 324.4s8.9 14.9 17.3 17.1l62.5 15.8-17.5 62c-2.4 8.4 0 17.4 6.1 23.5s15.1 8.5 23.5 6.1l62-17.5 15.8 62.5c2.1 8.4 8.7 15 17.1 17.3s17.3-.2 23.4-6.4l45-46.2 45 46.2c6.1 6.2 15 8.7 23.4 6.4s14.9-8.9 17.1-17.3l15.8-62.5 62 17.5c8.4 2.4 17.4 0 23.5-6.1s8.5-15.1 6.1-23.5l-17.5-62 62.5-15.8c8.4-2.1 15-8.7 17.3-17.1s-.2-17.3-6.4-23.4l-46.2-45 46.2-45c6.2-6.1 8.7-15 6.4-23.4s-8.9-14.9-17.3-17.1l-62.5-15.8 17.5-62c2.4-8.4 0-17.4-6.1-23.5s-15.1-8.5-23.5-6.1l-62 17.5L341.4 18.1c-2.1-8.4-8.7-15-17.1-17.3S307 1 301 7.3L256 53.5 211 7.3z" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p>Python (Intro)
                                                <p>
                                                    <span>Feb 5 - 15</span> Duplex
                                                </p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p>$300</p>
                                                <p> <span>&nbsp;18 </span>&nbsp;Reviews</p>

                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p>akeja, logos</p>
                                                <p> <i class="fa fa-map-marker"></i>10 km away</p>
                                            </div>
                                        </div>
                                        <div class="footer chat-button">
                                            <a href="{{route('chat')}}">Chat Now</a>
                                        </div>
                                            <div class="user-img-top">
                                                <img src="http://127.0.0.1:8000/assets/img/avatar.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-12 d-flex align-items-start">
                                    <input type="checkbox">
                                    <div class="listing-item">
                                        <div class="sub-main">
                                            <div class="img-sec p-rel">
                                                <img src="http://127.0.0.1:8000/assets/img/hotels/hotel-1.png" alt="" width="100%">
                                            </div>
                                            <div class="slider-content">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="{{route('detail')}}">Stay and Learn </a>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="#27a5f3">
                                                    <path
                                                        d="M211 7.3C205 1 196-1.4 187.6 .8s-14.9 8.9-17.1 17.3L154.7 80.6l-62-17.5c-8.4-2.4-17.4 0-23.5 6.1s-8.5 15.1-6.1 23.5l17.5 62L18.1 170.6c-8.4 2.1-15 8.7-17.3 17.1S1 205 7.3 211l46.2 45L7.3 301C1 307-1.4 316 .8 324.4s8.9 14.9 17.3 17.1l62.5 15.8-17.5 62c-2.4 8.4 0 17.4 6.1 23.5s15.1 8.5 23.5 6.1l62-17.5 15.8 62.5c2.1 8.4 8.7 15 17.1 17.3s17.3-.2 23.4-6.4l45-46.2 45 46.2c6.1 6.2 15 8.7 23.4 6.4s14.9-8.9 17.1-17.3l15.8-62.5 62 17.5c8.4 2.4 17.4 0 23.5-6.1s8.5-15.1 6.1-23.5l-17.5-62 62.5-15.8c8.4-2.1 15-8.7 17.3-17.1s-.2-17.3-6.4-23.4l-46.2-45 46.2-45c6.2-6.1 8.7-15 6.4-23.4s-8.9-14.9-17.3-17.1l-62.5-15.8 17.5-62c2.4-8.4 0-17.4-6.1-23.5s-15.1-8.5-23.5-6.1l-62 17.5L341.4 18.1c-2.1-8.4-8.7-15-17.1-17.3S307 1 301 7.3L256 53.5 211 7.3z" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p>Python (Intro)
                                                <p>
                                                    <span>Feb 5 - 15</span> Duplex
                                                </p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p>$300</p>
                                                <p> <span>&nbsp;18 </span>&nbsp;Reviews</p>

                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p>akeja, logos</p>
                                                <p> <i class="fa fa-map-marker"></i>10 km away</p>
                                            </div>
                                        </div>
                                        <div class="footer chat-button">
                                            <a href="{{route('chat')}}">Chat Now</a>
                                        </div>
                                            <div class="user-img-top">
                                                <img src="http://127.0.0.1:8000/assets/img/avatar.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-12 d-flex align-items-start">
                                    <input type="checkbox">
                                    <div class="listing-item">
                                        <div class="sub-main">
                                            <div class="img-sec p-rel">
                                                <img src="http://127.0.0.1:8000/assets/img/hotels/hotel-1.png" alt="" width="100%">
                                            </div>
                                            <div class="slider-content">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="{{route('detail')}}">Stay and Learn </a>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" fill="#27a5f3">
                                                    <path
                                                        d="M211 7.3C205 1 196-1.4 187.6 .8s-14.9 8.9-17.1 17.3L154.7 80.6l-62-17.5c-8.4-2.4-17.4 0-23.5 6.1s-8.5 15.1-6.1 23.5l17.5 62L18.1 170.6c-8.4 2.1-15 8.7-17.3 17.1S1 205 7.3 211l46.2 45L7.3 301C1 307-1.4 316 .8 324.4s8.9 14.9 17.3 17.1l62.5 15.8-17.5 62c-2.4 8.4 0 17.4 6.1 23.5s15.1 8.5 23.5 6.1l62-17.5 15.8 62.5c2.1 8.4 8.7 15 17.1 17.3s17.3-.2 23.4-6.4l45-46.2 45 46.2c6.1 6.2 15 8.7 23.4 6.4s14.9-8.9 17.1-17.3l15.8-62.5 62 17.5c8.4 2.4 17.4 0 23.5-6.1s8.5-15.1 6.1-23.5l-17.5-62 62.5-15.8c8.4-2.1 15-8.7 17.3-17.1s-.2-17.3-6.4-23.4l-46.2-45 46.2-45c6.2-6.1 8.7-15 6.4-23.4s-8.9-14.9-17.3-17.1l-62.5-15.8 17.5-62c2.4-8.4 0-17.4-6.1-23.5s-15.1-8.5-23.5-6.1l-62 17.5L341.4 18.1c-2.1-8.4-8.7-15-17.1-17.3S307 1 301 7.3L256 53.5 211 7.3z" />
                                                </svg>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p>Python (Intro)
                                                <p>
                                                    <span>Feb 5 - 15</span> Duplex
                                                </p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p>$300</p>
                                                <p> <span>&nbsp;18 </span>&nbsp;Reviews</p>

                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <p>akeja, logos</p>
                                                <p> <i class="fa fa-map-marker"></i>10 km away</p>
                                            </div>
                                        </div>
                                        <div class="footer chat-button">
                                            <a href="{{route('chat')}}">Chat Now</a>
                                        </div>
                                            <div class="user-img-top">
                                                <img src="http://127.0.0.1:8000/assets/img/avatar.png">
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


</main><!-- End #main -->
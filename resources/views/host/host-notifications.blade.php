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
    color: #fff;
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
    margin: 0 5px;
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
</style>
<main id="main">

    <script>
    function toggleSubMenu(icon) {
        var subMenu = icon.nextElementSibling;
        subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
    }
    </script>
    <!-- popular listings start -->
    <section class="host-profile">
        <div class="container" data-aos="fade-up">
            <div class="row mt-5">
                <!--  Right Side Cart  -->
                <h3 class="mb-5">Host Dashboard</h3>
                <div class="col-md-3 col-sm-4 col-12">
                    <div class="side-edit-bar">
                        <div class="user-block">
                            <img src="{{env('BASE_URL')}}/assets/img/avatar.png" alt="" width="50" height="50">
                            <h4>Kartik Trivedi</h4>
                            <a href="#">kartik@mailinator.com</a>
                        </div>
                        <ul class="menu">
                            <li class="dropdown">
                                <div onclick="toggleSubMenu(this)">
                                    <span>Dashboard</span> <i class="fa-solid fa-caret-right"></i>
                                </div>
                                <ul class="sub-menu dropdown" style="display:block;">
                                    <li class="active"><span>Notification</span></span></li>
                                    <li><span>Messages</span></li>
                                    <li><span>Chat</span></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <div onclick="toggleSubMenu(this)">
                                    <span>Bookings</span> <i class="fa-solid fa-caret-right"></i>
                                </div>
                                <ul class="sub-menu">
                                    <li><span>Accepted </span></li>
                                    <li><span>Rejected </span></li>
                                    <li><span>Refunded </span></li>
                                </ul>

                            </li>
                            <li class="dropdown">
                                <div onclick="toggleSubMenu(this)">
                                    <span>My Listing</span> <i class="fa-solid fa-caret-right"></i>
                                </div>
                                <ul class="sub-menu">
                                    <li><span>View All</li>
                                    <li><span>View Liked Listing</span></li>
                                    <li><span>View Saved Listing</span></li>
                                    <li><span>Create New Listing</span></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <div onclick="toggleSubMenu(this)">
                                    <span>Payments & Payouts</span> <i class="fa-solid fa-caret-right"></i>
                                </div>
                                <ul class="sub-menu">
                                    <li><span>Revenue</span></li>
                                    <li><span>Net Income</span></li>
                                    <li><span>Update pay Details</span></li>
                                </ul></i>
                            </li>
                            <li class="dropdown">
                                <div onclick="toggleSubMenu(this)">
                                    <span>Settings</span> <i class="fa-solid fa-caret-right"></i>
                                </div>
                                <ul class="sub-menu">
                                    <li><span>Profile Setting</span></li>
                                    <li><span>Change Password</span></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="row">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h4>Notifications</h4>
                            <div class="search">
                                <button class="btn btn-danger">Delete</button>
                                <input type="text" name="search" placeholder="Search here">
                                <i class="bx bx-search"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="notifications">

                                <div class="item mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                                    <div class=" d-flex align-items-center justify-content-lg-between">
                                        <div class="">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                        <div class="">
                                            <img src="assets/img/avatar.png" alt="profile">
                                        </div>
                                        <div class="">
                                            <h4>John Doe <span>Today 09:30 AM</span></h4>
                                            <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                                    <div class=" d-flex align-items-center justify-content-lg-between">
                                        <div class="">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                        <div class="">
                                            <img src="assets/img/avatar.png" alt="profile">
                                        </div>
                                        <div class="">
                                            <h4>John Doe <span>Today 09:30 AM</span></h4>
                                            <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                                    <div class=" d-flex align-items-center justify-content-lg-between">
                                        <div class="">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                        <div class="">
                                            <img src="assets/img/avatar.png" alt="profile">
                                        </div>
                                        <div class="">
                                            <h4>John Doe <span>Today 09:30 AM</span></h4>
                                            <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                                    <div class=" d-flex align-items-center justify-content-lg-between">
                                        <div class="">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </div>
                                        <div class="">
                                            <img src="assets/img/avatar.png" alt="profile">
                                        </div>
                                        <div class="">
                                            <h4>John Doe <span>Today 09:30 AM</span></h4>
                                            <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
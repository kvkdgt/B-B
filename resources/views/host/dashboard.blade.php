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
                                <ul class="sub-menu dropdown">
                                    <li><span><a href="{{route('hostNotification')}}">Notification</a></span></span></li>
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
                    <!--  Statistics  -->
                    <div class="row">
                        <!--  Total Listing  -->
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <h4>Total Listing</h4>
                                    <h3>20</h3>
                                </div>
                            </div>
                        </div>

                        <!--  Total Revenue  -->
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <h4>Total Revenue</h4>
                                    <h3>€2.5K</h3>
                                </div>
                            </div>
                        </div>

                        <!--  Total Net Income  -->
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <h4>Total Net Income</h4>
                                    <h3>€425</h3>
                                </div>
                            </div>
                        </div>

                        <!--  Graphs  -->

                        <!--  Total Listing  -->
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5>Total Listing</h5>
                                    <div class="">
                                        <select name="dropdown">
                                            <option value="All">All</option>
                                            <option value="Monthly">Monthly</option>
                                            <option value="Weekly">Weekly</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body p-3">

                                    <canvas id="total_listing_chart" style="width:100%;max-width:700px"></canvas>

                                </div>
                            </div>
                        </div>

                        <!--  Total Revenue  -->
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5>Total Revenue</h5>
                                    <div class="">
                                        <select name="dropdown">
                                            <option value="All">All</option>
                                            <option value="Monthly">Monthly</option>
                                            <option value="Weekly">Weekly</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <canvas id="total_revenue_chart" style="width:100%;max-width:700px"></canvas>
                                </div>
                            </div>
                        </div>

                        <!--  Total Net Income  -->
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5>Total Net Income</h5>
                                    <div class="">
                                        <select name="dropdown">
                                            <option value="All">All</option>
                                            <option value="Monthly">Monthly</option>
                                            <option value="Weekly">Weekly</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <canvas id="total_income_chart" style="width:100%;max-width:700px"></canvas>
                                </div>
                            </div>
                        </div>

                        <!--  Bookings  -->
                        <div class="col-md-8 col-sm-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5>Bookings</h5>
                                    <div class="">
                                        <select name="dropdown">
                                            <option value="All">All</option>
                                            <option value="Monthly">Monthly</option>
                                            <option value="Weekly">Weekly</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <canvas id="bookings_chart" style="width:100%;max-width:700px"></canvas>
                                </div>
                            </div>
                        </div>


                        <!--  Income/Charges  -->
                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5>Income/Charges</h5>
                                    <div class="">
                                        <select name="dropdown">
                                            <option value="All">All</option>
                                            <option value="Monthly">Monthly</option>
                                            <option value="Weekly">Weekly</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <canvas id="income_pie_chart" style="width:100%;max-width:700px"></canvas>
                                </div>
                            </div>
                        </div>

                        <!--  Recent Bookings  -->
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-gray">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h4>Recent Bookings</h4>
                                    <div class="">
                                        <select name="dropdown">
                                            <option value="All">All</option>
                                            <option value="Monthly">Monthly</option>
                                            <option value="Weekly">Weekly</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <div class="common-table">
                                        <table>
                                            <thead>
                                                <th>S/No</th>
                                                <th>Photo</th>
                                                <th>Date</th>
                                                <th>Listing Name</th>
                                                <th>Country</th>
                                                <th>Guest Name</th>
                                                <th>Check In</th>
                                                <th>Check Out</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>01</td>
                                                    <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                                    <td>25/03/2023</td>
                                                    <td>Stay &amp; Learn</td>
                                                    <td>Germany</td>
                                                    <td>Kartik Trivedi</td>
                                                    <td>03/04/2023</td>
                                                    <td>09/04/2023</td>
                                                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>02</td>
                                                    <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                                    <td>25/03/2023</td>
                                                    <td>Stay &amp; Learn</td>
                                                    <td>Germany</td>
                                                    <td>Kartik Trivedi</td>
                                                    <td>03/04/2023</td>
                                                    <td>09/04/2023</td>
                                                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                                    <td>25/03/2023</td>
                                                    <td>Stay &amp; Learn</td>
                                                    <td>Germany</td>
                                                    <td>Kartik Trivedi</td>
                                                    <td>03/04/2023</td>
                                                    <td>09/04/2023</td>
                                                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>04</td>
                                                    <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                                    <td>25/03/2023</td>
                                                    <td>Stay &amp; Learn</td>
                                                    <td>Germany</td>
                                                    <td>Kartik Trivedi</td>
                                                    <td>03/04/2023</td>
                                                    <td>09/04/2023</td>
                                                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>05</td>
                                                    <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                                    <td>25/03/2023</td>
                                                    <td>Stay &amp; Learn</td>
                                                    <td>Germany</td>
                                                    <td>Kartik Trivedi</td>
                                                    <td>03/04/2023</td>
                                                    <td>09/04/2023</td>
                                                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>06</td>
                                                    <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                                    <td>25/03/2023</td>
                                                    <td>Stay &amp; Learn</td>
                                                    <td>Germany</td>
                                                    <td>Kartik Trivedi</td>
                                                    <td>03/04/2023</td>
                                                    <td>09/04/2023</td>
                                                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>07</td>
                                                    <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                                    <td>25/03/2023</td>
                                                    <td>Stay &amp; Learn</td>
                                                    <td>Germany</td>
                                                    <td>Kartik Trivedi</td>
                                                    <td>03/04/2023</td>
                                                    <td>09/04/2023</td>
                                                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>08</td>
                                                    <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                                    <td>25/03/2023</td>
                                                    <td>Stay &amp; Learn</td>
                                                    <td>Germany</td>
                                                    <td>Kartik Trivedi</td>
                                                    <td>03/04/2023</td>
                                                    <td>09/04/2023</td>
                                                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>09</td>
                                                    <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                                    <td>25/03/2023</td>
                                                    <td>Stay &amp; Learn</td>
                                                    <td>Germany</td>
                                                    <td>Kartik Trivedi</td>
                                                    <td>03/04/2023</td>
                                                    <td>09/04/2023</td>
                                                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                                    <td>25/03/2023</td>
                                                    <td>Stay &amp; Learn</td>
                                                    <td>Germany</td>
                                                    <td>Kartik Trivedi</td>
                                                    <td>03/04/2023</td>
                                                    <td>09/04/2023</td>
                                                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>

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
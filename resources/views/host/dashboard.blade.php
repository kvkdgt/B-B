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
    /* border: 1px solid rgba(0, 0, 0, 0.5); */
    box-shadow: 0px 0 5px #ededed;
    border-radius: 7px;
    margin-bottom: 25px;
    padding: 20px;
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

.button-green i {
    font-size: 28px;
}

.button-green span.badge {
    width: 20px;
    height: 20px;
    line-height: 20px;
    top: -20px;
    padding: 0;
    right: -5px;
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
    <!-- popular listings start -->

    <!-- <div class="dashboard-wrapper"></div> -->
    <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3">
            <div class="mobile-menu open-menu">
                
                <div class="page-sidebar">
                    <ul class="menu">
                        <li class="dropdown">
                            <div onclick="toggleSubMenu(this)">
                                <span><a href="{{route('dashboard')}}">Host Dashboard</a></span> <i
                                    class="fa-solid fa-caret-right"></i>
                            </div>
                            <ul class="sub-menu dropdown">
                                <li><span><a href="{{route('hostNotification')}}">Notification</a></span></span>
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
                        <li><span><a href="{{route('chat')}}">Chat</a></span></span></li>
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
        <div class="col-lg-10 col-md-9">
            <div class="page-content">
                <!--  Statistics  -->
                <div class="row align-items-center my-4">
                    <div class="col-lg-2 col-md-3 col-sm-3 col-sm-6">
                        <a href="{{route('createListing')}}"><button class="btn btn-primary"> + Create
                                Listing</button></a>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-6">
                        <form class="m-0">
                            <input type="search" class="form-control" placeholder="Search Deshboard" />
                        </form>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-sm-6" style="text-align: center;">
                        <button class="btn button-green" type="button">
                            <i class="fa-regular fa-bell"></i><span class="badge">10</span>
                        </button>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6">
                        <div class="user-block d-flex align-items-center justify-content-end" style="gap:10px;">
                            <img src="{{env('BASE_URL')}}/assets/img/avatar.png" alt="" width="50" height="50">
                            <div>
                                <h4>Kartik Trivedi</h4>
                                <a href="#">kartik@mailinator.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--  Total Listing  -->
                    <!-- <div class="col-md-4 col-sm-12">
                            <div class="total-block">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <h4>Total Listing</h4>
                                    <h3>20</h3>
                                </div>
                            </div>
                        </div> -->

                    <!--  Total Net Income  -->
                    <!-- <div class="col-md-4 col-sm-12">
                            <div class="total-block">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <h4>Total Net Income</h4>
                                    <h3>€425</h3>
                                </div>
                            </div>
                        </div> -->

                    <!--  Total Revenue  -->
                    <!-- <div class="col-md-4 col-sm-12">
                            <div class="total-block">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <h4>Total Revenue</h4>
                                    <h3>€2.5K</h3>
                                </div>
                            </div>
                        </div> -->

                    <!--  Graphs  -->

                    <!--  Total Listing  -->
                    <div class="col-md-4 col-sm-12">
                        <div class="total-header d-flex align-items-center justify-content-between">
                            <h4>Total Listing</h4>
                            <div class="">
                                <select name="dropdown">
                                    <option value="All">All</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Weekly">Weekly</option>
                                </select>
                            </div>
                        </div>
                        <div class="total-block">
                            <canvas id="total_listing_chart" style="width:100%;max-width:700px"></canvas>
                        </div>
                    </div>

                    <!--  Total Net Income  -->
                    <div class="col-md-4 col-sm-12">
                        <div class="total-header d-flex align-items-center justify-content-between">
                            <h4>Total Net Income</h4>
                            <div class="">
                                <select name="dropdown">
                                    <option value="All">All</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Weekly">Weekly</option>
                                </select>
                            </div>
                        </div>
                        <div class="total-block">
                            <canvas id="total_income_chart" style="width:100%;max-width:700px"></canvas>
                        </div>
                    </div>

                    <!--  Total Revenue  -->
                    <div class="col-md-4 col-sm-12">
                        <div class="total-header d-flex align-items-center justify-content-between">
                            <h4>Total Revenue</h4>
                            <div class="">
                                <select name="dropdown">
                                    <option value="All">All</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Weekly">Weekly</option>
                                </select>
                            </div>
                        </div>
                        <div class="total-block">
                            <canvas id="total_revenue_chart" style="width:100%;max-width:700px"></canvas>
                        </div>
                    </div>



                    <!--  Bookings  -->
                    <div class="col-md-8 col-sm-12">
                        <div class="total-header d-flex align-items-center justify-content-between">
                            <h4>Bookings</h4>
                            <div class="">
                                <select name="dropdown">
                                    <option value="All">All</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Weekly">Weekly</option>
                                </select>
                            </div>
                        </div>
                        <div class="total-block">
                            <canvas id="bookings_chart" style="width:100%;max-width:700px"></canvas>
                        </div>
                    </div>


                    <!--  Income/Charges  -->
                    <div class="col-md-4 col-sm-12">
                        <div class="total-header d-flex align-items-center justify-content-between">
                            <h4>Likes</h4>
                            <div class="">
                                <select name="dropdown">
                                    <option value="All">All</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Weekly">Weekly</option>
                                </select>
                            </div>
                        </div>
                        <div class="total-block">
                            <canvas id="income_pie_chart" style="width:100%;max-width:700px"></canvas>
                        </div>
                    </div>

                    <!--  Recent Bookings  -->
                    <div class="col-md-12 col-sm-12">
                        <div class="booking-block">
                            <!-- <div class="total-header d-flex align-items-center justify-content-between">
                                <div class="">
                                    <select name="dropdown">
                                        <option value="All">All</option>
                                        <option value="Monthly">Monthly</option>
                                        <option value="Weekly">Weekly</option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="common-table">
                             
                                <h4 class="mb-5">Conversion Rates</h4>

                                <table class="mb-5">
                                    <thead>
                                        <th>S/No</th>
                                        <th>Date</th>
                                        <th>Accept Total</th>
                                        <th>Reject Total</th>
                                        <th>Status</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2/8/22</td>
                                            <td>18</td>
                                            <td><progress id="file" value="2" max="5"> 2 </progress>&nbsp;2 of 5</td>
                                            <td>Unblock</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>2/8/22</td>
                                            <td>18</td>
                                            <td><progress id="file" value="5" max="5"> 5 </progress>&nbsp;5 of 5</td>
                                            <td>Block</td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                <h4 class="mb-5">Recent Booking</h4>

                                <table class="mb-3">
                                    <thead>
                                        <th>S/No</th>
                                        <th>Date</th>
                                        <th>Guest Name</th>
                                        <th>Host Name</th>
                                        <th>Check In</th>
                                        <th>Check Out</th>
                                        <th>Payment</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>02/08/2020</td>
                                            <td>Rahul</td>
                                            <td>Ketul</td>
                                            <td>03/04/2023</td>
                                            <td>09/04/2023</td>
                                            <td>Received</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>04/09/2020</td>
                                            <td>Ajal</td>
                                            <td>Betup</td>
                                            <td>03/04/2023</td>
                                            <td>09/04/2023</td>
                                            <td>Pending</td>
                                        </tr>
                                        <!-- <tr>
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
                                            </tr> -->
                                    </tbody>
                                </table>

                                <div class="table-header d-flex align-items-center justify-content-between">
                                    <h4 class="my-4">Recent Reviews</h4>
                                    <!-- <button class="btn btn-danger">Delete</button> -->
                                </div>
                                <div class="table-heading">
                                    <table>
                                    <thead>
                                            <tr><th></th>
                                            <th>Name</th>
                                            <th>Rating</th>
                                            <th>Reviews</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                    <tr>
                                    <td style="width: 20px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                    </td>
                                    <td><img src="{{env('BASE_URL')}}/assets/img/avatar.png" alt="" width="40" height="40" style="object-fit: cover;">&nbsp; &nbsp; Alan</td>
                                    <td>3Star</td>
                                    <td>Reviews Good B&B</a></td>
                                    <td>Reply</td>
                                </tr>
                                <tr>
                                    <td style="width: 20px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                    </td>
                                    <td><img src="{{env('BASE_URL')}}/assets/img/avatar.png" alt="" width="40" height="40" style="object-fit: cover;">&nbsp; &nbsp; Paul</td>
                                    <td>2Star</td>
                                    <td>Reviews Fair B&B</a></td>
                                    <td>Reply</td>
                                </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main><!-- End #main -->
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
                                <ul class="sub-menu dropdown">
                                    <li><span><a href="{{route('hostNotification')}}">Notification</a></span></span>
                                    </li>
                                    <li><span><a href="{{route('chat')}}">Chat</a></span></span></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <div onclick="toggleSubMenu(this)">
                                    <span>Bookings</span> <i class="fa-solid fa-caret-right"></i>
                                </div>
                                <ul class="sub-menu">
                                    <li><span><a href="{{route('hostacceptedbooking')}}">Accepted</a></span></span>
                                    <li><span><a href="{{route('hostrejectedbooking')}}">Rejected</a></span></span>
                                    <li class="active"><span><a
                                                href="{{route('hostrefundedbooking')}}">Refunded</a></span></span>
                                </ul>

                            </li>
                            <li class="dropdown">
                                <div onclick="toggleSubMenu(this)">
                                    <span>My Listing</span> <i class="fa-solid fa-caret-right"></i>
                                </div>
                                <ul class="sub-menu" style="display:block;">
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
                            <h4>Create a New Listing</h4>
                        </div>
                        <div class="card-body">
                            <!--  Title of Listing  -->
                            <div class="row">
                                <div class="col">
                                    <h3>Title of Listing</h3>
                                </div>
                                <div class="col">
                                    <input type="radio">
                                    <label>Stay & Learn</label>
                                </div>
                                <div class="col">
                                    <input type="radio">
                                    <label>Stay For Event</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h3>Listing Name</h3>
                                </div>
                                <div class="col">
                                    <input type="text">
                                </div>
                                <div class="col">
                                    <input type="text">
                                </div>
                            </div>
                            <hr>
                            <!--  Maximum Guest Allowed  -->
                            <div class="item">
                                <h3>Language of Instruction</h3>
                                <div class="row">
                                    <div class="col loi">
                                        <span>
                                            <input type="radio">
                                            <label>English</label></span><span>
                                            <input type="radio">
                                            <label>French</label></span><span>
                                            <input type="radio">
                                            <label>German</label></span><span>
                                            <input type="radio">
                                            <label>Spanish</label></span><span>
                                            <input type="radio">
                                            <label>Turkish</label></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col loi">
                                        <span>
                                            <input type="radio">
                                            <label>Russian</label></span><span>
                                            <input type="radio">
                                            <label>Polish</label></span><span>
                                            <input type="radio">
                                            <label>Arabic</label></span><span>
                                            <input type="radio">
                                            <label>Dutch</label></span><span>
                                            <input type="radio">
                                            <label>Chinese</label></span>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <!--  Listing Property Type  -->
                            <div class="item">
                                <h3>What guest will learn (only for stay & learn)</h3>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" disabled placeholder="Location 1">
                                    </div>
                                    <div class="col">
                                        <input type="text" disabled placeholder="Location 2">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" disabled placeholder="Location 3">
                                    </div>
                                    <div class="col">
                                        <input type="text" disabled placeholder="Location 4">
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <h3>Learn Location (Where is the Learning Place? Select one)</h3>
                                <div class="row">
                                    <div class="col">
                                        <input type="radio">
                                        <label>B&B only</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio">
                                        <label>B&B and office</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio">
                                        <label>B&B and farm</label>
                                    </div>
                                    <div class="col">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="row">
                                        <div class="col">
                                            <input type="radio">
                                            <label>B&B and outdoor</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio">
                                            <label>B&B and in the workshop</label>
                                        </div>
                                        <div class="col">
                                        </div>
                                        <div class="col">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <h3>About the B&B Listing </h3>
                                        <textarea
                                            placeholder="Tell guests what this stay & learn / stay for Event"></textarea>


                                    </div>

                                    <div class="col">
                                        <h3>Listing photo & video</h3>
                                        <div class="details-block">
                                            <div class="d-flex align-items-center justify-content-between">
                                            </div>
                                            <div class="details-content">
                                                <div class="guest-block d-flex justify-content-between">
                                                    <div class="text-center">
                                                        <img src="assets/img/hotels/hotel-2.png">
                                                    </div>
                                                    <div class="text-center">
                                                        <img src="assets/img/hotels/hotel-3.png">
                                                    </div>
                                                    <div class="text-center">
                                                        <img src="assets/img/hotels/hotel-3.png">
                                                    </div>
                                                    <div class="text-center">
                                                        <!-- <img src="assets/img/hotels/hotel-3.png">
                                 -->
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h3>Location </h3>
                                        <div class="row">
                                            <div class="col">
                                                <select>
                                                    <option> Select Country </option>
                                                    <option> India </option>
                                                    <option> Australia </option>
                                                    <option> USA </option>

                                                </select>
                                            </div>
                                            <div class="col">
                                                <select>
                                                    <option> Select State </option>
                                                    <option> Gujarat </option>
                                                    <option> Maharastra </option>
                                                    <option> Rajasthan </option>

                                                </select>
                                            </div>
                                            <div class="col">
                                                <select>
                                                    <option> Select City </option>
                                                    <option> Mehsana </option>
                                                    <option> Ahmedabad </option>
                                                    <option> Surat </option>

                                                </select>
                                                <button>map</button>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col">
                                        <h3>Property Type</h3>
                                        <select>
                                            <option>Apartment</option>
                                            <option>Row House</option>
                                            <option>Bunglow</option>

                                        </select>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">
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
                                                <div class="guest-block d-flex justify-content-between">
                                                    <div class="text-center">
                                                        <img src="assets/img/hotels/hotel-2.png">
                                                        <p>1 Bedroom</p>
                                                    </div>
                                                    <div class="text-center">
                                                        <img src="assets/img/hotels/hotel-3.png">
                                                        <p>1 Drawing Room</p>
                                                    </div>
                                                    <div class="text-center">
                                                        <img src="assets/img/hotels/hotel-3.png">
                                                        <p>2 Bathrooms</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h3>Ideal Guest</h3>
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio">
                                                Students
                                            </div>
                                            <div class="col">
                                                <input type="radio">
                                                Tourists
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <input type="radio">
                                                Founders
                                            </div>
                                            <div class="col">
                                                <input type="radio">
                                                Employees
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <input type="radio">
                                                Family
                                            </div>
                                            <div class="col">
                                                <input type="radio">
                                                Gen Z
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <input type="radio">
                                                Digital Workers
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <input type="radio">
                                                Backpackers
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="item">
                                    <h3>What is included? (Select freebies you give guests)</h3>
                                    <div class="row">
                                        <div class="col loi">
                                            <span>
                                                <input type="radio">
                                                <label>Breakfast</label></span><span>
                                                <input type="radio">
                                                <label>Dinner</label></span><span>
                                                <input type="radio">
                                                <label>Snacks</label></span><span>
                                                <input type="radio">
                                                <label>City Tour</label></span><span>
                                                <input type="radio">
                                                <label>Airport pick-up/drop off</label></span>


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col loi">
                                            <span>
                                                <input type="radio">
                                                <label>Document Draft</label></span><span>
                                                <input type="radio">
                                                <label>Fre event tickets</label></span><span>
                                                <input type="radio">
                                                <label>Free parking tickets</label></span><span>
                                                <input type="radio">
                                                <label>Cycling</label></span><span>
                                                <input type="radio">
                                                <label>co-cook</label></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col loi">
                                            <span>
                                                <input type="radio">
                                                <label>City Walk</label></span><span>
                                                <input type="radio">
                                                <label>Free toiletries</label></span><span>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="details-block">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h3>Previous Videos (upload videos of Events & Tutorials) </h3>
                                    </div>
                                    <div class="details-content">
                                        <div class="guest-block d-flex justify-content-between">
                                            <div class="text-center">
                                                <img src="assets/img/hotels/hotel-2.png">
                                                <p>Title 1</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="assets/img/hotels/hotel-3.png">
                                                <p>Title 1</p>

                                            </div>
                                            <div class="text-center">
                                                <img src="assets/img/hotels/hotel-3.png">
                                                <p>Title 1</p>

                                            </div>
                                            <div class="text-center">
                                                <img src="assets/img/hotels/hotel-2.png">
                                                <p>Title 1</p>

                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn-primary">Add More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col">

                                        <div class="col">
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
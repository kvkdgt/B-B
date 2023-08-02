<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Status B&B</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="{{env('BASE_URL')}}/assets/img/logo1.png" rel="icon"> -->
    <link href="{{env('BASE_URL')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!-- Vendor CSS Files -->
    <link href="{{env('BASE_URL')}}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{env('BASE_URL')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{env('BASE_URL')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{env('BASE_URL')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{env('BASE_URL')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{env('BASE_URL')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{env('BASE_URL')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{env('BASE_URL')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Template Main CSS File -->
    <link href="{{env('BASE_URL')}}/assets/css/style.css" rel="stylesheet">

    <style>
    #header {
        padding: 0;
    }

    #header .logo img {
        max-height: 70px;
    }

    .listings .listing-item .sub-main .slider-content p {
        color: #000;
    }

    .listings .listing-item .sub-main .slider-content p i {
        margin-right: 7px;
        font-size: 16px;
    }

    #footer .copyright {
        font-weight: 600;
    }

    .search-block input {
        font-size: 16px;
        color: #353535;
        border: 1px solid #D9D9D9;
        border-radius: 25px;
        padding: 10px;
        height: auto;
    }

    .search-block .form-control:focus {
        box-shadow: none;
        border-color: #bee500;
    }

    .search-block {
        position: relative;
        flex: 0 0 70%;
    }

    #footer {
        padding: 0;
    }

    #footer .footer-top {
        background: #000;
    }

    #footer .footer-top .footer-links ul a,
    #footer .footer-top h4,
    #footer .footer-top .footer-links ul i {
        color: #fff;
    }

    .footer-info a {
        display: block;
        margin: -20px 0;
    }

    .footer-newsletter,
    .footer-newsletter h4 {
        text-align: center;
    }

    .footer-newsletter button {
        width: 100%;
        max-width: 70%;
        margin: auto;
    }

    #footer .copyright {
        padding: 15px 0;
    }

    .search-block span {
        position: absolute;
        top: 7px;
        right: 9px;
        background: #bee500;
        width: 68px;
        height: 30px;
        border-radius: 50px;
        text-align: center;
        line-height: 26px;
    }

    .search-block span i {
        display: flex;
        align-items: center;
        justify-content: center;
        line-height: 30px;
    }

    .search-block {
        position: relative;
        flex: 0 0 70%;
    }

    .navbar button.btn.btn-outline {
        border: 1px solid black;
        border-radius: 20px;
        margin-left: 20px;
        padding: 5px 25px;
        color: black;
        transition: all 0.5s ease;
        font-size: 16px;
        font-weight: 500;
    }

    .navbar button.btn.btn-outline:hover {
        background: #bfe506;
        color: #000;
        transition: all 0.5s ease;
    }

    .container {
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
    }

    .rate {
        width: 36%;
        float: left;
        height: 46px;
        padding: 0 10px;
    }

    .rate:not(:checked)>input {
        position: absolute;
        top: -9999px;
    }

    .rate:not(:checked)>label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 30px;
        color: #ccc;
    }

    .rate:not(:checked)>label:before {
        content: '★ ';
    }

    .rate>input:checked~label {
        color: #ffc700;
    }

    .rate:not(:checked)>label:hover,
    .rate:not(:checked)>label:hover~label {
        color: #deb217;
    }

    .rate>input:checked+label:hover,
    .rate>input:checked+label:hover~label,
    .rate>input:checked~label:hover,
    .rate>input:checked~label:hover~label,
    .rate>label:hover~input:checked~label {
        color: #c59b08;
    }

    .rating-value {
        clear: both;
        justify-content: space-between;
        width: 50%;
    }

    .footer-links i {
        font-size: 50px;
    }


    @media screen and (max-width:575px) {
        .rate {
            width: 50%;
        }
    }
    </style>

</head>

<body>

    <!-- ======= Header ======= -->
    <link href="{{env('BASE_URL')}}/assets/img/logo1.png" rel="icon">
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <a href="/" class="logo me-auto me-lg-0"><img src="{{env('BASE_URL')}}/assets/img/logo1.png" alt=""
                    class="img-fluid"><span style="font-size: 20px;">Status B&B</span></a>

            <div class="search-area">

                <div id="search-block" class="search-block">
                    <form action="">
                        <input type="search" placeholder="Search Location or Skills" class="form-control" />
                        <span>Search</span>
                    </form>
                </div>

            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <!-- <li><a href="reward-your-passion.html" class="nav-link">Reward your Passion </a></li> -->
                    <li class="dropdown"><a href="#"><span>English</span> <i class="fa-solid fa-angle-down"></i></a>
                        <ul>
                            <li><a href="#">English</a></li>
                            <li><a href="#">German</a></li>
                            <li><a href="#">French</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>USD</span> <i class="fa-solid fa-angle-down"></i></a>
                        <ul>
                            <li><a href="#">USD</a></li>
                            <li><a href="#">EUR</a></li>
                        </ul>
                    </li>

                    <button class="btn btn-outline" data-target="#loginModal" data-toggle="modal"
                        href="#loginModal">Login</button>
                    <button class="btn btn-outline" data-target="#signUpModal" data-toggle="modal"
                        href="#signUpModal">Signup</button>
                    <!-- <button class="btn btn-outline" data-target="#ratingModal" data-toggle="modal" href="#ratingModal">Add Rating</button> -->

                    <!-- <li class="dropdown">
                        <a href="#">
                            <span><img src="{{env('BASE_URL')}}/assets/img/avatar.png" style="border-radius: 50%;"
                                    alt="Profile"></span>
                        </a>
                        <ul>
                            <li><a data-target="#loginModal" data-toggle="modal" href="#loginModal">Login</a></li>
                            <li><a data-target="#signUpModal" data-toggle="modal" href="#signUpModal">Sign Up</a></li>
                            <li><a href="host-dashboard.html">Profile</a></li>
                            <li><a href="admin-login.html">Admin</a></li>
                        </ul>
                    </li> -->
                    <!--<li><button type="button" class="login-header-btn"  data-toggle="modal" data-target="#loginModal">Login</button></li>-->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <!--<a href="#about" class="login-header-btn scrollto">Login</a>-->

        </div>

        <!-- <div id="search-area-expanded" class="search-area-expanded" style="display: none;">

            <div class="d-flex justify-content-center align-items-center">
                <div class="search-content">
                    <div class="search-field d-grid border-right">
                        <label for="checkin">Anywhere</label>
                        <input type="text" class="" name="anywhere" placeholder="Enter Location">
                    </div>
                    <div class="search-field d-grid border-right">
                        <label for="checkin">Check in</label>
                        <input class="topbar-input" name="checkin" id="checkin" type="date" placeholder="Checkin Date">
                    </div>
                    <div class="search-field d-grid border-right">
                        <label for="checkout">Check Out</label>
                        <input class="topbar-input" name="checkout" id="checkout" type="date"
                            placeholder="Checkin Date">
                    </div>
                    <div class="search-field d-grid border-right">
                        <label for="checkin">Guest</label>
                        <select name="anywhere" placeholder="No of Guests">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <button class="btn btn-primary btn-serach-header"><i class="ri-search-line"></i> Search</button>
                </div>
            </div>


        </div> -->
    </header><!-- End Header -->

    @yield('content')
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                        <div class="footer-info">
                            <h3><a href="index.html" class="logo"><img src="{{env('BASE_URL')}}/assets/img/logo.png"
                                        alt="" style="width: 100% ; height: auto"></a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-newsletter">
                            <h4>Contact Us</h4>
                            <button class="btn btn-gray-outline" data-target="#contactFormModal" data-toggle="modal"
                                href="#contactFormModal">Click here to contact us</button>

                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 footer-links">
                        <!-- <h4></h4> -->
                        <ul>
                            <li><i style="margin-right: 7px;" class="fa-solid fa-angle-right"></i><a
                                    href="{{route ('about')}}">Terms</a></li>
                            <li><i style="margin-right: 7px;" class="fa-solid fa-angle-right"></i><a
                                    href="{{route ('safety')}}">Privacy Policy</a>
                            </li>
                            <li><i style="margin-right: 7px;" class="fa-solid fa-angle-right"></i><a
                                    href="{{route ('blogs')}}">Careers</a></li>
                        </ul>

                        <i class="fa-brands fa-stripe"></i>
                    </div>

                    <div class="col-lg-2 col-md-2 footer-links">
                        <!-- <h4>Our Services</h4> -->
                        <ul>
                            <li><i style="margin-right: 7px;" class="fa-solid fa-angle-right"></i><a
                                    href="{{route ('career')}}">About Us</a></li>
                            <li><i style="margin-right: 7px;" class="fa-solid fa-angle-right"></i><a
                                    href="{{route ('terms')}}">FAQ &amp;
                                    Conditions</a></li>
                            <li><i style="margin-right: 7px;" class="fa-solid fa-angle-right"></i><a
                                    href="privacy.html">Safety Tips</a></li>
                        </ul>

                        <i class="fa-brands fa-cc-paypal"></i>

                    </div>
                    <div class="col-lg-2 col-md-2 footer-links">
                        <!-- <h4>Our Services</h4> -->
                        <ul>
                            <li><i class="fa-brands fa-facebook"></i>&nbsp;<a href="{{route ('career')}}">Facebook</a>
                            </li>
                            <li><i class="fa-brands fa-twitter"></i> &nbsp;<a href="{{route ('terms')}}">Twitter</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="footer-info">
                            <h4>Lorem ipsum heading</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a
                                tincidunt odio. Mauris a quam sagittis metus euismod mollis vel ac mauris. Donec ac
                                tellus tincidunt, pellentesque leo quis, tempus mi. Phasellus lobortis mauris tempor
                                nulla accumsan, eu tincidunt odio suscipit.</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                All Rights Reserved &copy; - Status B&B by Hotelbuuk
            </div>
        </div>
    </footer><!-- End Footer -->
    <div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body form-modal">
                    <div class="header">
                        <h3 class="text-center">Booking Form</h3>
                        <p>Booking ID : 4957475-48</p>
                    </div>
                    <hr>
                    <h4>Stay and Learn Yoga</h4>
                    <h4>Feb 5 - 15 &nbsp;&nbsp;&nbsp;&nbsp;$300</h4>
                    <h4>Mumbai, India</h4>
                    <h4>2 Adult Guest (max)</h4>


                    <hr>
                    <div class="content m-5">
                        <form action="#" method="get">
                            <h4>1 Guest</h4>
                            <div class="d-grid">
                                <label>First Name</label>
                                <input type="text" placeholder="first name">
                            </div>
                            <div class="d-grid">
                                <label>Last Name</label>
                                <input type="text" placeholder="last name">

                                <!-- <span>Forgot Password?</span> -->
                            </div>
                            <div class="d-grid">
                                <label>Photo</label>
                                <input type="file" placeholder="first name">
                            </div>
                            <div class="d-grid">
                                <label>Gender</label>
                                <select>
                                    <option>Male</option>
                                    <option>Female</option>

                                </select>
                            </div>

                            <a href="" class="btn btn-primary w-30 p-3">Add 2nd Guest</a><br><br>
                            <a href="" class="btn btn-primary w-40 p-3">Confirm & pay with stripe</a>
                            <a href="" class="btn btn-primary w-40 p-3">Confirm & pay with paypal</a>

                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body form-modal">
                    <div class="header">
                        <h3 class="text-center">Login to Continue</h3>
                        <p>Please enter your details to login</p>
                    </div>
                    <div class="content m-5">
                        <form action="#" method="get">
                            <div class="d-grid">
                                <label>Email</label>
                                <input type="email" placeholder="johndoe@gmail.com">
                            </div>
                            <div class="d-grid">
                                <label>Password</label>
                                <input type="password" placeholder="*************">
                                <a class="btn btn-outline" data-target="#forgotPasswordModal" data-toggle="modal"
                                    href="#forgotPasswordModal" data-dismiss="modal">Forgot Password?</a>
                                <!-- <span>Forgot Password?</span> -->
                            </div>
                            <div class="form-check">
                                <input type="checkbox" value="" id="remeberMeCheckBox">
                                <label for="remeberMeCheckBox">
                                    Remember me
                                </label>
                            </div>
                            <a href="host-dashboard.html" class="btn btn-primary w-100 p-3">Login</a>
                        </form>
                    </div>

                    <div class="footer">
                        <p>or continue with</p>

                        <div class="social-login d-flex">
                            <div class="icon google">
                                <i class="bx bxl-google"></i>
                            </div>
                            <div class="icon facebook">
                                <i class="bx bxl-facebook"></i>
                            </div>
                            <div class="icon twitter">
                                <i class="bx bxl-twitter"></i>
                            </div>
                        </div>

                        <a data-target="#signUpModal" data-toggle="modal" href="#signUpModal">Dont have an account?
                            <span>Sign Up</span></a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-xl" id="ratingModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body form-modal">
                    <div class="header">
                        <h3 class="text-center">Add Rating</h3>
                    </div>
                    <div class="content m-5">
                        <form action="#" method="get">
                            <div class="row">
                                <div class="col">
                                    <div class="d-grid">

                                        <label>Listing Title</label>
                                        <input type="text" placeholder="Listing Title">
                                    </div>
                                </div>
                                <!-- <div class="col">
                                    <div class="d-grid">

                                        <label>offer</label>
                                        <input type="text" placeholder="offer">
                                    </div>
                                </div> -->
                            </div>
                            <div class="rating-content">
                                <!-- <table style="background-color:aliceblue">
                                    <tr>
                                        <td>No of Guests</td>
                                        <td>Total Nights Cost</td>
                                        <td>Cleaning Fee</td>
                                        <td>Other Fee</td>
                                        <td>Service Fee</td>
                                        <td>Total Amount</td>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>9 Nights * $300 = $2700</td>
                                        <td>$89</td>
                                        <td>$0</td>
                                        <td>$419</td>
                                        <td>$3171</td>

                                    </tr>
                                </table> -->
                                <h4>Stay and Learn yoga</h4>
                                <p>Stay and Learn yoga Stay and Learn yoga Stay and Learn yoga</p>
                                <img src="{{env('BASE_URL')}}/assets/img/avatar.png" alt="" width="50" height="50">
                                <hr>
                                <h4>Rate your experience</h4>
                                <div class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </div>
                                <div class="d-flex rating-value">
                                    <p>Lowest</p>
                                    <p>Highest</p>
                                </div>
                            </div>
                            <hr>
                            <h3>Write a short Review about your experience</h3>
                            <div class="d-grid">
                                <textarea placeholder="Enter Your Review"></textarea>
                            </div>

                            <a href="host-dashboard.html" class="btn btn-primary w-100 p-3">Add Rating</a>
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <!-- forgot password -->
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body form-modal">
                    <div class="header">
                        <h3 class="text-center">Forgot Password</h3>
                    </div>
                    <div class="content m-5">
                        <form action="#" method="get">
                            <div class="d-grid">
                                <label>Email</label>
                                <input type="email" placeholder="johndoe@gmail.com">
                            </div>


                            <a href="host-dashboard.html" class="btn btn-primary w-100 p-3">Send Link</a>
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <!-- email confirmation -->
    <div class="modal fade" id="verificationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body form-modal">
                    <div class="header">
                        <h3 class="text-center">Status B&B Verification</h3>
                        <p>We have sent you a verificaiton link on your email. please check your email and follow the
                            link on your email.</p>
                    </div>
                    <!-- <div class="content m-5">
                        <form action="#" method="get">
                            <div class="d-grid">
                                <label>Email</label>
                                <input type="email" placeholder="johndoe@gmail.com">
                            </div>
                            
                           
                            <a href="host-dashboard.html" class="btn btn-primary w-100 p-3">Send Link</a>
                        </form>
                    </div> -->
                    <center>
                        <a href="#" class="btn btn-primary">Resend Verification Link</a><br><br>
                        <a href="#" class="btn btn-danger">Logout</a>
                    </center>



                </div>
            </div>
        </div>
    </div>

    <!-- Sign Up Modal -->
    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body form-modal">
                    <div class="header">
                        <h3 class="text-center">Sign Up to Continue</h3>
                        <p>Please enter your details to sign up</p>
                    </div>
                    <div class="content m-5">
                        <form action="#" method="get">
                            <div class="d-grid">
                                <label>First Name</label>
                                <input type="text" placeholder="John">
                            </div>
                            <div class="d-grid">
                                <label>Last Name</label>
                                <input type="text" placeholder="Doe">
                            </div>
                            <div class="d-grid">
                                <label>Email</label>
                                <input type="email" placeholder="johndoe@gmail.com">
                            </div>
                            <div class="d-grid">
                                <label>Password</label>
                                <input type="password" placeholder="*************">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" value="" id="agreedTermsCheckBox">
                                <label for="agreedTermsCheckBox">
                                    I agreed to Terms &amp; Conditions.
                                </label>
                            </div>
                            <button data-target="#verificationModal" data-toggle="modal" data-dismiss="modal"
                                class="btn btn-primary w-100 p-3">Sign Up</button>

                        </form>
                    </div>

                    <div class="footer">
                        <p>or continue with</p>

                        <div class="social-login d-flex">
                            <div class="icon google">
                                <i class="bx bxl-google"></i>
                            </div>
                            <div class="icon facebook">
                                <i class="bx bxl-facebook"></i>
                            </div>
                            <div class="icon twitter">
                                <i class="bx bxl-twitter"></i>
                            </div>
                        </div>

                        <a href="#">Already have an account? <span>Log Up</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact Form Modal -->
    <div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body form-modal">
                    <div class="header">
                        <h3 class="text-center">Contact Us</h3>
                        <p>We'll get in touch</p>
                    </div>
                    <div class="content m-5">
                        <form action="#" method="get">
                            <div class="d-grid">
                                <label>First Name</label>
                                <input type="text" placeholder="John">
                            </div>
                            <div class="d-grid">
                                <label>Last Name</label>
                                <input type="text" placeholder="Doe">
                            </div>
                            <div class="d-grid">
                                <label>Email</label>
                                <input type="email" placeholder="johndoe@gmail.com">
                            </div>
                            <div class="d-grid">
                                <label>Country</label>
                                <select name="country">
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Åland Islands">Åland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                    </option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic
                                        of The</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
                                    </option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's
                                        Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former
                                        Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                    </option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                    </option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The
                                        South Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying
                                        Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                            <div class="d-grid">
                                <label>Message</label>
                                <textarea name="message" placeholder="Please type message here" rows="5"></textarea>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" value="" id="agreedTermsCheckBox">
                                <label for="agreedTermsCheckBox">
                                    I agreed to Terms &amp; Conditions.
                                </label>
                            </div>
                            <button class="btn btn-primary w-100 p-3">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Filters Modal -->
    <div class="modal fade" id="filtersModal" tabindex="-1" role="dialog" aria-labelledby="filtersModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="margin-left:  -120px !important;width: 1101px !important;">
                <div class="modal-body filters m-5">
                    <div class="header">
                        <h3>Filters</h3>
                    </div>
                    <div class="content">

                        <div class="row">
                            <!-- location -->
                            <div class="col-md-2 col-sm-6">
                                <h5>Location</h5>
                                <div class="form-check">
                                    <input type="radio" name="prices" id="germany" value="germany" checked>
                                    <label for="germany">
                                        Germany
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="prices" id="city1" value="city1">
                                    <label for="city1">
                                        France
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="prices" id="city2" value="city2">
                                    <label for="city2">
                                        Netherlands
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="prices" id="city2" value="city2">
                                    <label for="city2">
                                        Unite Kingdom
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="prices" id="city2" value="city2">
                                    <label for="city2">
                                        Ghana
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="prices" id="city2" value="city2">
                                    <label for="city2">
                                        Nigeria
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="prices" id="city2" value="city2">
                                    <label for="city2">
                                        Kenya
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="prices" id="city2" value="city2">
                                    <label for="city2">
                                        Canada
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" name="prices" id="city2" value="city2">
                                    <label for="city2">
                                        Austria
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" name="prices" id="city2" value="city2">
                                    <label for="city2">
                                        Switzerland
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" name="prices" id="city2" value="city2">
                                    <label for="city2">
                                        United States
                                    </label>
                                </div>


                            </div>

                            <!-- Prices -->
                            <div class="col-md-2 col-sm-6">
                                <h5>Prices</h5>
                                <div class="form-check">
                                    <input type="radio" name="prices" id="prices_100" value="100" checked>
                                    <label for="prices_100">
                                        €20 - €100
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="prices" id="prices_200" value="200">
                                    <label for="prices_200">
                                        €101 - €200
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="prices" id="prices_300" value="300">
                                    <label for="prices_300">
                                        €201 - €300
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="prices" id="prices_400" value="400">
                                    <label for="prices_400">
                                        €301 - €400
                                    </label>
                                </div>
                            </div>
                            <!-- Property Type -->
                            <div class="col-md-2 col-sm-6">
                                <h5>Property Type</h5>
                                <div class="form-check">
                                    <input type="radio" name="property_types" id="farm_houses" value="Farm House"
                                        checked>
                                    <label for="farm_houses">
                                        Farm House
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="property_types" id="hostel" value="Hostel">
                                    <label for="hostel">
                                        Hostel
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="property_types" id="apartment" value="Apartment">
                                    <label for="apartment">
                                        Apartment
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="property_types" id="private_houses"
                                        value="Private Houses">
                                    <label for="private_houses">
                                        Private Houses
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="property_types" id="flat" value="Flat">
                                    <label for="flat">
                                        Flat
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="property_types" id="boat_houses" value="Boat Houses">
                                    <label for="boat_houses">
                                        Boat Houses
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="property_types" id="cabins" value="Cabins">
                                    <label for="private_houses">
                                        Cabins
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="property_types" id="farm_houses" value="Farm House"
                                        checked>
                                    <label for="farm_houses">
                                        Villa
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="property_types" id="farm_houses" value="Farm House"
                                        checked>
                                    <label for="farm_houses">
                                        Duplex
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="property_types" id="farm_houses" value="Farm House"
                                        checked>
                                    <label for="farm_houses">
                                        Town house
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="property_types" id="farm_houses" value="Farm House"
                                        checked>
                                    <label for="farm_houses">
                                        Studio
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="property_types" id="farm_houses" value="Farm House"
                                        checked>
                                    <label for="farm_houses">
                                        Waterfront
                                    </label>
                                </div>
                            </div>
                            <!-- Month -->
                            <div class="col-md-2 col-sm-6">
                                <h5>Months</h5>
                                <div class="form-check">
                                    <input type="radio" name="months" id="january" value="January" checked>
                                    <label for="january">
                                        January
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="months" id="february" value="February">
                                    <label for="february">
                                        February
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="months" id="march" value="March">
                                    <label for="march">
                                        March
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="months" id="april" value="April">
                                    <label for="april">
                                        April
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="months" id="may" value="May">
                                    <label for="may">
                                        May
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="months" id="june" value="June">
                                    <label for="june">
                                        June
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="months" id="july" value="July">
                                    <label for="july">
                                        July
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="months" id="august" value="August">
                                    <label for="august">
                                        August
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="months" id="september" value="September">
                                    <label for="september">
                                        September
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="months" id="october" value="October">
                                    <label for="october">
                                        October
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="months" id="november" value="November">
                                    <label for="november">
                                        November
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="months" id="december" value="December">
                                    <label for="december">
                                        December
                                    </label>
                                </div>
                            </div>
                            <!-- no Guest -->
                            <div class="col-md-2 col-sm-6">
                                <h5>Number of Guests</h5>
                                <div class="form-check">
                                    <input type="radio" name="guests" id="guest1" value="1" checked>
                                    <label for="guest1">
                                        1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="guests" id="guest2" value="2">
                                    <label for="guest2">
                                        2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="guests" id="guest3" value="3">
                                    <label for="guest3">
                                        3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="guests" id="guest4" value="4">
                                    <label for="guest4">
                                        4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="guests" id="guest4" value="4">
                                    <label for="guest4">
                                        5
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="guests" id="guest4" value="4">
                                    <label for="guest4">
                                        6
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="guests" id="guest4" value="4">
                                    <label for="guest4">
                                        7
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="guests" id="guest4" value="4">
                                    <label for="guest4">
                                        8
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="guests" id="guest4" value="4">
                                    <label for="guest4">
                                        9
                                    </label>
                                </div>
                                <!-- Add more options for higher numbers of guests if needed -->
                            </div>

                            <!-- Roommate Facilities -->
                            <div class="col-md-2 col-sm-6">
                                <h5>What's Included </h5>
                                <div class="form-check">
                                    <input type="radio" name="roommatefacilities" id="wifi" value="wifi" checked>
                                    <label for="wifi">
                                        WiFi
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="roommatefacilities" id="Games" value="Games">
                                    <label for="Games">
                                        Games
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="roommatefacilities" id="singlebed" value="1 single bed">
                                    <label for="singlebed">
                                        1 single bed
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="roommatefacilities" id="EquippedKitchen"
                                        value="Equipped Kitchen">
                                    <label for="EquippedKitchen">
                                        Equipped Kitchen
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="roommatefacilities" id="ParkingSpace"
                                        value="Parking Space">
                                    <label for="ParkingSpace">
                                        Parking Space
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="roommatefacilities" id="EVCharger" value="EV Charger">
                                    <label for="EVCharger">
                                        EV Charger
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="roommatefacilities" id="Heatedroom" value="Heated room">
                                    <label for="Heatedroom">
                                        Heated room
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="roommatefacilities" id="washroom" value=" washroom">
                                    <label for="washroom">
                                        washroom
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="roommatefacilities" id="washroom" value=" washroom">
                                    <label for="washroom">
                                        City Tour
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="roommatefacilities" id="washroom" value=" washroom">
                                    <label for="washroom">
                                        Cycling
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="roommatefacilities" id="washroom" value=" washroom">
                                    <label for="washroom">
                                        Breakfast
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="roommatefacilities" id="washroom" value=" washroom">
                                    <label for="washroom">
                                        Dinner
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="roommatefacilities" id="washroom" value=" washroom">
                                    <label for="washroom">
                                        Pool
                                    </label>
                                </div>

                            </div>

                        </div>

                        <div style="display: flex;justify-content:end;">
                            <button class="btn btn-primary-outline">Clear</button>
                            <button class="btn btn-primary">Apply</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="{{env('BASE_URL')}}/assets/js/jquery.min.js"></script>
    <script src="{{env('BASE_URL')}}/assets/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <!-- Vendor JS Files -->
    <script src="{{env('BASE_URL')}}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{env('BASE_URL')}}/assets/vendor/aos/aos.js"></script>
    <script src="{{env('BASE_URL')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{env('BASE_URL')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{env('BASE_URL')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{env('BASE_URL')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{env('BASE_URL')}}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->

    <script>
    //    Scroll of Icons Script STARTS HERE    
    const rightButtons = Array.from(document.getElementsByClassName('slideRight'));
    const leftButtons = Array.from(document.getElementsByClassName('slideLeft'));
    const containers = Array.from(document.getElementsByClassName('categories'));



    let index = 0;
    for (const rightButton of rightButtons) {
        const container = containers[index];
        rightButton.addEventListener("click", function() {
            container.scrollLeft += 150;
        });
        index++;
    }

    index = 0;
    for (const leftButton of leftButtons) {
        const container = containers[index];
        leftButton.addEventListener("click", function() {
            container.scrollLeft -= 150;
        });
        index++;
    }

    //    Scroll of Icons Script STARTS ENDS


    document.getElementById('search-options')
        .addEventListener('click', function(event) {
            $("#search-area-expanded").css("display", "block");
            $("#search-options").css("display", "none");
            $("#search-close").css("display", "flex");
        });
    document.getElementById('search-close')
        .addEventListener('click', function(event) {
            $("#search-close").css("display", "none");
            $("#search-options").css("display", "block");
            $("#search-area-expanded").css("display", "none");
        });

    $('#checkin').datepicker({
        minDate: new Date()
    });
    $('#checkout').datepicker({
        minDate: new Date((new Date()).valueOf() + 1000 * 3600 * 24)
    });
    </script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
        defer></script>

</body>
<script src="{{env('BASE_URL')}}/assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script src="{{env('BASE_URL')}}/assets/js/admin-dashboard.js"></script>
<script>
$(document).ready(function() {
    $('#summernote').summernote({
        height: 200,
    });
});

$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>

</html>
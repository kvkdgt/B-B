@extends('hometheme')
@section('content')
<main id="main">

    <!-- ======= Icon Section ======= -->
    <section class="hero d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="categories d-flex overflow-auto" data-aos="zoom-in" data-aos-delay="250">
                <div class="slideLeft d-flex align-items-center justify-content-center">
                    <i class='bx bx-left-arrow-alt'></i>
                </div>
                <div class="icon-box">
                    <img src="{{env('BASE_URL')}}/assets/img/icons/renewable-home.png" alt="Renewable Home">
                    <h3><a href="">Renewable Home</a></h3>
                </div>
                <div class="icon-box">
                    <img src="{{env('BASE_URL')}}/assets/img/icons/smart-city.png" alt="Smart City">
                    <h3><a href="">Smart City</a></h3>
                </div>
                <div class="icon-box">
                    <img src="{{env('BASE_URL')}}/assets/img/icons/green-home.png" alt="Green Home">
                    <h3><a href="">Green Home</a></h3>
                </div>
                <div class="icon-box">
                    <img src="{{env('BASE_URL')}}/assets/img/icons/home-office.png" alt="Home Office">
                    <h3><a href="">Home Office</a></h3>
                </div>
                <div class="icon-box">
                    <img src="{{env('BASE_URL')}}/assets/img/icons/hostel.png" alt="Hostel">
                    <h3><a href="">Hostel</a></h3>
                </div>
                <div class="icon-box">
                    <img src="{{env('BASE_URL')}}/assets/img/icons/lakefront.png" alt="Lakefront">
                    <h3><a href="">Lakefront</a></h3>
                </div>
                <div class="icon-box">
                    <img src="{{env('BASE_URL')}}/assets/img/icons/vegan.png" alt="Vegan">
                    <h3><a href="">Vegan</a></h3>
                </div>
                <div class="icon-box">
                    <img src="{{env('BASE_URL')}}/assets/img/icons/sushi.png" alt="Sushi">
                    <h3><a href="">Sushi</a></h3>
                </div>
                <div class="icon-box">
                    <img src="{{env('BASE_URL')}}/assets/img/icons/home-tutor.png" alt="Home Tutor">
                    <h3><a href="">Home Tutor</a></h3>
                </div>
                <div class="icon-box">
                    <img src="{{env('BASE_URL')}}/assets/img/icons/farm-house.png" alt="Farm House">
                    <h3><a href="">Farm House</a></h3>
                </div>
                <div class="icon-box">
                    <img src="{{env('BASE_URL')}}/assets/img/icons/hotel.png" alt="Hotel">
                    <h3><a href="">Hotel</a></h3>
                </div>
                <div class="icon-box">
                    <img src="{{env('BASE_URL')}}/assets/img/icons/country-home.png" alt="Country Home">
                    <h3><a href="">Country Home</a></h3>
                </div>
                <div class="icon-box">
                    <img src="{{env('BASE_URL')}}/assets/img/icons/cabin-house.png" alt="Cabin House">
                    <h3><a href="">Cabin House</a></h3>
                </div>
                <div class="icon-box">
                    <img src="{{env('BASE_URL')}}/assets/img/icons/camper.png" alt="Camper">
                    <h3><a href="">Camper</a></h3>
                </div>
                <div class="icon-box">
                    <img src="{{env('BASE_URL')}}/assets/img/icons/private-home.png" alt="Private Home">
                    <h3><a href="">Private Home</a></h3>
                </div>
                <div class="icon-box">
                    <img src="{{env('BASE_URL')}}/assets/img/icons/student.png" alt="Student">
                    <h3><a href="">Student</a></h3>
                </div>
                <div class="icon-box">
                    <img src="{{env('BASE_URL')}}/assets/img/icons/team.png" alt="Team">
                    <h3><a href="">Team</a></h3>
                </div>
                <div class="icon-box">
                    <img src="{{env('BASE_URL')}}/assets/img/icons/cowork.png" alt="Cowork">
                    <h3><a href="">Cowork</a></h3>
                </div>
                <div class="icon-box">
                    <img src="{{env('BASE_URL')}}/assets/img/icons/private.png" alt="Private">
                    <h3><a href="">Private</a></h3>
                </div>
                <div class="slideRight d-flex align-items-center justify-content-center">
                    <i class='bx bx-right-arrow-alt'></i>
                </div>
            </div>

        </div>
    </section><!-- End Hero -->

    <!-- popular listings start -->

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#tab1">Tab 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab2">Tab 2</a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab1">
            <section id="listings" class="listings">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="mb-4 d-flex align-items-center justify-content-between">
                            <div class="heading">
                                <h4>Most Popular Hosts Tutors</h4>
                                <p>book your next stay with amazing host tutors.</p>
                            </div>

                            <div class="icons">
                                <a href="map.html" class="btn btn-black-outline"><i class="bx bx-map"></i>
                                    <span>Listing/Map</span></a>
                                <a href="#filtersModal" class="btn btn-black-outline" data-target="#filtersModal"
                                    data-toggle="modal"><i class="bx bx-filter"></i> <span>Filters</span></a>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <a href="detail.html">Stay and Learn Yoga </a>
                                        <div class="d-flex justify-content-between">
                                            <p>Ashtanga Yoga</p>
                                            <p>
                                                <span>4.3</span> 7 Ratings
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>$200 Per Night</p>
                                            <p> <i class="fa fa-map-marker"></i> Paris , France</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                                <div class="m-2">
                                                    <h6 class="m-0">Abdul S</h6>
                                                    <p class="m-0">Yoga Trainer</p>
                                                </div>
                                            </div>

                                            <a href="chat.html">Chat Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <a href="detail.html">Stay and Learn Yoga </a>
                                        <div class="d-flex justify-content-between">
                                            <p>Ashtanga Yoga</p>
                                            <p>
                                                <span>4.3</span> 7 Ratings
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>$200 Per Night</p>
                                            <p> <i class="fa fa-map-marker"></i> Paris , France</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                                <div class="m-2">
                                                    <h6 class="m-0">Abdul S</h6>
                                                    <p class="m-0">Yoga Trainer</p>
                                                </div>
                                            </div>

                                            <a href="chat.html">Chat Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <a href="detail.html">Stay and Learn Yoga </a>
                                        <div class="d-flex justify-content-between">
                                            <p>Ashtanga Yoga</p>
                                            <p>
                                                <span>4.3</span> 7 Ratings
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>$200 Per Night</p>
                                            <p> <i class="fa fa-map-marker"></i> Paris , France</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                                <div class="m-2">
                                                    <h6 class="m-0">Abdul S</h6>
                                                    <p class="m-0">Yoga Trainer</p>
                                                </div>
                                            </div>

                                            <a href="chat.html">Chat Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <a href="detail.html">Foodie Guest</a>
                                        <div class="d-flex justify-content-between">
                                            <p>Chines Cuisine</p>
                                            <p>
                                                <span>4.3</span> 7 Ratings
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>$200 Per Night</p>
                                            <p> <i class="fa fa-map-marker"></i> Paris , France</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                                <div class="m-2">
                                                    <h6 class="m-0">Abdul S</h6>
                                                    <p class="m-0">Yoga Trainer</p>
                                                </div>
                                            </div>

                                            <a href="chat.html">Chat Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <a href="detail.html">Stay and Learn Yoga </a>
                                        <div class="d-flex justify-content-between">
                                            <p>Ashtanga Yoga</p>
                                            <p>
                                                <span>4.3</span> 7 Ratings
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>$200 Per Night</p>
                                            <p> <i class="fa fa-map-marker"></i> Paris , France</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                                <div class="m-2">
                                                    <h6 class="m-0">Abdul S</h6>
                                                    <p class="m-0">Yoga Trainer</p>
                                                </div>
                                            </div>

                                            <a href="chat.html">Chat Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <a href="detail.html">Stay and Learn Yoga </a>
                                        <div class="d-flex justify-content-between">
                                            <p>Ashtanga Yoga</p>
                                            <p>
                                                <span>4.3</span> 7 Ratings
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>$200 Per Night</p>
                                            <p> <i class="fa fa-map-marker"></i> Paris , France</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                                <div class="m-2">
                                                    <h6 class="m-0">Abdul S</h6>
                                                    <p class="m-0">Yoga Trainer</p>
                                                </div>
                                            </div>

                                            <a href="chat.html">Chat Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <a href="detail.html">Foodie Guest</a>
                                        <div class="d-flex justify-content-between">
                                            <p>Chines Cuisine</p>
                                            <p>
                                                <span>4.3</span> 7 Ratings
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>$100 Per Night</p>
                                            <p> <i class="fa fa-map-marker"></i> Paris , France</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                                <div class="m-2">
                                                    <h6 class="m-0">Abdul S</h6>
                                                    <p class="m-0">Yoga Trainer</p>
                                                </div>
                                            </div>

                                            <a href="chat.html">Chat Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <a href="detail.html">Stay and Learn Yoga </a>
                                        <div class="d-flex justify-content-between">
                                            <p>Ashtanga Yoga</p>
                                            <p>
                                                <span>4.3</span> 7 Ratings
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>$200 Per Night</p>
                                            <p> <i class="fa fa-map-marker"></i> Paris , France</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                                <div class="m-2">
                                                    <h6 class="m-0">Abdul S</h6>
                                                    <p class="m-0">Yoga Trainer</p>
                                                </div>
                                            </div>

                                            <a href="chat.html">Chat Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <a href="detail.html">Stay and Learn Yoga </a>
                                        <div class="d-flex justify-content-between">
                                            <p>Ashtanga Yoga</p>
                                            <p>
                                                <span>4.3</span> 7 Ratings
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>$200 Per Night</p>
                                            <p> <i class="fa fa-map-marker"></i> Paris , France</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                                <div class="m-2">
                                                    <h6 class="m-0">Abdul S</h6>
                                                    <p class="m-0">Yoga Trainer</p>
                                                </div>
                                            </div>

                                            <a href="chat.html">Chat Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <a href="detail.html">Stay and Learn Yoga </a>
                                        <div class="d-flex justify-content-between">
                                            <p>Ashtanga Yoga</p>
                                            <p>
                                                <span>4.3</span> 7 Ratings
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>$200 Per Night</p>
                                            <p> <i class="fa fa-map-marker"></i> Paris , France</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                                <div class="m-2">
                                                    <h6 class="m-0">Abdul S</h6>
                                                    <p class="m-0">Yoga Trainer</p>
                                                </div>
                                            </div>

                                            <a href="chat.html">Chat Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <a href="detail.html">Stay and Learn Yoga </a>
                                        <div class="d-flex justify-content-between">
                                            <p>Ashtanga Yoga</p>
                                            <p>
                                                <span>4.3</span> 7 Ratings
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>$200 Per Night</p>
                                            <p> <i class="fa fa-map-marker"></i> Paris , France</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                                <div class="m-2">
                                                    <h6 class="m-0">Abdul S</h6>
                                                    <p class="m-0">Yoga Trainer</p>
                                                </div>
                                            </div>

                                            <a href="chat.html">Chat Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <a href="detail.html">Stay and Learn Yoga </a>
                                        <div class="d-flex justify-content-between">
                                            <p>Ashtanga Yoga</p>
                                            <p>
                                                <span>4.3</span> 7 Ratings
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>$200 Per Night</p>
                                            <p> <i class="fa fa-map-marker"></i> Paris , France</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                                <div class="m-2">
                                                    <h6 class="m-0">Abdul S</h6>
                                                    <p class="m-0">Yoga Trainer</p>
                                                </div>
                                            </div>

                                            <a href="chat.html">Chat Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <a href="detail.html">Stay and Learn Yoga </a>
                                        <div class="d-flex justify-content-between">
                                            <p>Ashtanga Yoga</p>
                                            <p>
                                                <span>4.3</span> 7 Ratings
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>$200 Per Night</p>
                                            <p> <i class="fa fa-map-marker"></i> Paris , France</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                                <div class="m-2">
                                                    <h6 class="m-0">Abdul S</h6>
                                                    <p class="m-0">Yoga Trainer</p>
                                                </div>
                                            </div>

                                            <a href="chat.html">Chat Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <a href="detail.html">Stay and Learn Yoga </a>
                                        <div class="d-flex justify-content-between">
                                            <p>Ashtanga Yoga</p>
                                            <p>
                                                <span>4.3</span> 7 Ratings
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>$200 Per Night</p>
                                            <p> <i class="fa fa-map-marker"></i> Paris , France</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                                <div class="m-2">
                                                    <h6 class="m-0">Abdul S</h6>
                                                    <p class="m-0">Yoga Trainer</p>
                                                </div>
                                            </div>

                                            <a href="chat.html">Chat Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <a href="detail.html">Stay and Learn Yoga </a>
                                        <div class="d-flex justify-content-between">
                                            <p>Ashtanga Yoga</p>
                                            <p>
                                                <span>4.3</span> 7 Ratings
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>$200 Per Night</p>
                                            <p> <i class="fa fa-map-marker"></i> Paris , France</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                                <div class="m-2">
                                                    <h6 class="m-0">Abdul S</h6>
                                                    <p class="m-0">Yoga Trainer</p>
                                                </div>
                                            </div>

                                            <a href="chat.html">Chat Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <a href="detail.html">Stay and Learn Yoga </a>
                                        <div class="d-flex justify-content-between">
                                            <p>Ashtanga Yoga</p>
                                            <p>
                                                <span>4.3</span> 7 Ratings
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>$200 Per Night</p>
                                            <p> <i class="fa fa-map-marker"></i> Paris , France</p>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex">
                                                <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                                <div class="m-2">
                                                    <h6 class="m-0">Abdul S</h6>
                                                    <p class="m-0">Yoga Trainer</p>
                                                </div>
                                            </div>

                                            <a href="chat.html">Chat Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="tab2">
            <h2>Tab 2 Content</h2>
            <p>This is the content of Tab 2.</p>
        </div>

    </div>


</main><!-- End #main -->
@endsection
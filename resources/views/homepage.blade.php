@extends('hometheme')
@section('content')
<style>
.listings .icons a:hover {
    color: #000;
}

.icons a {
    font-weight: 700;
}

.text-last {
    text-align: right;
}

.chat-button {
    text-align: center;
}

.chat-button a:hover {
    background: transparent !important;
    color: #73cf42 !important;
}

.sub-main {
    position: relative;
}

.user-img-top {
    position: absolute;
    top: 10px;
    left: 10px;
}

.user-img-top img {
    width: 50px;
    height: 50px;
    border: 2px solid #bee500;
    border-radius: 50%;
}

.slider-content svg {
    fill: #27a5f3;
    padding-left: 10px;
}

.load-more-block {
    text-align: center;
    margin-bottom: 30px;
}

.load-more-block button.load-btn {
    background: transparent;
    border: 1px solid #1da1f2;
    padding: 7px 30px;
    border-radius: 20px;
    color: #1da1f2;
    transition: all 0.5s ease;
}

.load-more-block button.load-btn:hover {
    background: #1da1f2;
    color: #fff;
    transition: all 0.5s ease;
}

.categories {
    width: 95%;
    margin: auto;
}

.slideLeft {
    width: 25px;
    height: 25px;
    line-height: 25px;
    background: rgba(0, 0, 0, 0.3);
    border-radius: 50%;
    position: absolute;
    top: 15px;
    left: 10px;
    cursor: pointer;
}

.slideRight {
    width: 25px;
    height: 25px;
    line-height: 25px;
    background: rgba(0, 0, 0, 0.3);
    border-radius: 50%;
    position: absolute;
    top: 15px;
    right: 10px;
    cursor: pointer;
}

.hero .icon-box {
    padding: 0;
}

.text-red {
    color: red;
}

.text-blue {
    color: blue;
}

.text-green {
    color: green;
}

.listings .listing-item .sub-main .slider-content a.text-red,
.listings .icons a.text-red:hover {
    color: red;
}

.listings .listing-item .sub-main .slider-content a.text-green,
.listings .icons a.text-green:hover {
    color: green
}

.listings .listing-item .sub-main .slider-content a.text-blue,
.listings .icons a.text-blue:hover {
    color: blue;
}

.slider-content svg {
    fill: #27a5f3;
    padding-left: 0;
    font-size: 22px;
}

@media screen and (max-width: 768px) {
    .search-area {
        width: 70%;
    }
}
</style>
<main id="main">

    <!-- ======= Icon Section ======= -->
    <section class="hero">
        <div class="container" data-aos="fade-up">
            <div class="slideLeft">
                <i class="fa-solid fa-arrow-left"></i>
            </div>
            <div class="categories d-flex overflow-auto" data-aos="zoom-in" data-aos-delay="250">
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">C++</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">Python</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">PHP</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">UI/UX Design</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">C++</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">Python</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">PHP</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">UI/UX Design</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">C++</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">Python</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">PHP</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">UI/UX Design</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">C++</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">Python</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">PHP</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">UI/UX Design</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">C++</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">Python</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">PHP</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">UI/UX Design</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">C++</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">Python</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">PHP</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">UI/UX Design</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">C++</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">Python</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">PHP</a></button>
                </div>
                <div class="icon-box">
                    <button class="btn btn-blue-outline"><a href="">UI/UX Design</a></button>
                </div>

            </div>
            <div class="slideRight">
                <i class="fa-solid fa-arrow-right"></i>
            </div>

        </div>
    </section><!-- End Hero -->

    <!-- popular listings start -->
    <div class="container text-last" data-aos="fade-up">


        <!-- <a href="{{route('map')}}" class="btn btn-black-outline"><i class="bx bx-map"></i>
            <span>What You Want to Learn?</span></a>
        <a href="{{route('map')}}" class="btn btn-black-outline"><i class="bx bx-map"></i>
            <span>Country/State</span></a>
        <a href="{{route('map')}}" class="btn btn-black-outline"><i class="bx bx-map"></i>
            <span>Month/Year</span></a> -->
        <a href="#filtersModal" class="btn btn-black-outline" data-target="#filtersModal" data-toggle="modal"><i
                class="bx bx-filter"></i> <span>Filters</span></a>

        <a href="#" class="btn btn-black-outline">Request</a>
    </div>

    <div class="tab-content clearfix">
        <div class="tab-pane active" id="tab1">
            <section id="listings" class="listings">
                <div class="container" data-aos="fade-up">
                    <div class="mb-4 d-flex align-items-center justify-content-between">
                        <div class="icons">
                            <a href="#tab1" data-toggle="tab" class="text-green"
                                style="border-bottom: 2px solid #bfe506; margin-right: 20px; padding-bottom: 7px">Stay &
                                Learn</a>
                            <a href="#tab2" class="text-red" data-toggle="tab" style="margin-right: 20px;">Stay for
                                event</a>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="{{route('detail')}}" class="text-green">Stay and Learn </a>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 24 24" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path
                                                    d="M23 12l-2.44-2.79.34-3.69-3.61-.82-1.89-3.2L12 2.96 8.6 1.5 6.71 4.69 3.1 5.5l.34 3.7L1 12l2.44 2.79-.34 3.7 3.61.82L8.6 22.5l3.4-1.47 3.4 1.46 1.89-3.19 3.61-.82-.34-3.69L23 12zm-12.91 4.72l-3.8-3.81 1.48-1.48 2.32 2.33 5.85-5.87 1.48 1.48-7.33 7.35z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="inner-content">
                                            <p>Python (Intro)</p>
                                            <p>Paris, France | 10km away</p>
                                            <p> Dec 20 - Dec 28, 2023</p>
                                            <p>150 | 2 Adult Guests</p>
                                            <p><b>428 Reviews</b></p>
                                        </div>
                                    </div>
                                    <!-- <div class="footer chat-button">
                                        <a href="{{route('chat')}}">Chat Now</a>
                                    </div> -->
                                    <div class="user-img-top">
                                        <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="{{route('detail')}}" class="text-green">Stay and Learn </a>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 24 24" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path
                                                    d="M23 12l-2.44-2.79.34-3.69-3.61-.82-1.89-3.2L12 2.96 8.6 1.5 6.71 4.69 3.1 5.5l.34 3.7L1 12l2.44 2.79-.34 3.7 3.61.82L8.6 22.5l3.4-1.47 3.4 1.46 1.89-3.19 3.61-.82-.34-3.69L23 12zm-12.91 4.72l-3.8-3.81 1.48-1.48 2.32 2.33 5.85-5.87 1.48 1.48-7.33 7.35z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="inner-content">
                                            <p>Python (Intro)</p>
                                            <p>Paris, France | 10km away</p>
                                            <p> Dec 20 - Dec 28, 2023</p>
                                            <p>150 | 2 Adult Guests</p>
                                            <p><b>428 Reviews</b></p>
                                        </div>
                                    </div>
                                    <!-- <div class="footer chat-button">
                                        <a href="{{route('chat')}}">Chat Now</a>
                                    </div> -->
                                    <div class="user-img-top">
                                        <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>

                                    </div>

                                    <div class="slider-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="{{route('detail')}}" class="text-green">Stay and Learn </a>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 24 24" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path
                                                    d="M23 12l-2.44-2.79.34-3.69-3.61-.82-1.89-3.2L12 2.96 8.6 1.5 6.71 4.69 3.1 5.5l.34 3.7L1 12l2.44 2.79-.34 3.7 3.61.82L8.6 22.5l3.4-1.47 3.4 1.46 1.89-3.19 3.61-.82-.34-3.69L23 12zm-12.91 4.72l-3.8-3.81 1.48-1.48 2.32 2.33 5.85-5.87 1.48 1.48-7.33 7.35z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="inner-content">
                                            <p>Python (Intro)</p>
                                            <p>Paris, France | 10km away</p>
                                            <p> Dec 20 - Dec 28, 2023</p>
                                            <p>150 | 2 Adult Guests</p>
                                            <p><b>428 Reviews</b></p>
                                        </div>
                                    </div>
                                    <!-- <div class="footer chat-button">
                                        <a href="{{route('chat')}}">Chat Now</a>
                                    </div> -->
                                    <div class="user-img-top">
                                        <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>

                                    </div>

                                    <div class="slider-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="{{route('detail')}}" class="text-green">Stay and Learn </a>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 24 24" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path
                                                    d="M23 12l-2.44-2.79.34-3.69-3.61-.82-1.89-3.2L12 2.96 8.6 1.5 6.71 4.69 3.1 5.5l.34 3.7L1 12l2.44 2.79-.34 3.7 3.61.82L8.6 22.5l3.4-1.47 3.4 1.46 1.89-3.19 3.61-.82-.34-3.69L23 12zm-12.91 4.72l-3.8-3.81 1.48-1.48 2.32 2.33 5.85-5.87 1.48 1.48-7.33 7.35z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="inner-content">
                                            <p>Python (Intro)</p>
                                            <p>Paris, France | 10km away</p>
                                            <p> Dec 20 - Dec 28, 2023</p>
                                            <p>150 | 2 Adult Guests</p>
                                            <p><b>428 Reviews</b></p>
                                        </div>
                                    </div>
                                    <!-- <div class="footer chat-button">
                                        <a href="{{route('chat')}}">Chat Now</a>
                                    </div> -->
                                    <div class="user-img-top">
                                        <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="load-more-block">
                <button type="button" class="load-btn">Load More</button>
            </div>
        </div>
        <div class="tab-pane" id="tab2">
            <section id="listings" class="listings">
                <div class="container" data-aos="fade-up">
                    <div class="mb-4 d-flex align-items-center justify-content-between">
                        <div class="icons">
                            <a href="#tab1" class="text-green" data-toggle="tab" style="margin-right: 20px;">Stay &
                                Learn</a>
                            <a href="#tab2" class="text-red" data-toggle="tab"
                                style="border-bottom: 2px solid #bfe506; margin-right: 20px; padding-bottom: 7px">Stay
                                for event</a>
<<<<<<< HEAD
                            <a href="#tab3" class="text-blue" data-toggle="tab" style="margin-right: 20px;">Stay for
                                Teach</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="{{route('detail')}}" class="text-red">Stay for Event</a>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M23 12l-2.44-2.79.34-3.69-3.61-.82-1.89-3.2L12 2.96 8.6 1.5 6.71 4.69 3.1 5.5l.34 3.7L1 12l2.44 2.79-.34 3.7 3.61.82L8.6 22.5l3.4-1.47 3.4 1.46 1.89-3.19 3.61-.82-.34-3.69L23 12zm-12.91 4.72l-3.8-3.81 1.48-1.48 2.32 2.33 5.85-5.87 1.48 1.48-7.33 7.35z"></path></svg>
                                        </div>
                                        <div class="inner-content">
                                            <p>Python (Intro)</p>
                                            <p>Paris, France | 10km away</p>
                                            <p> Dec 20 - Dec 28, 2023</p>
                                            <p>150 | 2 Adult Guests</p>
                                            <p><b>428 Reviews</b></p>
                                        </div>
                                    </div>
                                    <!-- <div class="footer chat-button">
                                        <a href="{{route('chat')}}">Chat Now</a>
                                    </div> -->
                                    <div class="user-img-top">
                                        <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
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
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="{{route('detail')}}" class="text-red">Stay for Event</a>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M23 12l-2.44-2.79.34-3.69-3.61-.82-1.89-3.2L12 2.96 8.6 1.5 6.71 4.69 3.1 5.5l.34 3.7L1 12l2.44 2.79-.34 3.7 3.61.82L8.6 22.5l3.4-1.47 3.4 1.46 1.89-3.19 3.61-.82-.34-3.69L23 12zm-12.91 4.72l-3.8-3.81 1.48-1.48 2.32 2.33 5.85-5.87 1.48 1.48-7.33 7.35z"></path></svg>
                                        </div>
                                        <div class="inner-content">
                                            <p>Python (Intro)</p>
                                            <p>Paris, France | 10km away</p>
                                            <p> Dec 20 - Dec 28, 2023</p>
                                            <p>150 | 2 Adult Guests</p>
                                            <p><b>428 Reviews</b></p>
                                        </div>
                                    </div>
                                    <!-- <div class="footer chat-button">
                                        <a href="{{route('chat')}}">Chat Now</a>
                                    </div> -->
                                    <div class="user-img-top">
                                        <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
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
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="{{route('detail')}}" class="text-red">Stay for Event</a>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M23 12l-2.44-2.79.34-3.69-3.61-.82-1.89-3.2L12 2.96 8.6 1.5 6.71 4.69 3.1 5.5l.34 3.7L1 12l2.44 2.79-.34 3.7 3.61.82L8.6 22.5l3.4-1.47 3.4 1.46 1.89-3.19 3.61-.82-.34-3.69L23 12zm-12.91 4.72l-3.8-3.81 1.48-1.48 2.32 2.33 5.85-5.87 1.48 1.48-7.33 7.35z"></path></svg>
                                        </div>
                                        <div class="inner-content">
                                            <p>Python (Intro)</p>
                                            <p>Paris, France | 10km away</p>
                                            <p> Dec 20 - Dec 28, 2023</p>
                                            <p>150 | 2 Adult Guests</p>
                                            <p><b>428 Reviews</b></p>
                                        </div>
                                    </div>
                                    <!-- <div class="footer chat-button">
                                        <a href="{{route('chat')}}">Chat Now</a>
                                    </div> -->
                                    <div class="user-img-top">
                                        <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
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
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="{{route('detail')}}" class="text-red">Stay for Event</a>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M23 12l-2.44-2.79.34-3.69-3.61-.82-1.89-3.2L12 2.96 8.6 1.5 6.71 4.69 3.1 5.5l.34 3.7L1 12l2.44 2.79-.34 3.7 3.61.82L8.6 22.5l3.4-1.47 3.4 1.46 1.89-3.19 3.61-.82-.34-3.69L23 12zm-12.91 4.72l-3.8-3.81 1.48-1.48 2.32 2.33 5.85-5.87 1.48 1.48-7.33 7.35z"></path></svg>
                                        </div>
                                        <div class="inner-content">
                                            <p>Python (Intro)</p>
                                            <p>Paris, France | 10km away</p>
                                            <p> Dec 20 - Dec 28, 2023</p>
                                            <p>150 | 2 Adult Guests</p>
                                            <p><b>428 Reviews</b></p>
                                        </div>
                                    </div>
                                    <!-- <div class="footer chat-button">
                                        <a href="{{route('chat')}}">Chat Now</a>
                                    </div> -->
                                    <div class="user-img-top">
                                        <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                    </div>
                                </div>
                            </div>
                        </div>
=======
>>>>>>> c3332d0808a3cdfa160b561eb9023b65a554d18d

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="listing-item">
                                <div class="sub-main">
                                    <div class="img-sec p-rel">
                                        <img src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png" alt="">
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="{{route('detail')}}" class="text-red">Stay for Event</a>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 24 24" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path
                                                    d="M23 12l-2.44-2.79.34-3.69-3.61-.82-1.89-3.2L12 2.96 8.6 1.5 6.71 4.69 3.1 5.5l.34 3.7L1 12l2.44 2.79-.34 3.7 3.61.82L8.6 22.5l3.4-1.47 3.4 1.46 1.89-3.19 3.61-.82-.34-3.69L23 12zm-12.91 4.72l-3.8-3.81 1.48-1.48 2.32 2.33 5.85-5.87 1.48 1.48-7.33 7.35z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="inner-content">
                                                <p>Python (Intro)</p>
                                                <p>Paris, France | 10km away</p>
                                                <p> Dec 20 - Dec 28, 2023</p>
                                                <p>150 | 2 Adult Guests</p>
                                                <p><b>428 Reviews</b></p>
                                            </div>
                                    </div>
                                    <!-- <div class="footer chat-button">
                                        <a href="{{route('chat')}}">Chat Now</a>
                                    </div> -->
                                    <div class="user-img-top">
                                        <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
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
                                        <span class="icon-sec-right"><i class="fas fa-heart"></i></span>
                                    </div>
                                    <div class="slider-content">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="{{route('detail')}}" class="text-red">Stay for Event</a>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 24 24" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path
                                                    d="M23 12l-2.44-2.79.34-3.69-3.61-.82-1.89-3.2L12 2.96 8.6 1.5 6.71 4.69 3.1 5.5l.34 3.7L1 12l2.44 2.79-.34 3.7 3.61.82L8.6 22.5l3.4-1.47 3.4 1.46 1.89-3.19 3.61-.82-.34-3.69L23 12zm-12.91 4.72l-3.8-3.81 1.48-1.48 2.32 2.33 5.85-5.87 1.48 1.48-7.33 7.35z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="inner-content">
                                                <p>Python (Intro)</p>
                                                <p>Paris, France | 10km away</p>
                                                <p> Dec 20 - Dec 28, 2023</p>
                                                <p>150 | 2 Adult Guests</p>
                                                <p><b>428 Reviews</b></p>
                                            </div>
                                    </div>
                                    <!-- <div class="footer chat-button">
                                        <a href="{{route('chat')}}">Chat Now</a>
                                    </div> -->
                                    <div class="user-img-top">
                                        <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
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
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="{{route('detail')}}" class="text-red">Stay for Event</a>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 24 24" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path
                                                    d="M23 12l-2.44-2.79.34-3.69-3.61-.82-1.89-3.2L12 2.96 8.6 1.5 6.71 4.69 3.1 5.5l.34 3.7L1 12l2.44 2.79-.34 3.7 3.61.82L8.6 22.5l3.4-1.47 3.4 1.46 1.89-3.19 3.61-.82-.34-3.69L23 12zm-12.91 4.72l-3.8-3.81 1.48-1.48 2.32 2.33 5.85-5.87 1.48 1.48-7.33 7.35z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="inner-content">
                                                <p>Python (Intro)</p>
                                                <p>Paris, France | 10km away</p>
                                                <p> Dec 20 - Dec 28, 2023</p>
                                                <p>150 | 2 Adult Guests</p>
                                                <p><b>428 Reviews</b></p>
                                            </div>
                                    </div>
                                    <!-- <div class="footer chat-button">
                                        <a href="{{route('chat')}}">Chat Now</a>
                                    </div> -->
                                    <div class="user-img-top">
                                        <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
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
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="{{route('detail')}}" class="text-red">Stay for Event</a>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 24 24" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path
                                                    d="M23 12l-2.44-2.79.34-3.69-3.61-.82-1.89-3.2L12 2.96 8.6 1.5 6.71 4.69 3.1 5.5l.34 3.7L1 12l2.44 2.79-.34 3.7 3.61.82L8.6 22.5l3.4-1.47 3.4 1.46 1.89-3.19 3.61-.82-.34-3.69L23 12zm-12.91 4.72l-3.8-3.81 1.48-1.48 2.32 2.33 5.85-5.87 1.48 1.48-7.33 7.35z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="inner-content">
                                                <p>Python (Intro)</p>
                                                <p>Paris, France | 10km away</p>
                                                <p> Dec 20 - Dec 28, 2023</p>
                                                <p>150 | 2 Adult Guests</p>
                                                <p><b>428 Reviews</b></p>
                                            </div>
                                    </div>
                                    <!-- <div class="footer chat-button">
                                        <a href="{{route('chat')}}">Chat Now</a>
                                    </div> -->
                                    <div class="user-img-top">
                                        <img src="{{env('BASE_URL')}}/assets/img/avatar.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
            </section>
            <div class="load-more-block">
                <button type="button" class="load-btn">Load More</button>
            </div>
        </div>
    </div>

    </div>


</main><!-- End #main -->
@endsection
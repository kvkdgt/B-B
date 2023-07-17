@extends('hometheme')
@section('content')
<style>
.listings .icons a:hover {
    color: #000;
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
                <i class='bx bx-left-arrow-alt'></i>
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
                    <i class='bx bx-right-arrow-alt'></i>
                </div>

        </div>
    </section><!-- End Hero -->

    <!-- popular listings start -->
    <div class="container text-last" data-aos="fade-up">


        <a href="{{route('map')}}" class="btn btn-black-outline"><i class="bx bx-map"></i>
            <span>What You Want to Learn?</span></a>
        <a href="{{route('map')}}" class="btn btn-black-outline"><i class="bx bx-map"></i>
            <span>Country/State</span></a>
        <a href="{{route('map')}}" class="btn btn-black-outline"><i class="bx bx-map"></i>
            <span>Month/Year</span></a>
        <a href="#filtersModal" class="btn btn-black-outline" data-target="#filtersModal" data-toggle="modal"><i
                class="bx bx-filter"></i> <span>Filters</span></a>


    </div>

    <div class="tab-content clearfix">
        <div class="tab-pane active" id="tab1">
            <section id="listings" class="listings">
                <div class="container" data-aos="fade-up">
                    <div class="mb-4 d-flex align-items-center justify-content-between">
                        <div class="icons">
                            <a href="#tab1" class="" data-toggle="tab"
                                style="border-bottom: 2px solid #bfe506; margin-right: 20px; padding-bottom: 7px">Stay &
                                Learn</a>
                            <a href="#tab2" class="" data-toggle="tab" style="margin-right: 20px;">Stay for event</a>
                        </div>
                        <div class="right-block">
                            <a href="#" class="btn btn-black-outline">Request</a>
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
                                            <a href="{{route('detail')}}">Stay and Learn Yoga </a>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
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
                                            <a href="{{route('detail')}}">Stay and Learn Yoga </a>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
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
                                            <a href="{{route('detail')}}">Stay and Learn Yoga </a>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
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
                                            <a href="{{route('detail')}}">Stay and Learn Yoga </a>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
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
                            <a href="#tab1" class="" data-toggle="tab" style="margin-right: 20px;">Stay & Learn</a>
                            <a href="#tab2" class="" data-toggle="tab"
                                style="border-bottom: 2px solid #bfe506; margin-right: 20px; padding-bottom: 7px">Stay
                                for event</a>
                        </div>
                        <div class="right-block">
                            <a href="#" class="btn btn-black-outline">Request</a>
                        </div>
                    </div>
                    <!-- <div class="mb-4 d-flex align-items-center justify-content-between">
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

                    </div> -->
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
                                            <a href="{{route('detail')}}">Stay for Event</a>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                                <path
                                                    d="M211 7.3C205 1 196-1.4 187.6 .8s-14.9 8.9-17.1 17.3L154.7 80.6l-62-17.5c-8.4-2.4-17.4 0-23.5 6.1s-8.5 15.1-6.1 23.5l17.5 62L18.1 170.6c-8.4 2.1-15 8.7-17.3 17.1S1 205 7.3 211l46.2 45L7.3 301C1 307-1.4 316 .8 324.4s8.9 14.9 17.3 17.1l62.5 15.8-17.5 62c-2.4 8.4 0 17.4 6.1 23.5s15.1 8.5 23.5 6.1l62-17.5 15.8 62.5c2.1 8.4 8.7 15 17.1 17.3s17.3-.2 23.4-6.4l45-46.2 45 46.2c6.1 6.2 15 8.7 23.4 6.4s14.9-8.9 17.1-17.3l15.8-62.5 62 17.5c8.4 2.4 17.4 0 23.5-6.1s8.5-15.1 6.1-23.5l-17.5-62 62.5-15.8c8.4-2.1 15-8.7 17.3-17.1s-.2-17.3-6.4-23.4l-46.2-45 46.2-45c6.2-6.1 8.7-15 6.4-23.4s-8.9-14.9-17.3-17.1l-62.5-15.8 17.5-62c2.4-8.4 0-17.4-6.1-23.5s-15.1-8.5-23.5-6.1l-62 17.5L341.4 18.1c-2.1-8.4-8.7-15-17.1-17.3S307 1 301 7.3L256 53.5 211 7.3z" />
                                            </svg>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>Wedding reception</p>
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
                                            <a href="{{route('detail')}}">Stay for Event</a>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                                <path
                                                    d="M211 7.3C205 1 196-1.4 187.6 .8s-14.9 8.9-17.1 17.3L154.7 80.6l-62-17.5c-8.4-2.4-17.4 0-23.5 6.1s-8.5 15.1-6.1 23.5l17.5 62L18.1 170.6c-8.4 2.1-15 8.7-17.3 17.1S1 205 7.3 211l46.2 45L7.3 301C1 307-1.4 316 .8 324.4s8.9 14.9 17.3 17.1l62.5 15.8-17.5 62c-2.4 8.4 0 17.4 6.1 23.5s15.1 8.5 23.5 6.1l62-17.5 15.8 62.5c2.1 8.4 8.7 15 17.1 17.3s17.3-.2 23.4-6.4l45-46.2 45 46.2c6.1 6.2 15 8.7 23.4 6.4s14.9-8.9 17.1-17.3l15.8-62.5 62 17.5c8.4 2.4 17.4 0 23.5-6.1s8.5-15.1 6.1-23.5l-17.5-62 62.5-15.8c8.4-2.1 15-8.7 17.3-17.1s-.2-17.3-6.4-23.4l-46.2-45 46.2-45c6.2-6.1 8.7-15 6.4-23.4s-8.9-14.9-17.3-17.1l-62.5-15.8 17.5-62c2.4-8.4 0-17.4-6.1-23.5s-15.1-8.5-23.5-6.1l-62 17.5L341.4 18.1c-2.1-8.4-8.7-15-17.1-17.3S307 1 301 7.3L256 53.5 211 7.3z" />
                                            </svg>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>Wedding reception</p>
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
                                            <a href="{{route('detail')}}">Stay for Event</a>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                                <path
                                                    d="M211 7.3C205 1 196-1.4 187.6 .8s-14.9 8.9-17.1 17.3L154.7 80.6l-62-17.5c-8.4-2.4-17.4 0-23.5 6.1s-8.5 15.1-6.1 23.5l17.5 62L18.1 170.6c-8.4 2.1-15 8.7-17.3 17.1S1 205 7.3 211l46.2 45L7.3 301C1 307-1.4 316 .8 324.4s8.9 14.9 17.3 17.1l62.5 15.8-17.5 62c-2.4 8.4 0 17.4 6.1 23.5s15.1 8.5 23.5 6.1l62-17.5 15.8 62.5c2.1 8.4 8.7 15 17.1 17.3s17.3-.2 23.4-6.4l45-46.2 45 46.2c6.1 6.2 15 8.7 23.4 6.4s14.9-8.9 17.1-17.3l15.8-62.5 62 17.5c8.4 2.4 17.4 0 23.5-6.1s8.5-15.1 6.1-23.5l-17.5-62 62.5-15.8c8.4-2.1 15-8.7 17.3-17.1s-.2-17.3-6.4-23.4l-46.2-45 46.2-45c6.2-6.1 8.7-15 6.4-23.4s-8.9-14.9-17.3-17.1l-62.5-15.8 17.5-62c2.4-8.4 0-17.4-6.1-23.5s-15.1-8.5-23.5-6.1l-62 17.5L341.4 18.1c-2.1-8.4-8.7-15-17.1-17.3S307 1 301 7.3L256 53.5 211 7.3z" />
                                            </svg>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>Wedding reception</p>
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
                                            <a href="{{route('detail')}}">Stay for Event</a>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                                <path
                                                    d="M211 7.3C205 1 196-1.4 187.6 .8s-14.9 8.9-17.1 17.3L154.7 80.6l-62-17.5c-8.4-2.4-17.4 0-23.5 6.1s-8.5 15.1-6.1 23.5l17.5 62L18.1 170.6c-8.4 2.1-15 8.7-17.3 17.1S1 205 7.3 211l46.2 45L7.3 301C1 307-1.4 316 .8 324.4s8.9 14.9 17.3 17.1l62.5 15.8-17.5 62c-2.4 8.4 0 17.4 6.1 23.5s15.1 8.5 23.5 6.1l62-17.5 15.8 62.5c2.1 8.4 8.7 15 17.1 17.3s17.3-.2 23.4-6.4l45-46.2 45 46.2c6.1 6.2 15 8.7 23.4 6.4s14.9-8.9 17.1-17.3l15.8-62.5 62 17.5c8.4 2.4 17.4 0 23.5-6.1s8.5-15.1 6.1-23.5l-17.5-62 62.5-15.8c8.4-2.1 15-8.7 17.3-17.1s-.2-17.3-6.4-23.4l-46.2-45 46.2-45c6.2-6.1 8.7-15 6.4-23.4s-8.9-14.9-17.3-17.1l-62.5-15.8 17.5-62c2.4-8.4 0-17.4-6.1-23.5s-15.1-8.5-23.5-6.1l-62 17.5L341.4 18.1c-2.1-8.4-8.7-15-17.1-17.3S307 1 301 7.3L256 53.5 211 7.3z" />
                                            </svg>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>Wedding reception</p>
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
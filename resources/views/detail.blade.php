@extends('hometheme')
@section('content')

<main id="main">
    <style>
        .card-time {
            /* width: 317px; */
            padding: 10px;
            font-weight: 600;
            font-size: 18;
        }

        .show-more {
            font-size: 14px;
            background: #1DA1F2;
            border-radius: 25px;
            float: right;
            color: #fff;
            padding: 10px;
            border: 0;
        }
        .image-dash{
            height:100
        }

        .details-block {
            margin-bottom: 25px;
            padding: 20px;
        }

        .details-block .rating i {
            color: #F2E145;
        }

        .details-block .rating span {
            background: #54BA1D;
            border-radius: 4px;
            font-size: 14px;
            text-transform: uppercase;
            padding: 5px 10px;
            color: #fff;
        }

        .details-block h4{
            font-weight: 700;
            font-size: 20px;
            color: #323232;
            margin: 0 0 20px;
        }

        .about-us .details-block h4 {
            margin: 0;
        }

        .about-us .details-content {
            padding: 25px 0;
        }

        .about-us .details-content a {
            font-size: 14px;
            background: #1DA1F2;
            border-radius: 25px;
            float: right;
            color: #fff;
            padding: 10px 15px;
        }

        .about-us .details-content img {
            border: 3px solid rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            width: 75px;
        }

        .gray-bg {
           background: #EEEEEE;
        }

        .guest-block .text-center img {
            margin-bottom: 10px;
        }

        .about-inner h5 {
            text-decoration: underline;
        }

        .details-block .reviews .item img {
            height: 50px;
            border-radius: 50%;
        }
    </style>
     <div class="row">
                <div class="mb-4 d-flex align-items-center justify-content-between">
                    <div class="heading">
                        <h2>Stay &amp; Learn Salsa</h2>
                        <p>2 reviews . <span>Koh Samui, Suratthani, Thailand</span></p>
                    </div>
                    
                    <div class="d-flex">
                        <a href="#"><i class="bx bx-share"></i> Share</a>
                        <a href="#"><i class="bx bx-heart"></i> Save</a>
                    </div>
                    
                </div>
                <div class="col-md-8 col-sm-12" style="height: 300px;">
                    <img class="w-100" style="height: 300px;" src="assets/img/slide/slide-1.jpg" alt="Image">
                </div>
                <div class="col-md-4 col-sm-12 d-grid">
                    <div class="image-slide mb-3">
                        <img class="w-100"  style="height: 140px;" src="assets/img/slide/slide-2.jpg" alt="Image">
                    </div>
                    <div class="image-slide mt-3">
                        <img class="w-100" style="height: 140px;" src="assets/img/slide/slide-3.jpg" alt="Image">
                        <div class="text-block">
                            <p>See all photos</p>
                          </div>
                    </div>
                </div>
            </div>
  <!-- <div class="swiffy-slider slider-item-show3 slider-item-ratio-21x9 slider-nav-round">
    <div class="slider-container" style="height:40%">
           <img class="image-dash" src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png">
        <img class="image-dash" src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png">

        <img class="image-dash" src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png">

        <img class="image-dash" src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png">

        <img class="image-dash" src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png">

        <img class="image-dash" src="{{env('BASE_URL')}}/assets/img/hotels/hotel-1.png">

    </div>

    <button type="button" class="slider-nav" aria-label="Go left"></button>
    <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>

    <div class="slider-indicators d-md-none">
        <button class="" aria-label="Go to slide"></button>
        <button aria-label="Go to slide"></button>
        <button aria-label="Go to slide"></button>
        <button aria-label="Go to slide"></button>
        <button aria-label="Go to slide"></button>
        <button aria-label="Go to slide" class="active"></button>
    </div>
</div> -->
    <!-- popular listings start -->
    <section class="listing_detail">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="mb-4 d-flex align-items-center justify-content-between">
                    <div class="heading">
                        <h2>Stay &amp; Learn Salsa</h2>
                        <p>2 reviews . <span>Koh Samui, Suratthani, Thailand</span></p>
                    </div>

                    <!-- <div class="d-flex">
                        <a href="#"><i class="bx bx-share"></i> Share</a>
                        <a href="#"><i class="bx bx-heart"></i> Save</a>
                    </div> -->

                </div>

            </div>

            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <!--  Stay & Learn Salsa  -->

                    <!--  About the Host  -->
                    <div class="details-block about-us">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4>About the Host</h4>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star-half'></i>
                                <i class="bx bx-star"></i>
                                <span>(3.5) / (14 Reviews)</span>
                            </div>
                        </div>
                        <div class="details-content">
                            <div class="d-flex">
                                <img src="assets/img/avatar.png">
                                <div class="m-2">
                                    <h4 class="m-0">Kartik Trivedi</h4>
                                    <p class="m-0">Yoga Trainer</p>
                                    <p class="m-0">Lonsdale St, Melbourne</p>
                                </div>
                            </div>

                            <a href="{{route('hostProfile')}}">View Profile</a>

                        </div>
                    </div>

                    <div class="divider" style=" border-top: 1px solid gray;margin: 16px 0;"></div>
                    <div class="details-block">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4>Language of Instruction</h4>
                        </div>
                        <div class="details-content">
                            <i class="fa fa-circle"></i> English &nbsp; &nbsp;
                            <i class="fa fa-circle"></i> French &nbsp; &nbsp;
                            <i class="fa fa-circle"></i> German &nbsp; &nbsp; <br>

                        </div>
                    </div>
                    <div class="divider" style=" border-top: 1px solid gray;margin: 16px 0;"></div>
                    <div class="details-block">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4>What Guest will learn</h4>
                        </div>
                        <div class="details-content">
                            <i class="fa fa-circle"></i> Data structure &nbsp; &nbsp;
                            <i class="fa fa-circle"></i> Variables &nbsp; &nbsp;
                            <i class="fa fa-circle"></i> Class &nbsp; &nbsp; <br><br>
                            <i class="fa fa-circle"></i> Exception handling &nbsp; &nbsp;
                            <i class="fa fa-circle"></i> Regular expression &nbsp; &nbsp;

                        </div>
                    </div>
                    <div class="divider" style=" border-top: 1px solid gray;margin: 16px 0;"></div>
                    <!--  What you'll have as:  -->
                    <div class="details-block">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4>Instructional materials</h4>
                        </div>
                        <div class="details-content">
                            <i class="fa fa-circle"></i> 3D Models &nbsp; &nbsp;
                            <i class="fa fa-circle"></i> Slides &nbsp; &nbsp;
                            <i class="fa fa-circle"></i> Textbooks &nbsp; &nbsp; <br><br>
                            <i class="fa fa-circle"></i> BYOD &nbsp; &nbsp;
                            <i class="fa fa-circle"></i> Desktop &nbsp; &nbsp;
                            <i class="fa fa-circle"></i> Video &nbsp; &nbsp;

                        </div>
                    </div>

                    <div class="divider" style=" border-top: 1px solid gray;margin: 16px 0;"></div>
                    <div class="details-block card-time">
                        Duration per day :
                        45 minutes
                    </div>
                    <!--  Where Guest will sleep  -->
                    <div class="details-block">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4>Where Guest will sleep </h4>
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
                    <div class="details-block">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4>About this B&B</h4>
                        </div>
                        <div class="details-content about-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Koh Samui, Suratthani, Thailand</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum tortor eget nisi bibendum morbi at pulvinar consectetur. Ac id nec sed sed nulla faucibus. Massa eu sit laoreet nunc mauris pellentesque. Tincidunt semper facilisi tortor netus a pellentesque auctor maecenas id. Ac, egestas magna a consectetur fermentum. Urna, nec quam sed massa, pellentesque. Diam enim vel porta diam iaculis tellus cursus mauris. </p>
                                </div>
                                <button class="show-more">Show More</button>
                            </div>
                        </div>
                    </div>
                    <!--  Amenities  -->
                    <div class="details-block">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4>What's included</h4>
                        </div>
                        <div class="details-content">
                            <div class="row">
                                <div class="col">
                                    <div class="col-md-6 col-sm-12">
                                        <p>
                                            <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.5 1.875C11.8978 1.875 12.2794 2.03304 12.5607 2.31434C12.842 2.59564 13 2.97718 13 3.375V9.5955L21.25 14.3107V15.1973L13 13.4295V18.777L15.25 20.2762V21.834L11.5 20.5845L7.75 21.834V20.2755L10 18.7755V13.4295L1.75 15.1965V14.31L10 9.5955V3.375C10 2.97718 10.158 2.59564 10.4393 2.31434C10.7206 2.03304 11.1022 1.875 11.5 1.875ZM11.35 0.37875C10.5813 0.417234 9.85676 0.749704 9.32629 1.30739C8.79583 1.86508 8.5 2.60532 8.5 3.375V8.724L0.7225 13.17L0.64 13.2247L0.60025 13.2548L0.52525 13.32C0.437976 13.4071 0.36874 13.5106 0.321509 13.6245C0.274277 13.7384 0.249977 13.8604 0.25 13.9838V15.8932L0.25525 15.9788L0.25975 16.0223L0.27475 16.107C0.322965 16.3129 0.439377 16.4965 0.605076 16.6278C0.770776 16.7592 0.97603 16.8307 1.1875 16.8307L1.2475 16.8285L1.345 16.8172L8.5 15.2843V17.973L6.667 19.1955L6.5935 19.2518L6.55825 19.2817L6.49225 19.3463C6.33626 19.5187 6.24992 19.743 6.25 19.9755V22.6155L6.25525 22.701L6.25975 22.7438L6.27475 22.8293C6.32311 23.035 6.43958 23.2184 6.60527 23.3496C6.77096 23.4809 6.97613 23.5523 7.1875 23.5522L7.288 23.547C7.35459 23.5398 7.42021 23.5255 7.48375 23.5042L11.5 22.1647L15.5162 23.5042L15.613 23.5297L15.6625 23.5387L15.763 23.5507C15.8901 23.5575 16.0172 23.5382 16.1366 23.4942C16.2561 23.4502 16.3653 23.3824 16.4576 23.2948C16.5499 23.2072 16.6235 23.1018 16.6738 22.9849C16.724 22.8679 16.75 22.742 16.75 22.6147V19.9748L16.744 19.8825L16.7388 19.8375L16.7215 19.746L16.6915 19.6515C16.623 19.4653 16.4972 19.3057 16.3323 19.1955L14.5 17.973V15.2843L21.616 16.8097L21.7008 16.8232L21.7443 16.827L21.8305 16.8307C22.0419 16.8266 22.2457 16.7512 22.4088 16.6167C22.5719 16.4822 22.6847 16.2965 22.729 16.0897L22.7448 15.9923C22.7477 15.9675 22.7485 15.9427 22.75 15.8932V13.9838L22.7432 13.8848L22.7372 13.8353L22.717 13.7377L22.684 13.638C22.6055 13.4404 22.4621 13.2754 22.2775 13.17L14.5 8.72475V3.375C14.5 2.57935 14.1839 1.81629 13.6213 1.25368C13.0587 0.691071 12.2956 0.375 11.5 0.375L11.35 0.37875Z" fill="#222222" />
                                            </svg>
                                            Kitchen
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <p>
                                            <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.1562 0V4.5L11.9296 4.50062C12.0276 5.5477 12.4304 6.53647 13.0747 7.33345L13.2183 7.50345L12.0942 8.49655C11.1666 7.44657 10.5846 6.11111 10.4411 4.69103C9.8244 4.96948 9.45448 5.54515 9.41064 6.33846L9.40625 6.5L9.406 9.6825L12.5168 12.699C13.1541 13.317 13.5485 14.1378 13.6372 15.0131L13.6515 15.2014L13.6562 15.3911V21.8625C13.6562 22.9991 12.8109 23.9473 11.6742 24.0946L11.5418 24.108L11.3821 24.1124L2.38212 24.0159C1.19301 24.0031 0.227465 23.0696 0.160014 21.8972L0.15625 21.766V15.5431C0.15625 14.5759 0.529854 13.6487 1.1946 12.9529L1.33141 12.8168L4.65625 9.6765V6.636L1.64767 4.09059L1.66083 3.56345C1.75601 1.62697 3.31453 0.0876378 5.24031 0.00361339L5.40625 0L15.1562 0ZM11.3819 19.2645C9.68534 19.2637 8.04908 18.6311 6.78806 17.4586L6.6105 17.2874C5.6128 16.2891 4.2841 15.75 2.90013 15.75C2.47799 15.7498 2.06085 15.7998 1.65662 15.8977L1.65625 21.766C1.65625 22.1477 1.94157 22.4634 2.31144 22.5101L2.39821 22.516L11.3666 22.6128L11.463 22.6104C11.8222 22.5839 12.109 22.3041 12.151 21.952L12.1562 21.8625L12.1565 19.2206C11.9004 19.2499 11.6418 19.2646 11.3819 19.2645ZM10.4058 1.5H5.40625C4.3408 1.5 3.44297 2.24264 3.21368 3.23125L3.1876 3.36155L3.17875 3.4215L5.9305 5.7495H7.97275L7.98683 5.67632C8.25042 4.37996 9.14314 3.44183 10.406 3.12092L10.4058 1.5ZM19.6562 3C20.0705 3 20.4062 3.33579 20.4062 3.75C20.4062 4.16421 20.0705 4.5 19.6562 4.5C19.242 4.5 18.9062 4.16421 18.9062 3.75C18.9062 3.33579 19.242 3 19.6562 3ZM17.4062 1.5C17.8205 1.5 18.1562 1.83579 18.1562 2.25C18.1562 2.66421 17.8205 3 17.4062 3C16.992 3 16.6562 2.66421 16.6562 2.25C16.6562 1.83579 16.992 1.5 17.4062 1.5ZM13.6562 1.5H11.9058V3H13.6562V1.5ZM19.6562 0C20.0705 0 20.4062 0.335786 20.4062 0.75C20.4062 1.16421 20.0705 1.5 19.6562 1.5C19.242 1.5 18.9062 1.16421 18.9062 0.75C18.9062 0.335786 19.242 0 19.6562 0ZM12.1562 15.3911C12.1562 14.8331 11.949 14.2969 11.5779 13.885L11.4726 13.7758L7.90625 10.3174L7.906 7.2495H6.15625V10.3233L2.36135 13.9074C2.2337 14.0279 2.12174 14.1619 2.02684 14.3061C2.31588 14.2686 2.60731 14.2499 2.9005 14.25C4.59735 14.25 6.23386 14.8827 7.49377 16.0555L7.67116 16.2268C8.66973 17.2247 9.99877 17.7638 11.3826 17.7645C11.6432 17.7646 11.9019 17.7456 12.1569 17.7079L12.1562 15.3911Z" fill="#222222" />
                                            </svg>
                                            Cleaning available during stay
                                        </p>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <p>
                                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.4062 0.750018V2.25002H2.15625V12.75H3.10875C3.3149 12.0078 3.67095 11.3157 4.15493 10.7164C4.63891 10.1171 5.24056 9.6233 5.92275 9.26552C5.51718 8.77124 5.26036 8.17192 5.18219 7.53734C5.10401 6.90277 5.2077 6.25904 5.48118 5.68111C5.75466 5.10317 6.18667 4.61481 6.72693 4.27288C7.26719 3.93094 7.89346 3.74951 8.53284 3.74969C9.17221 3.74987 9.79838 3.93167 10.3384 4.27392C10.8785 4.61616 11.3102 5.10477 11.5834 5.68286C11.8565 6.26095 11.9598 6.90474 11.8813 7.53927C11.8028 8.1738 11.5456 8.77297 11.1397 9.26702C11.8219 9.62445 12.4236 10.1179 12.9076 10.717C13.3916 11.3161 13.7476 12.008 13.9537 12.75H20.1562V9.02327H21.6562V21.75C21.6562 22.5405 20.9062 23.25 20.1562 23.25H2.15625C1.36575 23.25 0.65625 22.5 0.65625 21.75V2.25002C0.65625 1.45952 1.40625 0.750018 2.15625 0.750018H13.4062ZM2.15625 14.25V21.75H20.1562V14.25H2.15625ZM8.53125 5.25002C8.11119 5.24977 7.70322 5.39058 7.37274 5.64988C7.04227 5.90918 6.80843 6.27193 6.70873 6.67999C6.60903 7.08804 6.64924 7.51776 6.82291 7.90023C6.99658 8.2827 7.29366 8.59578 7.6665 8.78927L7.78125 8.84402V10.1933C7.09079 10.3214 6.44439 10.6234 5.90308 11.0708C5.36176 11.5181 4.9434 12.0961 4.6875 12.75H12.375C12.1298 12.123 11.7352 11.5654 11.2254 11.1257C10.7157 10.686 10.1062 10.3775 9.45 10.227L9.282 10.1925V8.84252C9.67628 8.66984 9.99913 8.36676 10.1964 7.98418C10.3936 7.60159 10.4532 7.1628 10.3651 6.74147C10.2771 6.32014 10.0468 5.94193 9.71283 5.67035C9.37889 5.39877 8.96168 5.25035 8.53125 5.25002ZM20.1525 0.749268L21.6525 0.750768C21.651 2.29577 21.2985 3.25727 20.328 4.81727L19.764 5.70452C18.9683 6.98102 18.684 7.71677 18.6585 8.82227L18.6562 9.00002H17.1562C17.1562 7.38002 17.5425 6.40052 18.6217 4.70327L19.0433 4.04327C19.839 2.76752 20.1233 2.03177 20.1502 0.927018L20.1525 0.749268ZM16.4025 0.749268L17.9025 0.750768C17.901 2.29577 17.5485 3.25727 16.578 4.81727L16.014 5.70452C15.2182 6.98102 14.934 7.71677 14.9085 8.82227L14.9062 9.00002H13.4062C13.4062 7.38002 13.7925 6.40052 14.8717 4.70327L15.2933 4.04327C16.089 2.76752 16.3733 2.03177 16.4003 0.927018L16.4025 0.749268Z" fill="#222222" />
                                            </svg>
                                            Steam room
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <p>
                                            <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.75 10.25C15.75 10.0511 15.829 9.86032 15.9697 9.71967C16.1103 9.57902 16.3011 9.5 16.5 9.5C16.6989 9.5 16.8897 9.57902 17.0303 9.71967C17.171 9.86032 17.25 10.0511 17.25 10.25C17.25 10.4489 17.171 10.6397 17.0303 10.7803C16.8897 10.921 16.6989 11 16.5 11C16.3011 11 16.1103 10.921 15.9697 10.7803C15.829 10.6397 15.75 10.4489 15.75 10.25ZM10.5 6.5C10.3011 6.5 10.1103 6.57902 9.96967 6.71967C9.82902 6.86032 9.75 7.05109 9.75 7.25C9.75 7.44891 9.82902 7.63968 9.96967 7.78033C10.1103 7.92098 10.3011 8 10.5 8C10.6989 8 10.8897 7.92098 11.0303 7.78033C11.171 7.63968 11.25 7.44891 11.25 7.25C11.25 7.05109 11.171 6.86032 11.0303 6.71967C10.8897 6.57902 10.6989 6.5 10.5 6.5ZM4.5 8C4.69891 8 4.88968 7.92098 5.03033 7.78033C5.17098 7.63968 5.25 7.44891 5.25 7.25C5.25 7.05109 5.17098 6.86032 5.03033 6.71967C4.88968 6.57902 4.69891 6.5 4.5 6.5C4.30109 6.5 4.11032 6.57902 3.96967 6.71967C3.82902 6.86032 3.75 7.05109 3.75 7.25C3.75 7.44891 3.82902 7.63968 3.96967 7.78033C4.11032 7.92098 4.30109 8 4.5 8ZM21 5V14C21 18.1355 17.6355 21.5 13.5 21.5C11.0535 21.5 8.88375 20.3172 7.5135 18.5L7.515 18.4993L7.5 18.5C3.3645 18.5 0 15.1355 0 11V2C0 1.17275 0.67275 0.5 1.5 0.5H13.5C14.3273 0.5 15 1.17275 15 2V3.5H19.5C20.3272 3.5 21 4.17275 21 5ZM7.5 17C10.8082 17 13.5 14.3082 13.5 11V2H1.49925L1.5 11C1.5 14.3082 4.19175 17 7.5 17ZM19.5 5H15V11C14.9993 12.3282 14.6433 13.6321 13.9688 14.7762C15.1485 14.9008 16.2383 15.4993 17.0753 16.4975L15.9247 17.4613C15.27 16.6798 14.4127 16.25 13.509 16.25C13.239 16.25 12.9773 16.2995 12.7208 16.3738C11.7677 17.2996 10.5856 17.9553 9.2955 18.2735C10.415 19.3801 11.9259 20.0005 13.5 20C16.8083 20 19.5 17.3083 19.5 14V5ZM7.50825 12.5C6.597 12.5 5.7345 12.0635 5.0775 11.2715L3.9225 12.2285C4.86975 13.37 6.1425 14 7.50825 14C8.86275 14 10.1295 13.3798 11.0745 12.2525L9.9255 11.2887C9.27 12.0703 8.41275 12.5 7.50825 12.5Z" fill="#222222" />
                                            </svg>
                                            Movie theater
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <p>
                                            <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18.6562 0.75C19.1487 0.75 19.6363 0.846997 20.0913 1.03545C20.5463 1.22391 20.9597 1.50013 21.3079 1.84835C21.6561 2.19657 21.9323 2.60997 22.1208 3.06494C22.3093 3.51991 22.4062 4.00754 22.4062 4.5C22.4062 9.29175 21.2122 14.3903 19.4062 15.5198V23.25H17.9062V15.5205C16.1333 14.412 14.9498 9.474 14.9078 4.75875L14.9062 4.5L14.91 4.33725C14.9519 3.37181 15.365 2.45983 16.0629 1.79149C16.7609 1.12316 17.6899 0.750056 18.6562 0.75ZM11.9062 0.75V14.3385C13.644 14.7563 14.9062 16.596 14.9062 18.75C14.9062 21.2025 13.269 23.25 11.1562 23.25C9.0435 23.25 7.40625 21.2025 7.40625 18.75C7.40625 16.596 8.6685 14.7555 10.4062 14.3385V0.75H11.9062ZM0.65625 0.75H1.40625C4.75875 0.75 6.60675 5.52375 6.6555 14.6287L6.65625 15.75H2.1555L2.15625 23.25H0.65625V0.75ZM11.1562 15.75C9.95475 15.75 8.90625 17.061 8.90625 18.75C8.90625 20.439 9.95475 21.75 11.1562 21.75C12.3577 21.75 13.4062 20.439 13.4062 18.75C13.4062 17.061 12.3577 15.75 11.1562 15.75ZM2.15625 2.42925V14.25H5.1525L5.13975 13.527L5.1195 12.8153C4.911 6.86775 3.8325 3.46725 2.32425 2.523L2.23425 2.4705L2.15625 2.42925ZM16.41 4.368L16.4062 4.5L16.4078 4.7325C16.4415 7.97325 17.181 11.5823 17.907 13.275V2.3775C17.4893 2.5252 17.1245 2.79284 16.8582 3.14691C16.5919 3.50098 16.436 3.92574 16.41 4.368ZM19.407 2.37825V13.2728C20.1488 11.5403 20.9062 7.8 20.9062 4.5C20.9062 4.03466 20.762 3.58078 20.4934 3.2008C20.2247 2.82083 19.8457 2.53347 19.407 2.37825Z" fill="#222222" />
                                            </svg>
                                            Kitchen
                                        </p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col-md-6 col-sm-12">
                                        <p>
                                            <svg width="25" height="18" viewBox="0 0 25 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.4999 12.2499C14.0186 12.2499 15.2499 13.4811 15.2499 14.9999C15.2499 16.5187 14.0186 17.7499 12.4999 17.7499C10.9811 17.7499 9.74985 16.5187 9.74985 14.9999C9.74985 13.4811 10.9811 12.2499 12.4999 12.2499ZM12.4999 13.7499C11.8095 13.7499 11.2498 14.3095 11.2498 14.9999C11.2498 15.6903 11.8095 16.2499 12.4999 16.2499C13.1902 16.2499 13.7499 15.6903 13.7499 14.9999C13.7499 14.3095 13.1902 13.7499 12.4999 13.7499ZM12.4999 8.24998C15.1375 8.24998 17.4218 9.76282 18.5324 11.9681L17.3966 13.1027C16.636 11.1409 14.7304 9.74998 12.4999 9.74998C10.2695 9.74998 8.3639 11.1409 7.60324 13.1027L6.46788 11.9674C7.57856 9.76248 9.86261 8.24998 12.4999 8.24998ZM12.5 4.25008C16.2354 4.25008 19.5257 6.15524 21.4524 9.04687L20.3671 10.1324C18.7361 7.50195 15.8226 5.75008 12.5 5.75008C9.17736 5.75008 6.26389 7.50195 4.63288 10.1324L3.54756 9.04687C5.47427 6.15524 8.76465 4.25008 12.5 4.25008ZM12.4999 0.249878C17.3381 0.249878 21.6324 2.57941 24.322 6.17803L23.2492 7.25127C20.8427 3.91871 16.9245 1.74988 12.4999 1.74988C8.07549 1.74988 4.15761 3.91838 1.75108 7.25052L0.678223 6.17728C3.36795 2.57908 7.66189 0.249878 12.4999 0.249878Z" fill="#222222" />
                                            </svg>
                                            Wifi
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <p>
                                            <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20.4061 0.25C20.7845 0.24988 21.149 0.392805 21.4265 0.650123C21.704 0.907441 21.8739 1.26013 21.9023 1.6375L21.9061 1.75L21.9053 12.862L23.7278 17.7235C23.8531 18.0573 23.8555 18.4248 23.7344 18.7602C23.6133 19.0955 23.3767 19.3768 23.0671 19.5535L22.9583 19.609L22.8503 19.654C22.7242 19.7015 22.5923 19.7318 22.4581 19.744L22.3238 19.75H1.98832C1.75729 19.75 1.52939 19.6966 1.32237 19.5941C1.11536 19.4915 0.934834 19.3425 0.794874 19.1587C0.654914 18.9749 0.559302 18.7613 0.515495 18.5344C0.471688 18.3076 0.480868 18.0737 0.542322 17.851L0.583572 17.7235L2.40607 12.8643V1.75C2.40606 1.39155 2.53441 1.04494 2.76788 0.772943C3.00135 0.50095 3.32451 0.321556 3.67882 0.26725L3.79432 0.25375L3.90607 0.25H20.4061ZM20.6356 13.75H3.67507L1.98832 18.25H22.3238L20.6356 13.75ZM14.4061 15.25V16.75H9.90607V15.25H14.4061ZM20.4061 1.75H3.90607L3.90532 12.25H20.4053L20.4061 1.75ZM12.1561 3.25C12.355 3.25 12.5458 3.32902 12.6864 3.46967C12.8271 3.61032 12.9061 3.80109 12.9061 4C12.9061 4.19891 12.8271 4.38968 12.6864 4.53033C12.5458 4.67098 12.355 4.75 12.1561 4.75C11.9572 4.75 11.7664 4.67098 11.6257 4.53033C11.4851 4.38968 11.4061 4.19891 11.4061 4C11.4061 3.80109 11.4851 3.61032 11.6257 3.46967C11.7664 3.32902 11.9572 3.25 12.1561 3.25Z" fill="#222222" />
                                            </svg>
                                            Dedicated workspace
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <p>
                                            <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.5 0.75C17.713 0.75 22.75 5.787 22.75 12C22.75 18.213 17.713 23.25 11.5 23.25C5.287 23.25 0.25 18.213 0.25 12C0.25 5.787 5.287 0.75 11.5 0.75ZM11.5 2.25C6.115 2.25 1.75 6.615 1.75 12C1.75 17.385 6.115 21.75 11.5 21.75C16.885 21.75 21.25 17.385 21.25 12C21.25 6.615 16.885 2.25 11.5 2.25ZM13 6C13.9796 6.00127 14.9199 6.38582 15.6196 7.07142C16.3193 7.75701 16.723 8.6892 16.7443 9.6686C16.7655 10.648 16.4027 11.5968 15.7334 12.3121C15.0641 13.0275 14.1414 13.4525 13.1627 13.4963L13 13.5H9.25V18H7.75V6H13ZM13 7.5H9.25V12H13C13.5857 12.0006 14.1485 11.7727 14.5689 11.3649C14.9892 10.9571 15.234 10.4015 15.2512 9.81603C15.2684 9.2306 15.0566 8.66154 14.6609 8.22977C14.2652 7.798 13.7167 7.53755 13.132 7.50375L13 7.5Z" fill="#222222" />
                                            </svg>
                                            Free parking on premises
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <p>
                                            <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.90625 19.75V18.25H8.40625V16.75H4.65625C3.6899 16.7499 2.76088 16.3768 2.06292 15.7085C1.36496 15.0402 0.951939 14.1282 0.91 13.1627L0.90625 13V4C0.906306 3.03365 1.27941 2.10463 1.94774 1.40667C2.61608 0.708705 3.52806 0.29569 4.4935 0.25375L4.65625 0.25H19.6562C20.6226 0.250056 21.5516 0.623156 22.2496 1.29149C22.9475 1.95983 23.3606 2.87181 23.4025 3.83725L23.4062 4V13C23.4062 13.9663 23.0331 14.8954 22.3648 15.5933C21.6964 16.2913 20.7844 16.7043 19.819 16.7463L19.6562 16.75H15.9062V18.25H17.4062V19.75H6.90625ZM14.4062 16.75H9.90625V18.25H14.4062V16.75ZM19.6562 1.75H4.65625C4.08234 1.74997 3.53011 1.96924 3.11255 2.36296C2.69499 2.75668 2.44367 3.29508 2.41 3.868L2.40625 4V13C2.40622 13.5739 2.62549 14.1261 3.01921 14.5437C3.41293 14.9613 3.95133 15.2126 4.52425 15.2463L4.65625 15.25H19.6562C20.2302 15.25 20.7824 15.0308 21.1999 14.637C21.6175 14.2433 21.8688 13.7049 21.9025 13.132L21.9062 13V4C21.9063 3.42609 21.687 2.87386 21.2933 2.4563C20.8996 2.03874 20.3612 1.78742 19.7882 1.75375L19.6562 1.75Z" fill="#222222" />
                                            </svg>
                                            TV
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--  How it works  -->


                    <!--  Choose Dates  -->
                    <div class="details-block card-time">
                        TIME :
                        Time In : 10:00 AM /
                        Time Out : 09:00 AM

                    </div>

                    <!--  Reviews  -->



                    <div class="details-block gray-bg">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4>How it works </h4>
                        </div>
                        <div class="details-content">
                            <ul>
                                <li><span>1</span> Select an available day in calendar, the number of guests and complete the booking </li>
                                <li><span>2</span> Receive booking confirmation with details and instructions </li>
                                <li><span>3</span> Bring valid photo ID and check in ar front desk </li>
                                <li><span>4</span> Enjoy your daycation </li>
                            </ul>
                        </div>
                    </div>

                    <!--  Cancellation Policy  -->
                    <div class="details-block">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4>Cancellation Policy </h4>
                        </div>
                        <div class="details-content">
                            <ul>
                                <li><span>1</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                                <li><span>2</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                                <li><span>3</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                                <li><span>4</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!--  Right Side Cart  -->

                <div class="col-md-4 col-sm-12" id="fixed">
                    <div class="details-block gray-bg">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4>Stay &amp; Learn Salsa</h4>
                            <div class="rate">
                                <p><span>€85</span> /night</p>
                            </div>
                        </div>
                        <div class="details-content">
                            <div class="">
                                <div class="form-field">
                                    <label>Check In</label>
                                    <input type="date" name="checkin" placeholder="23/04/2023">
                                </div>
                                <div class="form-field">
                                    <label>Check Out</label>
                                    <input type="date" name="checkout" placeholder="23/04/2023">
                                </div>
                                <div class="form-field">
                                    <label>No of Guest</label>
                                    <!--                                    <input type="text" name="guests" placeholder="23/04/2023">-->
                                    <select name="guests">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="cost-details">
                                <h4>Cost Details</h4>
                                <div class="item">
                                    <h5>€85 x 5 Nights</h5>
                                    <p>€425</p>
                                </div>
                                <div class="item">
                                    <h5>Cleaning Fee</h5>
                                    <p>€25</p>
                                </div>
                                <div class="item">
                                    <h5>Service Fee</h5>
                                    <p>€5</p>
                                </div>
                                <div class="item">
                                    <h5>Security Deposit</h5>
                                    <p>€45</p>
                                </div>
                                <div class="item">
                                    <h5>Lorem Fee</h5>
                                    <p>€5</p>
                                </div>
                                <div class="item">
                                    <h5>Total Amount</h5>
                                    <p>€510</p>
                                </div>
                            </div>

                            <div class="promo">
                                <div class="field">
                                    <input type="text" name="promo" placeholder="Enter Promo Code">
                                    <button class="btn btn-primary">Apply</button>
                                </div>
                                <div class="message">
                                    <p>Unable to apply promo code</p>
                                </div>
                            </div>

                            <div class="cost-details">
                                <div class="item">
                                    <h5>Promo Discount</h5>
                                    <p>€15</p>
                                </div>
                                <div class="item">
                                    <h5>Total Amount</h5>
                                    <p>€495</p>
                                </div>
                            </div>

                            <a href="chat.html" class="btn btn-primary w-100 mt-5 mb-5">Chat with Host</a>

                        </div>
                    </div>

                </div>

                <!--  Location  -->
                <div class="col-md-12">

                    <div class="details-block">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4>Location </h4>
                        </div>
                        <div class="details-content">
                            <div style="width: 100%"><iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=Elabd%20technologies+(Elabd%20technologies)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="400" frameborder="0"></iframe></div>
                        </div>
                    </div>

                </div>

                <div class="details-block">
                    <div class="d-flex">
                        <h4>Reviews </h4>
                    </div>
                    <div class="details-content">
                        <div class="row reviews">
                            <div class="col-md-6 col-sm-12 mb-5">
                                <div class="d-flex align-items-center justify-content-around average">
                                    <h2>4.5</h2>
                                    <div class="">
                                        <h4>Superb Reviews</h4>
                                        <p>Out of 15 Reviews</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-5">
                                <div class="d-flex ratings">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                    <i class="bx bx-star"></i>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-5">
                                <div class="d-flex item">
                                    <img src="assets/img/team/team-1.jpg">
                                    <div class="detail">
                                        <h4>Francis Burton</h4>
                                        <h6>Jan 05, 2022 - 8:52 am</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-5">
                                <div class="d-flex item">
                                    <img src="assets/img/team/team-2.jpg">
                                    <div class="detail">
                                        <h4>Francis Burton</h4>
                                        <h6>Jan 05, 2022 - 8:52 am</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-5">
                                <div class="d-flex item">
                                    <img src="assets/img/team/team-3.jpg">
                                    <div class="detail">
                                        <h4>Francis Burton</h4>
                                        <h6>Jan 05, 2022 - 8:52 am</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-5">
                                <div class="d-flex item">
                                    <img src="assets/img/team/team-4.jpg">
                                    <div class="detail">
                                        <h4>Francis Burton</h4>
                                        <h6>Jan 05, 2022 - 8:52 am</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 text-center">
                                <button class="btn btn-primary-outline">Load More</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>

</main><!-- End #main -->
@extends('hometheme')
@section('content')
<style>
    .chat-person-profile {
        background-color: #eeeeee !important;
    }

    .messages-suggestions {
        background: #adfe00;
        padding: 9px;
        border-radius: 25px;
    }

    .new-message-count {
        color: red;
        font-weight: 600;
        font-size: 16px !important;
    }

    .chat-in-button {
        margin: 5px;
    }

    .message-icon {
        height: 20px !important;
        width: 20px;
    }

    .card {
        border-radius: 0px !important;
        border: 0px !important;
    }

    .send-btn {
        position: relative;
        right: 46px;
        fill: #5e6057;
        font-size: 17px;
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
        display: flex;
        align-items: center;
        justify-content: center;
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
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container .categories {
        position: relative;
        overflow-x: hidden !important;
        scroll-behavior: smooth;
        padding: 10px 0;
    }

    .categories {
        width: 90%;
        margin: auto;
    }

    .icon-box .button-green {
        background: #bee500;
        border-radius: 20px;
        text-align: center;
        margin: 0 5px;
    }

    .icon-box .button-green:hover {
        background: #bee500;
        border-radius: 20px;
        text-align: center;
        margin: 0 5px;
    }

    .text-box button:not(:last-child) {
        margin-bottom: 20px;
    }
</style>

<main id="main">

    <!-- popular listings start -->
    <section class="chat">
        <div class="container" data-aos="fade-up">
            <div class="row mt-5">
                <!--  Right Side Cart  -->

                <div class="col-md-3 col-sm-12 ">
                    <div class="card card-gray">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h4>Messages</h4>
                        </div>
                        <div class="card-body" style="padding: 10px;">
                            <div class="chats">
                                <div class="item selected">
                                    <img src="assets/img/team/team-1.jpg" alt="Chat Profile">
                                    <div class="w-100">
                                        <h5>John Doe <span>2 july 2023</span> </h5>
                                        <p> <span class="new-message-count"><img class="message-icon" src="{{env('BASE_URL')}}/assets/img/message.png">5</span> </p>

                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/team/team-1.jpg" alt="Chat Profile">
                                    <div class="w-100">
                                        <h5>John Doe <span>2 july 2023</span> </h5>
                                        <p> <span class="new-message-count"><img class="message-icon" src="{{env('BASE_URL')}}/assets/img/message.png">1</span> </p>

                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/team/team-1.jpg" alt="Chat Profile">
                                    <div class="w-100">
                                        <h5>John Doe <span>2 july 2023</span> </h5>
                                        <p> <span class="new-message-count"><img class="message-icon" src="{{env('BASE_URL')}}/assets/img/message.png">2</span> </p>

                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/team/team-1.jpg" alt="Chat Profile">
                                    <div class="w-100">
                                        <h5>John Doe <span>2 july 2023</span> </h5>
                                        <p> <span class="new-message-count"><img class="message-icon" src="{{env('BASE_URL')}}/assets/img/message.png">5</span> </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/team/team-1.jpg" alt="Chat Profile">
                                    <div class="w-100">
                                        <h5>John Doe <span>2 july 2023</span> </h5>
                                        <p> <span class="new-message-count"><img class="message-icon" src="{{env('BASE_URL')}}/assets/img/message.png">6</span> </p>

                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/team/team-1.jpg" alt="Chat Profile">
                                    <div class="w-100">
                                        <h5>John Doe <span>2 july 2023</span> </h5>
                                        <p> <span class="new-message-count"><img class="message-icon" src="{{env('BASE_URL')}}/assets/img/message.png">5</span> </p>

                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/team/team-1.jpg" alt="Chat Profile">
                                    <div class="w-100">
                                        <h5>John Doe <span>2 july 2023</span> </h5>
                                        <p> <span class="new-message-count"><img class="message-icon" src="{{env('BASE_URL')}}/assets/img/message.png">5</span> </p>

                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/team/team-1.jpg" alt="Chat Profile">
                                    <div class="w-100">
                                        <h5>John Doe <span>2 july 2023</span> </h5>
                                        <p> <span class="new-message-count"><img class="message-icon" src="{{env('BASE_URL')}}/assets/img/message.png">5</span> </p>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-sm-12">
                    <!--  Chatting  -->
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <img src="assets/img/team/team-1.jpg" alt="Chat Profile">
                            <div class="">
                                <h5>John Doe</h5>
                                <p><i class="fa fa-circle"></i> Online</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chat-section">
                                <div class="messages">
                                    <div class="item right justify-content-end">
                                        <img src="assets/img/team/team-3.jpg" alt="Receiver">
                                        <div class="text-box py-4">
                                            <p>Hey</p>
                                            <span>01:05 PM</span>
                                        </div>
                                    </div>
                                    <div class="item left">
                                        <img src="assets/img/team/team-1.jpg" alt="Sender">
                                        <div class="text-box py-4">
                                            <p>Hello</p>
                                            <span>01:05 PM</span>
                                        </div>
                                    </div>
                                    <!-- <div class="item left">
                                        <img src="assets/img/team/team-1.jpg" alt="Sender">
                                        <div class="text-box py-4">
                                            <p>Selected Dates</p>
                                            <span>Feb 5 - Feb 15 (10 Days) - €50</span><br>
                                            <span>Feb 20 - Feb 28 (9 Days) - €45</span><br/>
                                            <p>Bookings 2 adult guest 10 Nights €180</p>
                                        </div>
                                    </div> -->


                                    <div class="item left">
                                        <img src="assets/img/team/team-1.jpg" alt="Sender">
                                        <div class="text-box py-4">
                                            <h4>Stay & Learn Salsa</h4>
                                           <h4> Cost Details</h4>
                                            <p>Selected Dates</p><br />
                                            <span>Feb 5 - Feb 15 (10 Days) - €50 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="cancel-button" style="background:#1DA1F2"><i class="fas fa-times"></i></button></span><br>
                                            <span>Feb 20 - Feb 28 (9 Nights) - €45 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="cancel-button" style="background:#1DA1F2"><i class="fas fa-times"></i></button></span><br />
                                            <p>Bookings 2 adult guest 10 Nights €180</p><br />
                                            <div class="item d-flex align-items-center justify-content-between">
                                                <h5 class="m-0">Cleaning Fee</h5>
                                                <p class="m-0">€30 </p>
                                            </div>
                                            <div class="item d-flex align-items-center justify-content-between">
                                                <h5 class="m-0">Security Deposit</h5>
                                                <p class="m-0">€15 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                            </div>
                                            <div class="item d-flex align-items-center justify-content-between">
                                                <h5 class="m-0">Service Fee</h5>
                                                <p class="m-0">€33 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                            </div>

                                            <button class="btn btn-primary" data-target="#chatModal" data-toggle="modal" href="#chatModal">Click to provide your booking details</button>

                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="suggested-message">
                                    <span class="messages-suggestions">
                                        Good Morning
                                    </span>&nbsp;
                                    <span class="messages-suggestions">
                                        i need to book B&B
                                    </span>&nbsp;
                                    <span class="messages-suggestions">
                                        What is the price?
                                    </span>
                                </div> -->
                                <div class="container aos-init aos-animate" data-aos="fade-up">
                                    <div class="slideLeft">
                                        <i class="fa-solid fa-arrow-left"></i>
                                    </div>
                                    <div class="categories d-flex overflow-auto aos-init aos-animate" data-aos="zoom-in" data-aos-delay="250">
                                        <div class="icon-box">
                                            <button class="btn button-green"><a href="">Good Morning</a></button>
                                        </div>
                                        <div class="icon-box">
                                            <button class="btn button-green"><a href="">i need to book B&B</a></button>
                                        </div>
                                        <div class="icon-box">
                                            <button class="btn button-green"><a href="">What is the price?</a></button>
                                        </div>
                                        <div class="icon-box">
                                            <button class="btn button-green"><a href="">What is the price?</a></button>
                                        </div>
                                    </div>
                                    <div class="slideRight">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>

                                </div>
                                <div class="send-message">
                                    <!-- <input type="text" name="message" placeholder="Type your message here">-->
                                    <!-- <a data-target="#optionsModal" data-toggle="modal" href="#optionsModal">Login / Signup required to type message in the text field</a>-->
                                    <input type="text" disabled placeholder="Select suggested message"">
                                    <span class=" send-btn">

                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                        <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z" />
                                    </svg>
                                    </span>
                                    <!-- <button data-target=" #signUpModal" data-toggle="modal" class="btn btn-primary-outline">Login / Signup required to type message</button>
                                    <button data-target="#guestFormModal" data-toggle="modal" class="btn btn-primary">Continue as Guest to Book</button> -->
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

                <!--  My Listing  -->
                <div class="col-md-3 col-sm-12">
                    <div class="card chat-person-profile">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h4>about John Doe </h4>
                        </div>
                        <div class="card-body listings">
                            <img style="height:40" src="assets/img/team/team-1.jpg" alt="Chat Profile">

                            <span style="font-size:20;font-weight:600">John Doe</span>
                            <hr>
                            Date of Join : Dec 20, 2022<br>
                            <a href="" style="color:blue">View Profile</a>&nbsp;|
                            <a href="" style="color:blue">Reviews</a>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->
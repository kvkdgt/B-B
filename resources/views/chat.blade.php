@extends('hometheme')
@section('content')
<style>
    .messages-suggestions {
        background: #f1eded;
        padding: 9px;
        border-radius: 25px;
    }

    .new-message-count {
        color: red;
        font-weight: 600;
        font-size: 16px !important;
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
                                    <div class="item left">
                                        <img src="assets/img/team/team-1.jpg" alt="Sender">
                                        <div class="text-box">
                                            <p>Lorum ipsum dolor</p>
                                            <span>01:05 PM</span>
                                        </div>
                                    </div>
                                    <div class="item right">
                                        <div class="text-box">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a tincidunt odio. Mauris a quam sagittis metus euismod mollis vel ac mauris. Donec ac tellus tincidunt, pellentesque leo quis, tempus mi.</p>
                                            <span>01:10 PM</span>
                                        </div>
                                        <img src="assets/img/team/team-3.jpg" alt="Receiver">
                                    </div>
                                    <div class="item right">
                                        <div class="text-box">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a tincidunt odio.</p>
                                            <span>02:30 PM</span>
                                        </div>
                                        <img src="assets/img/team/team-3.jpg" alt="Receiver">
                                    </div>
                                    <div class="item right">
                                        <div class="text-box">
                                            <p>Lorum ipsum dolor</p>
                                            <span>05:10 PM</span>
                                        </div>
                                        <img src="assets/img/team/team-3.jpg" alt="Receiver">
                                    </div>
                                    <div class="item left">
                                        <img src="assets/img/team/team-1.jpg" alt="Sender">
                                        <div class="text-box">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut a tincidunt odio.</p>
                                            <span>05:30 PM</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="suggested-message">
                                    <span class="messages-suggestions">
                                        Good Morning
                                    </span>&nbsp;
                                    <span class="messages-suggestions">
                                        i need to book B&B
                                    </span>&nbsp;
                                    <span class="messages-suggestions">
                                        What is the price?
                                    </span>
                                </div>
                                <div class="send-message">
                                    <!--                                    <input type="text" name="message" placeholder="Type your message here">-->
                                    <!--                                    <a data-target="#optionsModal" data-toggle="modal" href="#optionsModal">Login / Signup required to type message in the text field</a>-->
                                    <input type="text" disabled placeholder="Select suggested message"">
                                    <span class=" send-btn">

                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
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
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h4>about John Doe </h4>
                        </div>
                        <div class="card-body listings">
                            <h3>John Doe</h3>
                            Joined since 2022

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->
@extends('hometheme')
@section('content')


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
                                  <h5>John  Doe <span>New</span> </h5>
                                  <p>Hi, i want make <span>12:55</span> </p>
                              </div>
                          </div>
                          <div class="item">
                              <img src="assets/img/team/team-1.jpg" alt="Chat Profile">
                              <div class="w-100">
                                  <h5>John  Doe <span>New</span> </h5>
                                  <p>Hi, i want make <span>12:55</span> </p>
                              </div>
                          </div>
                          <div class="item">
                              <img src="assets/img/team/team-1.jpg" alt="Chat Profile">
                              <div class="w-100">
                                  <h5>John  Doe <span>New</span> </h5>
                                  <p>Hi, i want make <span>12:55</span> </p>
                              </div>
                          </div>
                          <div class="item">
                              <img src="assets/img/team/team-1.jpg" alt="Chat Profile">
                              <div class="w-100">
                                  <h5>John  Doe <span>New</span> </h5>
                                  <p>Hi, i want make <span>12:55</span> </p>
                              </div>
                          </div>
                          <div class="item">
                              <img src="assets/img/team/team-1.jpg" alt="Chat Profile">
                              <div class="w-100">
                                  <h5>John  Doe <span>New</span> </h5>
                                  <p>Hi, i want make <span>12:55</span> </p>
                              </div>
                          </div>
                          <div class="item">
                              <img src="assets/img/team/team-1.jpg" alt="Chat Profile">
                              <div class="w-100">
                                  <h5>John  Doe <span>New</span> </h5>
                                  <p>Hi, i want make <span>12:55</span> </p>
                              </div>
                          </div>
                          <div class="item">
                              <img src="assets/img/team/team-1.jpg" alt="Chat Profile">
                              <div class="w-100">
                                  <h5>John  Doe <span>New</span> </h5>
                                  <p>Hi, i want make <span>12:55</span> </p>
                              </div>
                          </div>
                          <div class="item">
                              <img src="assets/img/team/team-1.jpg" alt="Chat Profile">
                              <div class="w-100">
                                  <h5>John  Doe <span>New</span> </h5>
                                  <p>Hi, i want make <span>12:55</span> </p>
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
                          <h5>John  Doe</h5>
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
                          <div class="send-message">
<!--                                    <input type="text" name="message" placeholder="Type your message here">-->
<!--                                    <a data-target="#optionsModal" data-toggle="modal" href="#optionsModal">Login / Signup required to type message in the text field</a>-->
                              
                              <button data-target="#signUpModal" data-toggle="modal" class="btn btn-primary-outline">Login / Signup required to type message</button>
                              <button data-target="#guestFormModal" data-toggle="modal" class="btn btn-primary">Continue as Guest to Book</button>
                          </div>
                      </div>
                      
                  </div>
              </div>
              
              
          </div>
          
          <!--  My Listing  -->
          <div class="col-md-3 col-sm-12">
              <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                      <h4>My Listings </h4>
                  </div>
                  <div class="card-body listings">
                      <div class="listing-item sm">
                                  <div class="sub-main">
                                      <div class="img-sec p-rel">
                                          <img src="assets/img/hotels/hotel-1.png" alt="">
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
                                                      <img src="assets/img/avatar.png">
                                                      <div class="m-2">
                                                          <h6 class="m-0">Kartik Trivedi</h6>
                                                          <p class="m-0">Yoga Trainer</p>
                                                      </div>
                                                  </div>

                                                  <a href="chat.html">Chat Now</a>
                                              </div>
                                          </div>
                                      <div class="share">
                                          <div class="d-flex justify-content-center">
                                              <div class="m-2">
                                                  <a class="m-0" href="#"><i class="bx bxl-twitter"></i>Share on Twitter</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                      <div class="listing-item sm">
                                  <div class="sub-main">
                                      <div class="img-sec p-rel">
                                          <img src="assets/img/hotels/hotel-1.png" alt="">
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
                                                      <img src="assets/img/avatar.png">
                                                      <div class="m-2">
                                                          <h6 class="m-0">Kartik Trivedi</h6>
                                                          <p class="m-0">Yoga Trainer</p>
                                                      </div>
                                                  </div>

                                                  <a href="chat.html">Chat Now</a>
                                              </div>
                                          </div>
                                      <div class="share">
                                          <div class="d-flex justify-content-center">
                                              <div class="m-2">
                                                  <a class="m-0" href="#"><i class="bx bxl-twitter"></i>Share on Twitter</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                      <div class="listing-item sm">
                                  <div class="sub-main">
                                      <div class="img-sec p-rel">
                                          <img src="assets/img/hotels/hotel-1.png" alt="">
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
                                                      <img src="assets/img/avatar.png">
                                                      <div class="m-2">
                                                          <h6 class="m-0">Kartik Trivedi</h6>
                                                          <p class="m-0">Yoga Trainer</p>
                                                      </div>
                                                  </div>

                                                  <a href="chat.html">Chat Now</a>
                                              </div>
                                          </div>
                                      <div class="share">
                                          <div class="d-flex justify-content-center">
                                              <div class="m-2">
                                                  <a class="m-0" href="#"><i class="bx bxl-twitter"></i>Share on Twitter</a>
                                              </div>
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
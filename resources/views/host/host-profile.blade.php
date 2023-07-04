@extends('hometheme')
@section('content')

<main id="main">

<!-- popular listings start -->
<section class="host-profile">
<div class="container" data-aos="fade-up">
      <div class="row mt-5">
          <!--  Right Side Cart  -->
          
          <div class="col-md-3 col-sm-12">
              <div class="card card-gray">
                  <div class="card-header">
                      <p class="badge-gray">
                          ID # 123456
                      </p>
                      <div class="profile">
                          <img src="assets/img/avatar.png">
                          <div class="m-2">
                              <h4 class="m-0">Abdul S</h4>
                              <p class="m-0">Yoga Trainer</p>
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                      
                      <div class="sidebar">
                          <div class="item">
                              <i class="bx bx-user"></i>
                              <p>Verified User</p>
                          </div>
                          <div class="item">
                              <i class="bx bxs-star-half"></i>
                              <p>1403 Reviews</p>
                          </div>
                      </div>
                      
                      <!-- Links Provided-->
                      <div class="sidebar">
                          <h4>Links Provided</h4>
                          <div class="item">
                              <i class="bx bx-user"></i>
                              <p>Government ID Card</p>
                          </div>
                          <div class="item">
                              <i class="bx bxs-star-half"></i>
                              <p>Email Address</p>
                          </div>
                          <div class="item">
                              <i class="bx bxs-star-half"></i>
                              <p>Phone Number</p>
                          </div>
                      </div>
                      
                      
                      <!-- Other Info -->
                      <div class="sidebar">
                          <h4>Other Info</h4>
                          <div class="item">
                              <p><b>Languages:</b> English, French</p>
                          </div>
                          <div class="item">
                              <p><b>Gender</b> Male</p>
                          </div>
                          <div class="item">
                              <p><b>Address:</b> Essen, NRW, Germany</p>
                          </div>
                      </div>
                      
                      
                      <!-- Timing -->
                      <div class="sidebar">
                          <h4>Timing</h4>
                          <div class="item">
                              <p><b>Checkin Time:</b> 8:00 AM</p>
                          </div>
                          <div class="item">
                              <p><b>Checkout Time:</b> 9:30 PM</p>
                          </div>
                      </div>
                      
                      <a href="chat.html" class="btn btn-primary w-100 mt-5 mb-5">Chat with Host</a>
                      
                      
                      
                      <!-- Cancellation Policy -->
                      <div class="sidebar">
                          <h4>Cancellation Policy</h4>
                          <div class="item">
                              <p>Refund only possible 48 hours before check in</p>
                          </div>
                          <div class="item">
                              <p>Send Email</p>
                          </div>
                          <div class="item">
                              <p>Call Me</p>
                          </div>
                      </div>
                  </div>
              </div>
              
          </div>
          <div class="col-md-6 col-sm-12">
              <!--  Hi, I am Linda  -->
              <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                      <h4>Hi, I am Linda</h4>
                  </div>
                  <div class="card-body">
                      <h6>Joined in 2018</h6>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum tortor eget nisi bibendum morbi at pulvinar consectetur. Ac id nec sed sed nulla faucibus. Massa eu sit laoreet nunc mauris pellentesque. Tincidunt semper facilisi tortor netus a pellentesque auctor maecenas id. Ac, egestas magna a consectetur fermentum. Urna, nec quam sed massa, pellentesque. Diam enim vel porta diam iaculis tellus cursus mauris. </p>
                  </div>
              </div>
              
              <!--  Academic Qualification  -->
              <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                      <h4>Academic Qualification</h4>
                  </div>
                  <div class="card-body">
                      <ul>
                          <li><b>B.SC Fitness: </b>University of Poland, Poland </li>
                          <li><b>Diploma Graphics: </b>University of Poland, Poland </li>
                      </ul>
                      
                  </div>
              </div>
              
              <!--  Checkin Procedure  -->
              <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                      <h4>Checkin Procedure when you arrive </h4>
                  </div>
                  <div class="card-body">
                      <ul>
                          <li><span>1</span> Show Personal ID </li>
                          <li><span>2</span> Confirmation of bookind </li>
                          <li><span>3</span> A mini tour </li>
                          <li><span>4</span> Settle In </li>
                      </ul>
                  </div>
              </div>
              
              <!--  Cancellation Policy  -->
              <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                      <h4>House Rules </h4>
                  </div>
                  <div class="card-body">
                      <ul>
                          <li><span>1</span> No Pets </li>
                          <li><span>2</span> No smoking </li>
                          <li><span>3</span> No house party </li>
                          <li><span>4</span> Quiet Time Start at 8PM </li>
                      </ul>
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
                                                          <h6 class="m-0">Abdul S</h6>
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
                                                          <h6 class="m-0">Abdul S</h6>
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
                                                          <h6 class="m-0">Abdul S</h6>
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
          
          <!--  My Album  -->
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                      <h4>My Album</h4>
                      <div class="d-flex">
                          <div class="slideLeft d-flex align-items-center justify-content-center">
                              <i class='bx bx-left-arrow-alt'></i>
                            </div>
                          <div class="slideRight d-flex align-items-center justify-content-center">
                              <i class='bx bx-right-arrow-alt'></i>
                            </div>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="album d-flex">
                          <div class="text-center">
                              <img src="assets/img/hotels/hotel-3.png">
                          </div>
                          <div class="text-center">
                              <img src="assets/img/hotels/hotel-2.png">
                          </div>
                          <div class="text-center">
                              <img src="assets/img/hotels/hotel-3.png">
                          </div>
                          <div class="text-center">
                              <img src="assets/img/hotels/hotel-4.png">
                          </div>
                          <div class="text-center">
                              <img src="assets/img/hotels/hotel-4.png">
                          </div>
                          <div class="text-center">
                              <img src="assets/img/hotels/hotel-4.png">
                          </div>
                          <div class="text-center">
                              <img src="assets/img/hotels/hotel-4.png">
                          </div>
                          <div class="text-center">
                              <img src="assets/img/hotels/hotel-4.png">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    
    </div>
</section>

</main><!-- End #main -->
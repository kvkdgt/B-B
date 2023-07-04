@extends('hometheme')
@section('content')


<main id="main">

<!-- popular listings start -->
<section class="host-profile">
<div class="container" data-aos="fade-up">
      <div class="row mt-5">
          <!--  Right Side Cart  -->
          <h3 class="mb-5">Host Dashboard</h3>
          
          <div class="col-md-3 col-sm-12">
              <div class="card card-gray">
                  <div class="card-header">
                      <p class="badge-gray">
                          Edit Profile
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
                      
                      <!-- Dashboard  -->
                      <div class="sidebar">
                          <div class="item">
                              <a href="host-dashboard.html">Dashboard</a>
                          </div>
                          <div class="item">
                              <a href="admin-notifications.html">Notifications <span>5</span></a>
                          </div>
                          <div class="item">
                              <a href="chat.html">Messages <span>10</span></a>
                          </div>
                          <div class="item">
                              <a href="chat.html">Chat <span>2</span></a>
                          </div>
                      </div>
                      
                      <!-- Bookings  -->
                      <div class="sidebar">
                          <h4>Bookings</h4>
                          <div class="item">
                              <a href="host-bookings.html">Accepted</a>
                          </div>
                          <div class="item">
                              <a href="host-bookings.html">Rejected</a>
                          </div>
                          <div class="item">
                              <a href="host-bookings.html">Refunded</a>
                          </div>
                      </div>
                      
                      <!-- My Listings  -->
                      <div class="sidebar">
                          <h4>My Listings</h4>
                          <div class="item">
                              <a href="host-listing.html">View All</a>
                          </div>
                          <div class="item">
                              <a href="host-listing.html">View Liked Listings</a>
                          </div>
                          <div class="item">
                              <a href="host-listing.html">View Saved Listings</a>
                          </div>
                          <div class="item">
                              <a href="create-listing.html">Create New Listing</a>
                          </div>
                      </div>
                      
                      <!-- Payments & Payouts  -->
                      <div class="sidebar">
                          <h4>Payments &amp; Payouts</h4>
                          <div class="item">
                              <a href="host-revenue.html">Revenue</a>
                          </div>
                          <div class="item">
                              <a href="host-revenue.html">Net Income</a>
                          </div>
                          <div class="item">
                              <a href="#">Update Pay Details</a>
                          </div>
                      </div>
                      
                      <!-- Expenses as Guest  -->
                      <div class="sidebar">
                          <h4>Expenses as Guest</h4>
                          <div class="item">
                              <a href="guest-expenses.html">View All Expenses</a>
                          </div>
                      </div>
                      
                      <!-- Settings  -->
                      <div class="sidebar">
                          <h4>Settings</h4>
                          <div class="item">
                              <a href="update-password.html">Change Password</a>
                          </div>
                          <div class="item">
                              <a href="#">Update Calendar</a>
                          </div>
                          <div class="item">
                              <a href="update-password.html">Reset Password</a>
                          </div>
                          <div class="item">
                              <a href="#">Delete my Profile</a>
                          </div>
                      </div>
                      
                  </div>
              </div>
              
          </div>
          <div class="col-md-9 col-sm-12">
              <!--  Statistics  -->
              <div class="row">
                  <!--  Total Listing  -->
                  <div class="col-md-4 col-sm-12">
                      <div class="card">
                          <div class="card-body d-flex align-items-center justify-content-between">
                              <h4>Total Listing</h4>
                              <h3>20</h3>
                          </div>
                      </div>
                  </div>
                  
                  <!--  Total Revenue  -->
                  <div class="col-md-4 col-sm-12">
                      <div class="card">
                          <div class="card-body d-flex align-items-center justify-content-between">
                              <h4>Total Revenue</h4>
                              <h3>€2.5K</h3>
                          </div>
                      </div>
                  </div>
                  
                  <!--  Total Net Income  -->
                  <div class="col-md-4 col-sm-12">
                      <div class="card">
                          <div class="card-body d-flex align-items-center justify-content-between">
                              <h4>Total Net Income</h4>
                              <h3>€425</h3>
                          </div>
                      </div>
                  </div>
                  
                  <!--  Graphs  -->
                  
                  <!--  Total Listing  -->
                  <div class="col-md-4 col-sm-12">
                      <div class="card">
                          <div class="card-header d-flex align-items-center justify-content-between">
                              <h5>Total Listing</h5>
                              <div class="">
                                  <select name="dropdown">
                                      <option value="All">All</option>
                                      <option value="Monthly">Monthly</option>
                                      <option value="Weekly">Weekly</option>
                                  </select>
                              </div>
                          </div>
                          <div class="card-body p-3">
                              
                              <canvas id="total_listing_chart" style="width:100%;max-width:700px"></canvas>

                          </div>
                      </div>
                  </div>
                  
                  <!--  Total Revenue  -->
                  <div class="col-md-4 col-sm-12">
                      <div class="card">
                          <div class="card-header d-flex align-items-center justify-content-between">
                              <h5>Total Revenue</h5>
                              <div class="">
                                  <select name="dropdown">
                                      <option value="All">All</option>
                                      <option value="Monthly">Monthly</option>
                                      <option value="Weekly">Weekly</option>
                                  </select>
                              </div>
                          </div>
                          <div class="card-body p-3">
                              <canvas id="total_revenue_chart" style="width:100%;max-width:700px"></canvas>
                          </div>
                      </div>
                  </div>
                  
                  <!--  Total Net Income  -->
                  <div class="col-md-4 col-sm-12">
                      <div class="card">
                          <div class="card-header d-flex align-items-center justify-content-between">
                              <h5>Total Net Income</h5>
                              <div class="">
                                  <select name="dropdown">
                                      <option value="All">All</option>
                                      <option value="Monthly">Monthly</option>
                                      <option value="Weekly">Weekly</option>
                                  </select>
                              </div>
                          </div>
                          <div class="card-body p-3">
                              <canvas id="total_income_chart" style="width:100%;max-width:700px"></canvas>
                          </div>
                      </div>
                  </div>
                  
                  <!--  Bookings  -->
                  <div class="col-md-8 col-sm-12">
                      <div class="card">
                          <div class="card-header d-flex align-items-center justify-content-between">
                              <h5>Bookings</h5>
                              <div class="">
                                  <select name="dropdown">
                                      <option value="All">All</option>
                                      <option value="Monthly">Monthly</option>
                                      <option value="Weekly">Weekly</option>
                                  </select>
                              </div>
                          </div>
                          <div class="card-body p-3">
                              <canvas id="bookings_chart" style="width:100%;max-width:700px"></canvas>
                          </div>
                      </div>
                  </div>
                  
                  
                  <!--  Income/Charges  -->
                  <div class="col-md-4 col-sm-12">
                      <div class="card">
                          <div class="card-header d-flex align-items-center justify-content-between">
                              <h5>Income/Charges</h5>
                              <div class="">
                                  <select name="dropdown">
                                      <option value="All">All</option>
                                      <option value="Monthly">Monthly</option>
                                      <option value="Weekly">Weekly</option>
                                  </select>
                              </div>
                          </div>
                          <div class="card-body p-3">
                              <canvas id="income_pie_chart" style="width:100%;max-width:700px"></canvas>
                          </div>
                      </div>
                  </div>
                  
                  <!--  Recent Bookings  -->
                  <div class="col-md-12 col-sm-12">
                      <div class="card card-gray">
                          <div class="card-header d-flex align-items-center justify-content-between">
                              <h4>Recent Bookings</h4>
                              <div class="">
                                  <select name="dropdown">
                                      <option value="All">All</option>
                                      <option value="Monthly">Monthly</option>
                                      <option value="Weekly">Weekly</option>
                                  </select>
                              </div>
                          </div>
                          <div class="card-body p-3">
                              <div class="common-table">
                                  <table>
                                      <thead>
                                          <th>S/No</th>
                                          <th>Photo</th>
                                          <th>Date</th>
                                          <th>Listing Name</th>
                                          <th>Country</th>
                                          <th>Guest Name</th>
                                          <th>Check In</th>
                                          <th>Check Out</th>
                                          <th>Action</th>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>01</td>
                                              <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                              <td>25/03/2023</td>
                                              <td>Stay &amp; Learn</td>
                                              <td>Germany</td>
                                              <td>Abdul S</td>
                                              <td>03/04/2023</td>
                                              <td>09/04/2023</td>
                                              <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                          </tr>
                                          <tr>
                                              <td>02</td>
                                              <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                              <td>25/03/2023</td>
                                              <td>Stay &amp; Learn</td>
                                              <td>Germany</td>
                                              <td>Abdul S</td>
                                              <td>03/04/2023</td>
                                              <td>09/04/2023</td>
                                              <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                          </tr>
                                          <tr>
                                              <td>03</td>
                                              <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                              <td>25/03/2023</td>
                                              <td>Stay &amp; Learn</td>
                                              <td>Germany</td>
                                              <td>Abdul S</td>
                                              <td>03/04/2023</td>
                                              <td>09/04/2023</td>
                                              <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                          </tr>
                                          <tr>
                                              <td>04</td>
                                              <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                              <td>25/03/2023</td>
                                              <td>Stay &amp; Learn</td>
                                              <td>Germany</td>
                                              <td>Abdul S</td>
                                              <td>03/04/2023</td>
                                              <td>09/04/2023</td>
                                              <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                          </tr>
                                          <tr>
                                              <td>05</td>
                                              <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                              <td>25/03/2023</td>
                                              <td>Stay &amp; Learn</td>
                                              <td>Germany</td>
                                              <td>Abdul S</td>
                                              <td>03/04/2023</td>
                                              <td>09/04/2023</td>
                                              <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                          </tr>
                                          <tr>
                                              <td>06</td>
                                              <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                              <td>25/03/2023</td>
                                              <td>Stay &amp; Learn</td>
                                              <td>Germany</td>
                                              <td>Abdul S</td>
                                              <td>03/04/2023</td>
                                              <td>09/04/2023</td>
                                              <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                          </tr>
                                          <tr>
                                              <td>07</td>
                                              <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                              <td>25/03/2023</td>
                                              <td>Stay &amp; Learn</td>
                                              <td>Germany</td>
                                              <td>Abdul S</td>
                                              <td>03/04/2023</td>
                                              <td>09/04/2023</td>
                                              <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                          </tr>
                                          <tr>
                                              <td>08</td>
                                              <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                              <td>25/03/2023</td>
                                              <td>Stay &amp; Learn</td>
                                              <td>Germany</td>
                                              <td>Abdul S</td>
                                              <td>03/04/2023</td>
                                              <td>09/04/2023</td>
                                              <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                          </tr>
                                          <tr>
                                              <td>09</td>
                                              <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                              <td>25/03/2023</td>
                                              <td>Stay &amp; Learn</td>
                                              <td>Germany</td>
                                              <td>Abdul S</td>
                                              <td>03/04/2023</td>
                                              <td>09/04/2023</td>
                                              <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                          </tr>
                                          <tr>
                                              <td>10</td>
                                              <td><img src="assets/img/team/team-1.jpg" alt="Profile"></td>
                                              <td>25/03/2023</td>
                                              <td>Stay &amp; Learn</td>
                                              <td>Germany</td>
                                              <td>Abdul S</td>
                                              <td>03/04/2023</td>
                                              <td>09/04/2023</td>
                                              <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                          </tr>
                                      </tbody>
                                  </table>
                              
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
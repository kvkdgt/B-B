@extends('hometheme')
@section('content')

<main id="main">

<!-- ======= Icon Section ======= -->
<section class="hero d-flex align-items-center justify-content-center">
  <div class="container" data-aos="fade-up">

    <div class="categories d-flex overflow-auto" data-aos="zoom-in" data-aos-delay="250">
        <div class="slideLeft d-flex align-items-center justify-content-center">
          <i class='bx bx-left-arrow-alt' ></i>
        </div>
      <div class="icon-box">
          <img src="assets/img/icons/renewable-home.png" alt="Renewable Home">
          <h3><a href="">Renewable Home</a></h3>
        </div>
        <div class="icon-box">
            <img src="assets/img/icons/smart-city.png" alt="Smart City">
          <h3><a href="">Smart City</a></h3>
        </div>
        <div class="icon-box">
            <img src="assets/img/icons/green-home.png" alt="Green Home">
          <h3><a href="">Green Home</a></h3>
        </div>
        <div class="icon-box">
            <img src="assets/img/icons/home-office.png" alt="Home Office">
          <h3><a href="">Home Office</a></h3>
        </div>
        <div class="icon-box">
            <img src="assets/img/icons/hostel.png" alt="Hostel">
          <h3><a href="">Hostel</a></h3>
        </div>
        <div class="icon-box">
            <img src="assets/img/icons/lakefront.png" alt="Lakefront">
          <h3><a href="">Lakefront</a></h3>
        </div>
        <div class="icon-box">
            <img src="assets/img/icons/vegan.png" alt="Vegan">
          <h3><a href="">Vegan</a></h3>
        </div>
        <div class="icon-box">
            <img src="assets/img/icons/sushi.png" alt="Sushi">
          <h3><a href="">Sushi</a></h3>
        </div>
        <div class="icon-box">
            <img src="assets/img/icons/home-tutor.png" alt="Home Tutor">
          <h3><a href="">Home Tutor</a></h3>
        </div>
        <div class="icon-box">
            <img src="assets/img/icons/farm-house.png" alt="Farm House">
          <h3><a href="">Farm House</a></h3>
        </div>
        <div class="icon-box">
            <img src="assets/img/icons/hotel.png" alt="Hotel">
          <h3><a href="">Hotel</a></h3>
        </div>
        <div class="icon-box">
            <img src="assets/img/icons/country-home.png" alt="Country Home">
          <h3><a href="">Country Home</a></h3>
        </div>
        <div class="icon-box">
            <img src="assets/img/icons/cabin-house.png" alt="Cabin House">
          <h3><a href="">Cabin House</a></h3>
        </div>
        <div class="icon-box">
            <img src="assets/img/icons/camper.png" alt="Camper">
          <h3><a href="">Camper</a></h3>
        </div>
        <div class="icon-box">
            <img src="assets/img/icons/private-home.png" alt="Private Home">
          <h3><a href="">Private Home</a></h3>
        </div>
        <div class="icon-box">
            <img src="assets/img/icons/student.png" alt="Student">
          <h3><a href="">Student</a></h3>
        </div>
        <div class="icon-box">
            <img src="assets/img/icons/team.png" alt="Team">
          <h3><a href="">Team</a></h3>
        </div>
        <div class="icon-box">
            <img src="assets/img/icons/cowork.png" alt="Cowork">
          <h3><a href="">Cowork</a></h3>
        </div>
        <div class="icon-box">
            <img src="assets/img/icons/private.png" alt="Private">
          <h3><a href="">Private</a></h3>
        </div>
        <div class="slideRight d-flex align-items-center justify-content-center">
          <i class='bx bx-right-arrow-alt'></i>
        </div>
    </div>

  </div>
</section><!-- End Hero -->

    <!-- popular listings start -->
  <section id="listings" class="listings">
      <div class="container" data-aos="fade-up">
          <div class="row">
              <div class="mb-4 d-flex align-items-center justify-content-between">
                  <div class="heading">
                      <h4>Most Popular Hosts Tutors</h4>
                      <p>book your next stay with amazing host tutors.</p>
                  </div>
                  
                  <div class="icons">
                      <a href="index.html" class="btn btn-black-outline">Listing/Map</a>
                      <button class="btn btn-black-outline" data-target="#filtersModal" data-toggle="modal">Filters</button>
                  </div>
                  
              </div>
          </div>
          <div id="map">
              <div style="width: 100%"><iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=Elabd%20technologies+(Elabd%20technologies)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="800" frameborder="0"></iframe></div>
          </div>
      </div>
  </section>

</main><!-- End #main -->
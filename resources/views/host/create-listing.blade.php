@extends('hometheme')
@section('content')
<style>
    .card {
        border: 0px !important;
    }

    .loi {
        display: flex;
        justify-content: space-between;
    }
    .mdy{
        font-size: 20px;
    font-weight: 600;
    border: 1px solid;
    padding: 5px
    }
    .mdy2{
        font-size: 20px;
    font-weight: 600;
    border: 0px solid;
    padding: 5px
    }
</style>
<main id="main">

    <!-- popular listings start -->
    <section class="create-listing">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h4>Create a New Listing</h4>
                        </div>
                        <div class="card-body">
                            <!--  Title of Listing  -->
                            <div class="row">
                                <div class="col">
                                    <h3>Title of Listing</h3>
                                </div>
                                <div class="col">
                                    <input type="radio">
                                    <label>Stay & Learn</label>
                                </div>
                                <div class="col">
                                    <input type="radio">
                                    <label>Stay For Event</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h3>Listing Name</h3>
                                </div>
                                <div class="col">
                                    <input type="text">
                                </div>
                                <div class="col">
                                    <input type="text">
                                </div>
                            </div>
                            <hr>
                            <!--  Maximum Guest Allowed  -->
                            <div class="item">
                                <h3>Language of Instruction</h3>
                                <div class="row">
                                    <div class="col loi">
                                        <span>
                                            <input type="radio">
                                            <label>English</label></span><span>
                                            <input type="radio">
                                            <label>French</label></span><span>
                                            <input type="radio">
                                            <label>German</label></span><span>
                                            <input type="radio">
                                            <label>Spanish</label></span><span>
                                            <input type="radio">
                                            <label>Turkish</label></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col loi">
                                        <span>
                                            <input type="radio">
                                            <label>Russian</label></span><span>
                                            <input type="radio">
                                            <label>Polish</label></span><span>
                                            <input type="radio">
                                            <label>Arabic</label></span><span>
                                            <input type="radio">
                                            <label>Dutch</label></span><span>
                                            <input type="radio">
                                            <label>Chinese</label></span>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <!--  Listing Property Type  -->
                            <div class="item">
                                <h3>What guest will learn (only for stay & learn)</h3>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" disabled placeholder="Location 1">
                                    </div>
                                    <div class="col">
                                        <input type="text" disabled placeholder="Location 2">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" disabled placeholder="Location 3">
                                    </div>
                                    <div class="col">
                                        <input type="text" disabled placeholder="Location 4">
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <h3>Learn Location (Where is the Learning Place? Select one)</h3>
                                <div class="row">
                                    <div class="col">
                                        <input type="radio">
                                        <label>B&B only</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio">
                                        <label>B&B and office</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio">
                                        <label>B&B and farm</label>
                                    </div>
                                    <div class="col">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="row">
                                        <div class="col">
                                            <input type="radio">
                                            <label>B&B and outdoor</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio">
                                            <label>B&B and in the workshop</label>
                                        </div>
                                        <div class="col">
                                        </div>
                                        <div class="col">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <h3>About the B&B Listing </h3>
                                        <textarea placeholder="Tell guests what this stay & learn / stay for Event"></textarea>


                                    </div>

                                    <div class="col">
                                        <h3>Listing photo & video</h3>
                                        <div class="details-block">
                                            <div class="d-flex align-items-center justify-content-between">
                                            </div>
                                            <div class="details-content">
                                                <div class="guest-block d-flex justify-content-between">
                                                    <div class="text-center">
                                                        <img src="assets/img/hotels/hotel-2.png">
                                                    </div>
                                                    <div class="text-center">
                                                        <img src="assets/img/hotels/hotel-3.png">
                                                    </div>
                                                    <div class="text-center">
                                                        <img src="assets/img/hotels/hotel-3.png">
                                                    </div>
                                                    <div class="text-center">
                                                        <!-- <img src="assets/img/hotels/hotel-3.png">
                                 -->
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h3>Location </h3>
                                        <div class="row">
                                            <div class="col">
                                                <select>
                                                    <option> Select Country </option>
                                                    <option> India </option>
                                                    <option> Australia </option>
                                                    <option> USA </option>

                                                </select>
                                            </div>
                                            <div class="col">
                                                <select>
                                                    <option> Select State </option>
                                                    <option> Gujarat </option>
                                                    <option> Maharastra </option>
                                                    <option> Rajasthan </option>

                                                </select>
                                            </div>
                                            <div class="col">
                                                <select>
                                                    <option> Select City </option>
                                                    <option> Mehsana </option>
                                                    <option> Ahmedabad </option>
                                                    <option> Surat </option>

                                                </select>
                                                <button>map</button>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col">
                                        <h3>Property Type</h3>
                                        <select>
                                            <option>Apartment</option>
                                            <option>Row House</option>
                                            <option>Bunglow</option>

                                        </select>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h3>Maximum Number of Guests(Adults)</h3>
                                        <select>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>

                                        </select>
                                        <div class="details-block">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h3>Where Guest will sleep </h3>
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
                                    </div>
                                    <div class="col">
                                        <h3>Ideal Guest</h3>
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio">
                                                Students
                                            </div>
                                            <div class="col">
                                                <input type="radio">
                                                Tourists
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <input type="radio">
                                                Founders
                                            </div>
                                            <div class="col">
                                                <input type="radio">
                                                Employees
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <input type="radio">
                                                Family
                                            </div>
                                            <div class="col">
                                                <input type="radio">
                                                Gen Z
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <input type="radio">
                                                Digital Workers
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <input type="radio">
                                                Backpackers
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="item">
                                    <h3>What is included? (Select freebies you give guests)</h3>
                                    <div class="row">
                                        <div class="col loi">
                                            <span>
                                                <input type="radio">
                                                <label>Breakfast</label></span><span>
                                                <input type="radio">
                                                <label>Dinner</label></span><span>
                                                <input type="radio">
                                                <label>Snacks</label></span><span>
                                                <input type="radio">
                                                <label>City Tour</label></span><span>
                                                <input type="radio">
                                                <label>Airport pick-up/drop off</label></span>


                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col loi">
                                            <span>
                                                <input type="radio">
                                                <label>Document Draft</label></span><span>
                                                <input type="radio">
                                                <label>Fre event tickets</label></span><span>
                                                <input type="radio">
                                                <label>Free parking tickets</label></span><span>
                                                <input type="radio">
                                                <label>Cycling</label></span><span>
                                                <input type="radio">
                                                <label>co-cook</label></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col loi">
                                            <span>
                                                <input type="radio">
                                                <label>City Walk</label></span><span>
                                                <input type="radio">
                                                <label>Free toiletries</label></span><span>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="details-block">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h3>Previous Videos (upload videos of Events & Tutorials) </h3>
                                    </div>
                                    <div class="details-content">
                                        <div class="guest-block d-flex justify-content-between">
                                            <div class="text-center">
                                                <img src="assets/img/hotels/hotel-2.png">
                                                <p>Title 1</p>
                                            </div>
                                            <div class="text-center">
                                                <img src="assets/img/hotels/hotel-3.png">
                                                <p>Title 1</p>

                                            </div>
                                            <div class="text-center">
                                                <img src="assets/img/hotels/hotel-3.png">
                                                <p>Title 1</p>

                                            </div>
                                            <div class="text-center">
                                                <img src="assets/img/hotels/hotel-2.png">
                                                <p>Title 1</p>

                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn-primary">Add More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

<hr>
<div class="row">
    <div class="col">
      
    <div class="col">
    </div>
</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


</main><!-- End #main -->
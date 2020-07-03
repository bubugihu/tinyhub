@extends('users.layout.layout')
@section('content')
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="mask flex-center">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-7 col-12 order-md-1 order-2">
                <h4>Slider 1</h4>
                <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                  necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                <a class="btn" href="#">BUY NOW</a> </div>
                <div class="col-md-5 col-12 order-md-2 order-1"><img src="{{url("img/headphone-slider2.png")}}" class="mx-auto" alt="slide"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="mask flex-center">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-7 col-12 order-md-1 order-2">
                <h4>Slider 2</h4>
                <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                  necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                <a class="btn" href="#">BUY NOW</a> </div>
              <div class="col-md-5 col-12 order-md-2 order-1"><img src="{{url("img/headphone-slider1.png")}}" class="mx-auto" alt="slide"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="mask flex-center">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-7 col-12 order-md-1 order-2">
                <h4>Slider 3</h4>
                <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                  necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                <a class="btn" href="#">BUY NOW</a> </div>
              <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/DGkR4OQ.png" class="mx-auto" alt="slide"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
    <!-- Section-Homepage 1 -->
    <section class="hm-1">
        <div class="services-block">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 d-flex justify-content-center justify-content-lg-start">
                  <div class="item d-flex align-items-center">
                    <div class="icon dx"><i class="fas fa-shipping-fast"></i></div>
                    <div class="text">
                      <h6 class="no-margin text-uppercase">Free shipping &amp; return</h6><span>Free Shipping over $300</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-center">
                  <div class="item d-flex align-items-center">
                    <div class="icon dx"><i class="fab fa-cc-visa"></i></div>
                    <div class="text">
                      <h6 class="no-margin text-uppercase">Money back guarantee</h6><span>30 Days Money Back Guarantee</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-center">
                  <div class="item d-flex align-items-center">
                    <div class="icon dx"><i class="fas fa-phone-volume"></i></div>
                    <div class="text">
                      <h6 class="no-margin text-uppercase">020-800-456-747</h6><span>24/7 Available Support</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
    <!-- End Section-Homepage 1 -->
    <!-- Section-Homepage 2 -->
    <section class="hm-2">
        <div class="container">
            <div class="row inner-box">
                <div class="col-md-12 headtext">
                    <header class="text-center">
                        <h2 class="text-uppercase">Best Selling</h2>
                    </header>
                </div>
                <div class="col-md-3">
                    <div class="item-hp card-body card mb-3">
                        <div class="ribbon ribbon-success text-uppercase">Best</div>
                        <img src="{{url("img/headphone-slider2.png")}}" alt="" class="img-fluid" width="100%" height="auto">
                        <div class="item-pd-info m-2">
                            <h6 class="no-margin text-uppercase">Headphone 1</h6>
                            <p class="price-dt">$20.00</p>
                            <a href="#" class="cart-btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            <a href="#"><button class="buynow">BUY NOW</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-hp card-body card mb-3">
                        <div class="ribbon ribbon-success text-uppercase">Best</div>
                        <img src="{{url("img/headphone-slider1.png")}}" alt="" class="img-fluid" width="100%" height="auto">
                        <div class="item-pd-info m-2">
                            <h6 class="no-margin text-uppercase">Headphone 1</h6>
                            <p class="price-dt">$20.00</p>
                            <a href="#" class="cart-btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            <a href="#"><button class="buynow">BUY NOW</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-hp card-body card mb-3">
                        <div class="ribbon ribbon-success text-uppercase">Best</div>
                        <img src="{{url("img/headphone-slider2.png")}}" alt="" class="img-fluid" width="100%" height="auto">
                        <div class="item-pd-info m-2">
                            <h6 class="no-margin text-uppercase">Headphone 1</h6>
                            <p class="price-dt">$20.00</p>
                            <a href="#" class="cart-btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            <a href="#"><button class="buynow">BUY NOW</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-hp card-body card mb-3">
                        <div class="ribbon ribbon-success text-uppercase">Best</div>
                        <img src="{{url("img/headphone-slider1.png")}}" alt="" class="img-fluid" width="100%" height="auto">
                        <div class="item-pd-info m-2">
                            <h6 class="no-margin text-uppercase">Headphone 1</h6>
                            <p class="price-dt">$20.00</p>
                            <a href="#" class="cart-btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            <a href="#"><button class="buynow">BUY NOW</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section-Homepage 2 -->
    <!-- Section-Homepage 3 -->
    <section class="hm-3 py-5">
         <div class="container">
            <div class="row inner-box py-5 justify-content-center">
                <div class="col-md-12 headtext">
                    <header class="text-center">
                        <h2 class="text-uppercase">Our Categories</h2>
                    </header>
                </div>
                <div class="col-sm-4">
                   <!-- Card -->
                    <div class="card">
                      <!-- Card image -->
                      <div class="view overlay">
                        <img class="card-img-top" src="https://m.buro247.sg/images/lifestyle/Beoplay-H5-first-wireless-earbuds-BO-buro247-sg-CA_Buro247.sg-CR-2.jpg"
                          alt="Card image cap">
                        <a href="#!">
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                      <!-- Card content -->
                      <div class="card-body">
                        <!-- Title -->
                        <h4 class="card-title">IN EAR</h4>
                        <!-- Text -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                          content.</p>
                        <!-- Button -->
                        <a href="#" class="btn btn-outline-dark">GO TO STORE</a>
                      </div>
                    </div>
                    <!-- Card -->
                 </div>
                 <div class="col-sm-4">
                  <!-- Card -->
                   <div class="card">
                     <!-- Card image -->
                     <div class="view overlay">
                       <img class="card-img-top" src="https://cdn.mos.cms.futurecdn.net/QhSx3j8k3UAjgvrqFvZB2Z.jpg"
                         alt="Card image cap">
                       <a href="#!">
                         <div class="mask rgba-white-slight"></div>
                       </a>
                     </div>
                     <!-- Card content -->
                     <div class="card-body">
                       <!-- Title -->
                       <h4 class="card-title">ON EAR</h4>
                       <!-- Text -->
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                         content.</p>
                       <!-- Button -->
                       <a href="#" class="btn btn-outline-dark">GO TO STORE</a>
                     </div>
                   </div>
                   <!-- Card -->
                </div>
                <div class="col-sm-4">
                  <!-- Card -->
                   <div class="card">
                     <!-- Card image -->
                     <div class="view overlay">
                       <img class="card-img-top" src="https://cdn.cheatcc.com/dispatches/large/d0703191045.jpg"
                         alt="Card image cap">
                       <a href="#!">
                         <div class="mask rgba-white-slight"></div>
                       </a>
                     </div>
                     <!-- Card content -->
                     <div class="card-body">
                       <!-- Title -->
                       <h4 class="card-title">TRUE-WIRELESS</h4>
                       <!-- Text -->
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                         content.</p>
                       <!-- Button -->
                       <a href="#" class="btn btn-outline-dark">GO TO STORE</a>
                     </div>
                   </div>
                   <!-- Card -->
                </div>
            </div>
         </div>
    </section>
    <!-- End Section-Homepage 3 -->
    <!-- Section-Homepage 1 -->
    <section class="hm-break">
      <div class="services-block-2 py-5">
          <div class="container">
            <div class="row py-5">
              <div class="col-lg-12">
                <div class="item">
                  <h1 class="text-center">CHOOSE YOUR AWESOME</h1>
                </div>
                <div class="col-lg-12">
                  <div class="item">
                    <p class="text-center">MANY WAYS YOU CAN PAY BEFORE YOU PRESS PLAY</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </section>
  <!-- End Section-Homepage 1 -->
    <!-- Section-Homepage 4 -->
    <section class="hm-4">
       <div class="container">
          <div class="row inner-box justify-content-center">
                <div class="col-md-12 headtext">
                    <header class="text-center">
                        <h2 class="text-uppercase">Our Brands</h2>
                    </header>
                </div>
                <div class="col-md-2 border border-dark m-2">
                  <a href=""><img class="img-fluid" src="{{url("img/jbl.png")}}" alt="" width="100%" height="auto"></a>
                </div>
                <div class="col-md-2 border border-dark m-2">
                  <a href=""><img class="img-fluid" src="{{url("img/beats.png")}}" alt="" width="100%" height="auto"></a>
                </div>
                <div class="col-md-2 border border-dark m-2">
                  <a href=""><img class="img-fluid" src="{{url("img/sony.png")}}" alt="" width="100%" height="auto"></a>
                </div>
                <div class="col-md-2 border border-dark m-2">
                  <a href=""><img class="img-fluid" src="{{url("img/westone.png")}}" alt="" width="100%" height="auto"></a>
                </div>
                <div class="col-md-2 border border-dark m-2">
                  <a href=""><img class="img-fluid" src="{{url("img/bo.png")}}" alt=""  width="100%" height="auto"></a>
                </div>
           </div>
       </div>
    </section>
    <!-- End Section-Homepage 4 -->
    <section class="hm-5">
                <div class="testimonial-area mt-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title text-center">
                                    <h2><span>What Clients Say?</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-xl-12">
                                <div class="row testimonial-carousel">
                                    <div class="col-lg-12">
                                        <div class="testimonial style-3 card-body card">
                                            <div class="testimonial-info">
                                                <div class="testimonial-thumb">
                                                    <img src="https://www.tolmatol.com/uploads-images/bootrap-snippets-our-team/1.jpg" alt="" />
                                                </div>
                                                <div class="testimonial-name">
                                                    <h5>Alley soly</h5>
                                                    <span>Profession</span>
                                                </div>
                                            </div>
                                            <div class="testimonial-desc">
                                                <p>"Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="testimonial style-3 card-body card">
                                            <div class="testimonial-info">
                                                <div class="testimonial-thumb">
                                                    <img src="https://www.tolmatol.com/uploads-images/bootrap-snippets-our-team/2.jpg" alt="" />
                                                </div>
                                                <div class="testimonial-name">
                                                    <h5>Alley soly</h5>
                                                    <span>Profession</span>
                                                </div>
                                            </div>
                                            <div class="testimonial-desc">
                                                <p>"Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="testimonial style-3 card-body card">
                                            <div class="testimonial-info">
                                                <div class="testimonial-thumb">
                                                    <img src="https://www.tolmatol.com/uploads-images/bootrap-snippets-our-team/3.jpg" alt="" />
                                                </div>
                                                <div class="testimonial-name">
                                                    <h5>Alley soly</h5>
                                                    <span>Profession</span>
                                                </div>
                                            </div>
                                            <div class="testimonial-desc">
                                                <p>"Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought”</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="testimonial style-3 card-body card">
                                            <div class="testimonial-info">
                                                <div class="testimonial-thumb">
                                                    <img src="https://www.tolmatol.com/uploads-images/bootrap-snippets-our-team/3.jpg" alt="" />
                                                </div>
                                                <div class="testimonial-name">
                                                    <h5>Alley soly</h5>
                                                    <span>Profession</span>
                                                </div>
                                            </div>
                                            <div class="testimonial-desc">
                                                <p>"Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought”</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--testimonial ends-->
    </section>
@endsection

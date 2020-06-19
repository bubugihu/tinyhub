@extends('users.layout.layout')
@section('content')
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="mask flex-center">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-7 col-12 order-md-1 order-2">
                <h4>Dang Xuan Quang<br>
                  awesome product</h4>
                <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                  necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                <a href="#">BUY NOW</a> </div>
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
                <h4>Nguyen Duc Anh <br>
                  awesome product</h4>
                <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                  necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                <a href="#">BUY NOW</a> </div>
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
                <h4>Bui Gia Hung <br>
                  awesome product</h4>
                <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                  necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                <a href="#">BUY NOW</a> </div>
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
                            <p>$20.00</p>
                            <a href="#">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-hp card-body card mb-3">
                        <div class="ribbon ribbon-success text-uppercase">Best</div>
                        <img src="{{url("img/headphone-slider1.png")}}" alt="" class="img-fluid" width="100%" height="auto">
                        <div class="item-pd-info m-2">
                            <h6 class="no-margin text-uppercase">Headphone 1</h6>
                            <p>$20.00</p>
                            <a href="#">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-hp card-body card mb-3">
                        <div class="ribbon ribbon-success text-uppercase">Best</div>
                        <img src="{{url("img/headphone-slider2.png")}}" alt="" class="img-fluid" width="100%" height="auto">
                        <div class="item-pd-info m-2">
                            <h6 class="no-margin text-uppercase">Headphone 1</h6>
                            <p>$20.00</p>
                            <a href="#">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-hp card-body card mb-3">
                        <div class="ribbon ribbon-success text-uppercase">Best</div>
                        <img src="{{url("img/headphone-slider1.png")}}" alt="" class="img-fluid" width="100%" height="auto">
                        <div class="item-pd-info m-2">
                            <h6 class="no-margin text-uppercase">Headphone 1</h6>
                            <p>$20.00</p>
                            <a href="#">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section-Homepage 2 -->
    <!-- Section-Homepage 3 -->
    <section class="hm-3">
         <div class="container">
            <div class="row inner-box">
                <div class="col-md-12 headtext">
                    <header class="text-center">
                        <h2 class="text-uppercase">Our Categories</h2>
                    </header>
                </div>
                <div class="col-sm-4">
                   <div class="card mb-3 item d-flex align-items-end categories-s" style="background-image: url(https://www.jebiga.com/wp-content/uploads/2016/07/Bang-Olufsen-Beoplay-H5-Wireless-In-Ear-Headphones-01.jpg);background-size: cover;background-blend-mode: multiply;">
                     <div class="card-body">
                       <h5 class="card-title">Special title treatment</h5>
                       <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                       <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                   </div>
                 </div>
                 <div class="col-sm-4">
                   <div class="card mb-3 item d-flex align-items-end categories-s" style="background-image: url(https://www.jebiga.com/wp-content/uploads/2016/07/Bang-Olufsen-Beoplay-H5-Wireless-In-Ear-Headphones-02.jpg);background-size: cover;background-blend-mode: multiply;">
                     <div class="card-body">
                       <h5 class="card-title">Special title treatment</h5>
                       <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                       <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                   </div>
                 </div>
                 <div class="col-sm-4">
                   <div class="card mb-3 item d-flex align-items-end categories-s" style="background-image: url(https://www.jebiga.com/wp-content/uploads/2016/07/Bang-Olufsen-Beoplay-H5-Wireless-In-Ear-Headphones-04.jpg);background-size: cover;background-blend-mode: multiply;">
                     <div class="card-body">
                       <h5 class="card-title">Special title treatment</h5>
                       <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                       <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                   </div>
                 </div>
            </div>
         </div>
    </section>
    <!-- End Section-Homepage 3 -->
    <!-- Section-Homepage 4 -->
    <section class="hm-4">
       <div class="container">
          <div class="row inner-box">
                <div class="col-md-12 headtext">
                    <header class="text-center">
                        <h2 class="text-uppercase">Our Brands</h2>
                    </header>
                </div>
                <div class="col-md-12">
                <!-- Rounded tabs -->
                     <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center border-0 rounded-nav">
                        <li class="nav-item flex-sm-fill">
                           <a id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold active"><img src="https://i.pinimg.com/originals/8d/f5/0d/8df50d880b4c2d2cfc2aad147068cf72.png" alt="" width="50" height="auto"> Beast</a>
                        </li>
                        <li class="nav-item flex-sm-fill">
                          <a id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold"><img src="https://promptvideoservices.files.wordpress.com/2018/03/1024px-bang_and_olufsen_logo-svg-copy1.png" alt="" width="48" height="auto"> BANG & OLUFSEN</a>
                        </li>
                        <li class="nav-item flex-sm-fill">
                          <a id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold"><img src="https://logodownload.org/wp-content/uploads/2016/10/jbl-logo-6-1.png" alt="" width="60" height="auto"> JBL</a>
                        </li>
                     </ul>
    <div id="myTabContent" class="tab-content">
                     <div id="first" role="tabpanel" aria-labelledby="first-tab" class="tab-pane fade px-4 py-5 show active">
                        <div class="row">
                           <div class="col-md-3">
                             <div class="item-hp card-body card mb-3">
                                 <div class="ribbon ribbon-success text-uppercase">Best</div>
                                 <img src="{{url("img/headphone-slider2.png")}}" alt="" class="img-fluid" width="100%" height="auto">
                                 <div class="item-pd-info m-2">
                                     <h6 class="no-margin text-uppercase">Headphone 1</h6>
                                     <p>$20.00</p>
                                     <a href="#">Detail</a>
                                 </div>
                             </div>
                               </div>
                               <div class="col-md-3">
                                   <div class="item-hp card-body card mb-3">
                                       <div class="ribbon ribbon-success text-uppercase">Best</div>
                                       <img src="{{url("img/headphone-slider1.png")}}" alt="" class="img-fluid" width="100%" height="auto">
                                       <div class="item-pd-info m-2">
                                           <h6 class="no-margin text-uppercase">Headphone 1</h6>
                                           <p>$20.00</p>
                                           <a href="#">Detail</a>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-3">
                                   <div class="item-hp card-body card mb-3">
                                       <div class="ribbon ribbon-success text-uppercase">Best</div>
                                       <img src="{{url("img/headphone-slider2.png")}}" alt="" class="img-fluid" width="100%" height="auto">
                                       <div class="item-pd-info m-2">
                                           <h6 class="no-margin text-uppercase">Headphone 1</h6>
                                           <p>$20.00</p>
                                           <a href="#">Detail</a>
                                       </div>
                                   </div>
                               </div>
                <div class="col-md-3">
                    <div class="item-hp card-body card mb-3">
                        <div class="ribbon ribbon-success text-uppercase">Best</div>
                        <img src="{{url("img/headphone-slider1.png")}}" alt="" class="img-fluid" width="100%" height="auto">
                        <div class="item-pd-info m-2">
                            <h6 class="no-margin text-uppercase">Headphone 1</h6>
                            <p>$20.00</p>
                            <a href="#">Detail</a>
                        </div>
                    </div>
                </div>
         </div>
      </div>
      <div id="second" role="tabpanel" aria-labelledby="second-tab" class="tab-pane fade px-4 py-5">
         <div class="row">
            <div class="col-md-3">
                    <div class="item-hp card-body card mb-3">
                        <div class="ribbon ribbon-success text-uppercase">Best</div>
                        <img src="{{url("img/headphone-slider2.png")}}" alt="" class="img-fluid" width="100%" height="auto">
                        <div class="item-pd-info m-2">
                            <h6 class="no-margin text-uppercase">Headphone 1</h6>
                            <p>$20.00</p>
                            <a href="#">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-hp card-body card mb-3">
                        <div class="ribbon ribbon-success text-uppercase">Best</div>
                        <img src="{{url("img/headphone-slider1.png")}}" alt="" class="img-fluid" width="100%" height="auto">
                        <div class="item-pd-info m-2">
                            <h6 class="no-margin text-uppercase">Headphone 1</h6>
                            <p>$20.00</p>
                            <a href="#">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-hp card-body card mb-3">
                        <div class="ribbon ribbon-success text-uppercase">Best</div>
                        <img src="{{url("img/headphone-slider2.png")}}" alt="" class="img-fluid" width="100%" height="auto">
                        <div class="item-pd-info m-2">
                            <h6 class="no-margin text-uppercase">Headphone 1</h6>
                            <p>$20.00</p>
                            <a href="#">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-hp card-body card mb-3">
                        <div class="ribbon ribbon-success text-uppercase">Best</div>
                        <img src="{{url("img/headphone-slider1.png")}}" alt="" class="img-fluid" width="100%" height="auto">
                        <div class="item-pd-info m-2">
                            <h6 class="no-margin text-uppercase">Headphone 1</h6>
                            <p>$20.00</p>
                            <a href="#">Detail</a>
                        </div>
                    </div>
                </div>
         </div>
      </div>
      <div id="third" role="tabpanel" aria-labelledby="third-tab" class="tab-pane fade px-4 py-5">
        <div class="row">
           <div class="col-md-3">
                    <div class="item-hp card-body card mb-3">
                        <div class="ribbon ribbon-success text-uppercase">Best</div>
                        <img src="{{url("img/headphone-slider2.png")}}" alt="" class="img-fluid" width="100%" height="auto">
                        <div class="item-pd-info m-2">
                            <h6 class="no-margin text-uppercase">Headphone 1</h6>
                            <p>$20.00</p>
                            <a href="#">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-hp card-body card mb-3">
                        <div class="ribbon ribbon-success text-uppercase">Best</div>
                        <img src="{{url("img/headphone-slider1.png")}}" alt="" class="img-fluid" width="100%" height="auto">
                        <div class="item-pd-info m-2">
                            <h6 class="no-margin text-uppercase">Headphone 1</h6>
                            <p>$20.00</p>
                            <a href="#">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-hp card-body card mb-3">
                        <div class="ribbon ribbon-success text-uppercase">Best</div>
                        <img src="{{url("img/headphone-slider2.png")}}" alt="" class="img-fluid" width="100%" height="auto">
                        <div class="item-pd-info m-2">
                            <h6 class="no-margin text-uppercase">Headphone 1</h6>
                            <p>$20.00</p>
                            <a href="#">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-hp card-body card mb-3">
                        <div class="ribbon ribbon-success text-uppercase">Best</div>
                        <img src="{{url("img/headphone-slider1.png")}}" alt="" class="img-fluid" width="100%" height="auto">
                        <div class="item-pd-info m-2">
                            <h6 class="no-margin text-uppercase">Headphone 1</h6>
                            <p>$20.00</p>
                            <a href="#">Detail</a>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
               <!-- End rounded tabs -->
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

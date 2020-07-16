@extends('users.layout.layout')
@section('title', 'Home - Tinyhub')
@section('content')
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">

      @foreach($bannerGlobal as $bG)
      <div class="carousel-item @if($sttNo == 0) active @endif">
        <div class="mask flex-center">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-7 col-12 order-md-1 order-2">
                <h4>{{$bG->ban_title}}</h4>
                <p>{{$bG->ban_content}}</p>
                <a class="btn" href="{{ url('category')}}">BUY NOW</a> </div>
                <div id="abc{{$sttNo++}}" class="col-md-5 col-12 order-md-2 order-1"><img src="{{url('img/banner/'.$bG->ban_image)}}" class="mx-auto" alt="slide"></div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span></a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span></a>
</div>
    <!-- Section-Homepage 1 -->
    <section class="hm-1">
        <div class="services-block">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 d-flex justify-content-center justify-content-lg-start">
                  <div class="item d-flex align-items-center">
                    <div class="icon dx"><i class="fas fa-shipping-fast"></i></div>
                    <div class="text">
                      <h6 class="no-margin text-uppercase">Free shipping &amp; return</h6><span>Free Shipping over $30</span>
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
                {{-- <div class="ribbon ribbon-success text-uppercase">Best</div> --}}
                @foreach($productGlobal as $p)
                <div class="col-xl-3">
                  <div class="ribbon ribbon-success text-uppercase">Best Seller</div>
                  <div class="product_grid card-body card d-flex justify-content-center align-items-center">
                      <div class="product_image d-flex justify-content-center align-items-center" style="min-height: 220px;">
                          <a href="{{ url('product-detail/'.$p->id)}}" class="image ">
                              <!-- <img class="pic_2 rounded" src="img/5.jpg" alt=""> -->
                              <img class="img-fluid rounded" src="{{asset("img/feature/$p->feature_image")}}" alt="" width="200" height="auto">
                          </a>
                      </div>
                      <div class="product_content">
                          <h3 class="title"><a href="{{ url('product-detail/'.$p->id)}}">{{$p->product_title}}</a></h3>
                          <div class="price">${{$p->price}}</div>
                          <a href="{{ url('product-detail/'.$p->id)}}" class="btn btn-dark"><i class="fas fa-shopping-cart"></i> Add to cart</a>
                      </div>
                  </div>
                </div>
                @endforeach
            
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

                @foreach($categoryGlobal as $c)
                <div class="col-sm-4 mb-5">
                   <!-- Card -->
                    <div class="card">
                      <!-- Card image -->
                      <div class="view overlay">
                        <img class="card-img-top" src="https://m.buro247.sg/images/lifestyle/Beoplay-H5-first-wireless-earbuds-BO-buro247-sg-CA_Buro247.sg-CR-2.jpg"
                          alt="Card image cap">
                        <a href="{{url('searchCate/'.$c->category_name)}}">
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>
                      <!-- Card content -->
                      <div class="card-body">
                        <!-- Title -->
                        <h4 class="card-title">{{$c->category_name}}</h4>
                        <!-- Text -->
                        <p class="card-text">{{$c->description}}</p>
                        <!-- Button -->
                        <a href="{{url('searchCate/'.$c->category_name)}}" class="btn btn-outline-dark">GO TO STORE</a>
                      </div>
                    </div>
                    <!-- Card -->
                 </div>
                @endforeach
                
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

                @foreach($brandGlobal as $b)
                <div class="col-md-2 border border-dark m-2">
                  <a href="{{url('searchBrand/'.$b->brand_name)}}"><img class="img-fluid" src="{{asset('img/brands/'.$b->brand_image)}}" alt="" width="100%" height="auto"></a>
                </div>
                @endforeach
                
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

                                  @foreach($feedbackHomepage as $f)
                                    <div class="col-lg-12">
                                        <div class="testimonial style-3 card-body card">
                                            <div class="testimonial-info">
                                                <div class="testimonial-name">
                                                    <h5>{{$f->feed_name}}</h5>
                                                    <span>{{$f->feed_title}}</span>
                                                </div>
                                            </div>
                                            <div class="testimonial-desc">
                                                <p>{{$f->feed_content}}</p>
                                            </div>
                                        </div>
                                    </div>
                                  @endforeach 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--testimonial ends-->
    </section>
@endsection

@extends('users.layout.layout')
@section('title', 'About-Us')
@section('content')
<div class="hero hero-page padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-12 ">
                <h1>About Us</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ Breadcrumbs::render('about-us') }}
                </div>
            </div>
        </div>
    </div>
</div>
    <section class="about-us py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p style="text-align: justify">In Vietnam’s fast growing retail industry filled with crowded hyper markets, monotonous electronic chains and absent music outlets, comes an innovative concept store that combines fashion, technology and entertainment. TinyHub is Vietnam’s first exclusive online store for headphones, earphones and personal Audio devices featuring the world's finest headphones from brands renowned for their sound, design and style. </p><br>
                    <p style="text-align: justify">Tiny Team started TinyHub in 2020 after realising that most big retailers had little to no understanding of electronic accessories such as headphones or earphones and consumers had little understanding or options. And so, it is our commitment to personalize your listening experience as much as possible.</p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="https://cms.qz.com/wp-content/uploads/2019/11/HeadphonesMusic-e1576536772274.jpg?quality=75&strip=all&w=1600&h=900&crop=1" alt="">
                </div>
            </div><br><hr>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h1>Co-Founder</h1><br><br>
                </div>
                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5 ">
                    <div class="avatar mx-auto text-center">
                    <img src="{{url("img/quang1.jpg")}}" class="rounded-circle z-depth-1"
                        alt="" width="300">
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3 text-center">Dang Xuan Quang</h5>
                    <p class="text-uppercase blue-text text-center"><strong>Software Engineer</strong></p>
                    <p class="grey-text text-center">"Thích thì mua, không thích thì mua."</p>
                    <ul class="list-unstyled mb-0 text-center">
                        <!-- Facebook -->
                        <a class="p-2 fa-lg fb-ic text-center">
                            <i class="fab fa-facebook-f blue-text"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="p-2 fa-lg tw-ic text-center">
                            <i class="fab fa-twitter blue-text"> </i>
                        </a>
                        <!-- Instagram -->
                        <a class="p-2 fa-lg ins-ic text-center">
                            <i class="fab fa-instagram blue-text"> </i>
                        </a>
                    </ul>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                    <div class="avatar mx-auto text-center">
                    <img src="{{url("img/bu.jpg")}}" class="rounded-circle z-depth-1"
                        alt="" width="300">
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3 text-center">Bui Gia Hung</h5>
                    <p class="text-uppercase blue-text text-center"><strong>Software Engineer</strong></p>
                    <p class="grey-text text-center">"TinyHub, cứ đến mà húp."</p>
                    <ul class="list-unstyled mb-0 text-center">
                        <!-- Facebook -->
                        <a class="p-2 fa-lg fb-ic">
                            <i class="fab fa-facebook-f blue-text"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="p-2 fa-lg tw-ic">
                            <i class="fab fa-twitter blue-text"> </i>
                        </a>
                        <!-- Instagram -->
                        <a class="p-2 fa-lg ins-ic">
                            <i class="fab fa-instagram blue-text"> </i>
                        </a>
                    </ul>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                    <div class="avatar mx-auto text-center">
                    <img src="{{url("img/na.jpg")}}" class="rounded-circle z-depth-1"
                        alt="" width="300">
                    </div>
                    <h5 class="font-weight-bold mt-4 mb-3 text-center">Nguyen Duc Anh</h5>
                    <p class="text-uppercase blue-text text-center"><strong>Software Engineer</strong></p>
                    <p class="grey-text text-center">"Được thì bán, không được thì thôi."</p>
                    <ul class="list-unstyled mb-0 text-center">
                        <!-- Facebook -->
                        <a class="p-2 fa-lg fb-ic">
                            <i class="fab fa-facebook-f blue-text"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="p-2 fa-lg tw-ic">
                            <i class="fab fa-twitter blue-text"> </i>
                        </a>
                        <!-- Instagram -->
                        <a class="p-2 fa-lg ins-ic">
                            <i class="fab fa-instagram blue-text"> </i>
                        </a>
                    </ul>
                </div>
                <!-- Grid column -->
            </div>
        </div>
    </section>
@endsection

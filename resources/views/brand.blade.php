@extends('users.layout.layout')
@section('title', 'Brands')
@section('content')
<div class="hero hero-page padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-9 ">
                <h1>Brands</h1>
                </p>
            </div>
        </div>
    </div>
</div>
<section class="brand py-5">
    <div class="container card card-body py-5">
        @foreach ($b as $b)
            @if(($b->id % 2) != 0)
                <div class="row py-5 p-4">
                    <div class="col-md-12">
                        <div class="row py-3">
                            <div class="col-md-4 text-center">
                                <img class="img-fluid" src="{{url("img/feature/". $b->brand_image)}}" width="100%" alt="">
                            </div>
                            <div class="col-md-8">
                                <h1 class="text-uppercase">{{$b->brand_name}}</h1>
                                <p style="text-align: justify;">{{$b->description}}</p>
                            </div>
                        </div>
                    </div> 
                @else
                    <div class="col-md-12">
                        <div class="row py-3">
                            <div class="col-md-8">
                                <h1 class="text-uppercase">{{$b->brand_name}}</h1>
                                <p style="text-align: justify;">{{$b->description}}</p>
                            </div>
                            <div class="col-md-4 text-center"><img class="img-fluid" src="{{url("img/feature/". $b->brand_image)}}" width="100%" alt=""></div>
                        </div>
                    </div> 
                </div>
            @endif
        @endforeach 

        {{-- <!-- Brand 1 -->
        @foreach ($b as $b)
            @if(($b->id % 2) != 0)
                <div class="row py-5">
                    <div class="col-md-4 text-center">
                        <img class="img-fluid" src="{{url("img/feature/". $b->brand_image)}}" width="100%" alt="">
                    </div>
                    <div class="col-md-8">
                        <h1 class="text-uppercase">{{$b->brand_name}}</h1>
                        <p style="text-align: justify;">{{$b->description}}</p>
                    </div>
                @else
                    <div class="col-md-8">
                        <h1 class="text-uppercase">{{$b->brand_name}}</h1>
                        <p style="text-align: justify;">{{$b->description}}</p>
                    </div>
                    <div class="col-md-4 text-center"><img class="img-fluid" src="{{url("img/feature/". $b->brand_image)}}" width="100%" alt=""></div>
                </div>
            @endif
        @endforeach --}}
        <!-- End Brand 2 -->
        {{-- <!-- Brand 3 -->
        <div class="row py-5">
            <div class="col-md-4 text-center"><img class="img-fluid" src="{{asset("img/bando.png")}}" width="100%" alt=""></div>
            <div class="col-md-8">
                <h1 class="text-uppercase">Bang & Olufsen</h1>
                <p style="text-align: justify;">Bang & Olufsen (B&O) (stylized as BANG & OLUFSEN) is a high end luxury Danish consumer electronics company that designs and manufactures audio products, television sets, and telephones. It was founded in 1925 by Peter Bang and Svend Olufsen, who designed a radio to work with alternating current, a product of significance at a time when most radios were still running on batteries.

                    In May 2015, HARMAN International Industries (which later became a subsidiary of Samsung), announced the completion of its acquisition of Bang & Olufsen Automotive car audio business. In March 2017, Tymphany, an audio ODM based in Hong Kong and with manufacturing operations in Dongchen, announced the acquisition of the engineering and manufacturing operation in the Czech Republic from Bang & Olufsen</p>
            </div>
        </div>
        <!-- End Brand 3 -->
        <!-- Brand 4 -->
        <div class="row py-5">
            <div class="col-md-8">
                <h1 class="text-uppercase">JBL</h1>
                <p style="text-align: justify;">JBL is an American company that manufactures audio equipment, including loudspeakers and headphones. There are two independent divisions within the company; JBL Consumer produces audio equipment for the consumer home market, while the JBL Professional produces professional equipment for the studio, installed sound, tour sound, portable sound (production and DJ), and cinema markets. JBL is owned by Harman International Industries, a subsidiary of South Korean company Samsung Electronics. JBL was founded by James Bullough Lansing (1902–1949) who was an American audio engineer and loudspeaker designer most notable for establishing two audio companies that bear his name, Altec Lansing and JBL, the latter taken from his initials.</p>
            </div>
            <div class="col-md-4 text-center"><img class="img-fluid" src="{{asset("img/jbl-logo.png")}}" width="100%" alt=""></div>
        </div>
        <!-- End Brand 4 -->
        <!-- Brand 5 -->
        <div class="row py-5">
            <div class="col-md-4 text-center"><img class="img-fluid" src="{{asset("img/westone-logo.jpeg")}}" width="100%" alt=""></div>
            <div class="col-md-8">
                <h1 class="text-uppercase">Westone</h1>
                <p style="text-align: justify;">Established in 1959, Westone Laboratories has more than 55 years of experience delivering premium in-ear solutions for critical listening applications. Westone is the largest manufacturer of custom ear pieces in the world and was the first to design and manufacture a balanced armature driver earphone. With hearing healthcare and music specialists on our research and production teams, Westone invented the most ergonomic monitor design which provides the most comfortable, best fitting and quietest earphones on the market. The largest names in music turn to Westone in-ear monitors for on-stage use, just as U.S. Air Force fighter pilots depend on Westone’s ACCES® in-ear communications system for mission-critical noise isolation, hearing protection and two-way communication. It is our experience, our products, and our people that make Westone The In-Ear Experts®.</p>
            </div>
        </div>
        <!-- End Brand 5 --> --}}
    </div>
</section>
@endsection

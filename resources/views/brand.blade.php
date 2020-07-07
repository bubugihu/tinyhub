@extends('users.layout.layout')
@section('title', 'Brands - Tinyhub')
@section('content')
<div class="hero hero-page padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-12">
                <h1>Brands</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ Breadcrumbs::render('brand') }}
                </div>
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
    </div>
</section>
@endsection

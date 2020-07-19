@extends('users.layout.layout')
@section('title','Payment - Tinyhub')
@section('content')
    <div class="hero hero-page padding-small">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-12 ">
                    <h1>Payment</h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {{ Breadcrumbs::render('payment') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="payment py-3">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-7">
                    <h5><em>You can pay by cash, bank card, or bank transfer.</em></h5>
                    <img class="img-fluid" src="{{url("img/payment-method.png")}}" alt="" width="450"><br><br>
                    <p><b>Account Holder:</b> TinyHub</p>
                    <p><b>Vietcombank HCM</b></p>
                    <p>Number Account: 0531002483169</p>
                    <p><b>Sacombank HCM</b></p>
                    <p>Number Account: 0531002483169</p>
                </div>
                <div class="col-md-5 text-right">
                    <img class="img-fluid" src="{{url("img/payment-image.png")}}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection

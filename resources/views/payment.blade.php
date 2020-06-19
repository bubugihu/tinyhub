@extends('users.layout.layout')
@section('content')
    <section class="payment py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Payment</h1>
                    <hr>
                </div>
            </div>
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

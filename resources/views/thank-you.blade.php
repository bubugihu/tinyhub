@extends('users.layout.layout')
@section('title', 'Thank You')
@section('content')
    <section class="thanyou">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-md-12 py-5 text-center">
                    <img src="{{url("img/check-icon.png")}}" alt="" width="150" height="auto">
                    <h1 style="font-weight: 200;">Thank you for your purchase</h1>
                    <p class="text-muted">You will recieve your orders as soon as possible</p>
                </div>
            </div>
            <div class="text-center"><a href="{{ route('homepage') }}" class="btn btn-success">Back to Homepage</a></div>
        </div>
    </section>
@endsection
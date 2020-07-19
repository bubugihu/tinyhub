@extends('errors::minimal-2')
@section('title', __('Not Found'))
@section('message',)

                <img class="img-fluid" src="{{asset('img/404.gif')}}" alt="" width="70%"><br>
                <a href="{{route('homepage')}}"><button class="btn home-btn">Go to homepage</button></a>
@endsection

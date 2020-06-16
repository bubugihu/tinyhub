@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Something is wrong')) 
@section('image')
<img src="{{url("img/1.jpg")}}" alt="">

@endsection

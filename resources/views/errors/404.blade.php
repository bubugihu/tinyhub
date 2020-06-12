@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Sex Content')) 
@section('image')
<img src="{{url("img/1.jpg")}}" alt="">

@endsection

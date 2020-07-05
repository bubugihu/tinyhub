@extends('admin.layout.layout')
@section('title', 'Product Details')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
    <div class="container-fluid px-xl-5">
        <section class="py-5">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h6 class="text-uppercase mb-0">Product Details </h6>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <!-- Image Feature And Gallery -->
                                    <div class="col-md-6">
                                        <div class="product-slider">
                                            <div class="demo">
                                                <div class="item d-flex justify-content-center">
                                                    <div class="clearfix " style="width:100%; height: auto;">
                                                        <ul id="image-gallery" class="gallery list-unstyled cS-hidden" style="list-style: none outside none; padding-left: 0; margin: 0;">
                                                            @foreach($gallery as $gallery)
                                                            <li data-thumb="{{asset("img/gallery/$gallery->product_gallery")}}">
                                                                <img src="{{asset("img/gallery/$gallery->product_gallery")}}" width="200px" height="auto" class="rounded mx-auto d-block" />
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Info   -->
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label text-uppercase">Product ID</label>
                                                    <input type="text" class="form-control" placeholder="{{$pro->id}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label text-uppercase">Product Title</label>
                                                    <input type="text" class="form-control" placeholder="{{$pro->product_title}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-control-label text-uppercase">Price</label>
                                                    <input type="text" class="form-control" placeholder="{{$pro->price}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sold Out, Status, Category, Brand -->
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Sold Out</label>
                                            <input type="text" class="form-control" placeholder="{{$pro->sold_out}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Status</label>
                                            <input type="text" class="form-control" placeholder="{{$pro->status}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Category</label>
                                            <input type="text" class="form-control" placeholder="{{$pro->category_name}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Brand</label>
                                            <input type="text" class="form-control" placeholder="{{$pro->brand_name}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <!-- Warranty Period, Create At -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Warranty Period</label>
                                            <input type="text" class="form-control" placeholder="{{$pro->warranty_period}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Create At</label>
                                            <input type="text" class="form-control" placeholder="{{$pro->created_at}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <!-- Short Description -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Short Description</label>
                                            <input type="text" class="form-control" placeholder="{{$pro->short_descriptions}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <!-- Long Description -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label text-uppercase">Long Description</label>
                                            <textarea name="" id="" rows="5" class="form-control" placeholder="{{$pro->short_descriptions}}" readonly></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{url('admin/product/listProduct')}}"><button type="button" class="btn btn-primary">Back</button></a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Slider -->
    <script>
        $(document).ready(function() {
            $("#content-slider").lightSlider({
                loop: true,
                keyPress: true
            });
            $('#image-gallery').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 9,
                slideMargin: 0,
                speed: 500,
                auto: true,
                loop: true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });
        });
    </script>
    @endsection
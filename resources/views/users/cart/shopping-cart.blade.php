@extends('users.layout.layout')
@section('title','Shopping-Cart')
@section('content')
<div class="hero hero-page padding-small">
  <div class="container">
    <div class="row d-flex">
      <div class="col-lg-12 ">
        <h1>Cart</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
            {{ Breadcrumbs::render('cart') }}
        </div>
    </div>
    </div>
  </div>
</div>
<section class="cart">
  <div class="container">
    <div class="basket">
      <div class="basket-holder">
        <div class="basket-header ">
          <div class="row">
            <div class="col-1">
              <h6 class="text-center">No.</h6>
            </div>
            <div class="col-4">
              <h6>Product</h6>
            </div>
            <div class="col-2">
              <h6>Price</h6>
            </div>
            <div class="col-2">
              <h6 class="ml-3">Quantity</h6>
            </div>
            <div class="col-2">
              <h6>Amount</h6>
            </div>
            <div class="col-1 text-center">
              <h6>Remove</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="basket-body">
        <!-- Product-->

        @foreach(Cart::content() as $cart)
        <div class="item">
          <div class="row d-flex align-items-center">
                <div class="col-1">
                  <h6 class="text-center ml-4">{{++$stt}}</h6>
                </div>
                <div class="col-4">
                  <div class="d-flex align-items-center"><img src="{{asset('img/feature/'.$cart->options->image)}}" alt="..." class="img-fluid" width="60" height="60">
                    <div class="title ml-3"><a href="detail.html">
                        <h5>{{$cart->name}}</h5><span class="text-muted">{{$cart->options->category}}</span>
                      </a></div>
                  </div>
                </div>
                <div class="col-2"><span>$</span><input type="number" class="quantity" value="{{$cart->price}}" id="price"></div>
                <div class="col-2">
                  <div class="d-flex align-items-center">
                    <div class="quantity d-flex align-items-center">
                      {{--btn Decre item--}}
                      <form action="{{url('cart/shopping/decreItem')}}" method="POST">
                        @csrf
                        <input type="number" style="display:none" name="qtyItemCart" value="{{$cart->qty}}">
                        <input type="hidden" style="display:none" name="idDecreCart" value="{{$cart->rowId}}">
                        <button type="submit" class="dec-btn">-</button>
                      </form>

                      {{--btn Incre item--}}
                      <input type="number" value="{{$cart->qty}}" class="quantity-no" id="quantity" min="1">
                      <form action="{{url('cart/shopping/increItem')}}" method="POST">
                        @csrf
                        <input type="number" style="display:none" name="qtyItemCart" value="{{$cart->qty}}">
                        <input type="hidden" style="display:none" name="idIncreCart" value="{{$cart->rowId}}">
                        <button type="submit" class="inc-btn">+</button>
                      </form>

                    </div>
                  </div>
                </div>
                <div class="col-2"><span>$</span><span>{{number_format($cart->price*$cart->qty, 0, '.', ',')}}</span></div>
                <div class="col-1 ">
                      <a href="{{url('cart/shopping/removeItem/'.$cart->rowId)}}" class="badge badge-danger p-2" onclick="return confirm('Do you want to remove ?');"><i class="delete fa fa-trash text-white"></i></a>
                </div>
            </div>
          </div>
          <hr>
      @endforeach
    </div>
  </div>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-12 justify-content-end">
            <div class="CTAs d-flex align-items-center justify-content-center justify-content-md-end flex-column flex-md-row">
              <div class="total-stick">
                <strong class="mr-5"><span class="subtt">SubTotal:</span></strong>
                <strong class="mr-4"><span class="subtt">${{Cart::pricetotal()}}</span></strong></div>
              </div>
          </div>
          </div>
      </div>
</section>
<section class="order-details no-padding-top"> 
    <div class="container">
      <div class="row">                         
        <div class="col-lg-12 text-center CTAs">
          <a href="{{route('homepage')}}" class="btn btn-dark" style="margin-right: 30px" >Back to Homepage</a>
          <a href="{{ url('checkout') }}" class="btn btn-template">Proceed to checkout</a></div>
      </div>
    </div>
</section>
@endsection
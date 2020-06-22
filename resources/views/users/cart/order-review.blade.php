@extends('users.layout.layout')
@section('title','Order-Review')
@section('order-review')
<div class="hero hero-page padding-small">
  <div class="container">
      <div class="row d-flex">
          <div class="col-lg-9 ">
              <h1>Order Review</h1>
          </div>
      </div>
  </div>
</div>
<section class="cart">
    <div class="container">
      <div class="basket">
        <div class="basket-holder">
          <div class="basket-header tab-content">
            <div class="row">
              <div class="col-5">Product</div>
              <div class="col-2">Price</div>
              <div class="col-3">Quantity</div>
              <div class="col-2">Amount</div>
              
            </div>
          </div>
          <div class="basket-body">
            <!-- Product-->
            <div class="item mt-4">
              <div class="row d-flex align-items-center">
                <div class="col-5">
                  <div class="d-flex align-items-center"><img src="{{asset('img/gallery/true-wireless-jbl-4-4.png')}}" alt="..." class="img-fluid" width="80">
                    <div class="title ml-4"><a href="detail.html">
                        <h5>True wireless JBL</h5><span class="text-muted">Color: Black</span></a></div>
                  </div>
                </div>
                <div class="col-2"><span>$65.00</span></div>
                <div class="col-3">
                  <div class="d-flex align-items-center">
                    <div class="quantity d-flex align-items-center">
                      <input type="text" value="4" class="quantity-no">
                    </div>
                  </div>
                </div>
                <div class="col-2"><span>$325.00</span></div>
              </div>
              <div class="row d-flex align-items-center">
                <div class="col-5">
                </div>
                <div class="col-2"></div>
                
                <div class="col-3">
                  <div class="d-flex align-items-center">
                    <div class="title text-primary">
                      Order Total
                    </div>
                  </div>
                </div>
                <div class="col-2"><span class="text-primary">$325.00</span></div>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
    <div class="container">
    <div class="CTAs d-flex align-items-center justify-content-center justify-content-md-end flex-column flex-md-row">
      <a href="{{ route('homepage') }}" class="btn btn-template-outlined wide">Back to Homepage</a>
    <a href="{{ route('print')}}" class="btn btn-template wide" >Print Invoice</a>
    </div>
    </div>
</section>
@endsection
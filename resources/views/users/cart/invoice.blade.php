@extends('users.layout.layout')
@section('invoice')
<section class="shopping-cart">
    <div class="container">
      <div class="basket">
        <div class="basket-holder">
          <div class="basket-header">
            <div class="row">
              <div class="col-5">Product</div>
              <div class="col-2">Price</div>
              <div class="col-3">Quantity</div>
              <div class="col-2">Total</div>
              
            </div>
          </div>
          <div class="basket-body">
            <!-- Product-->
            <div class="item">
              <div class="row d-flex align-items-center">
                <div class="col-5">
                  <div class="d-flex align-items-center"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/shirt.png" alt="..." class="img-fluid" width="80">
                    <div class="title"><a href="detail.html">
                        <h5>Loose Oversised Shirt</h5><span class="text-muted">Size: Large</span></a></div>
                  </div>
                </div>
                <div class="col-2"><span>$65.00</span></div>
                <div class="col-3">
                  <div class="d-flex align-items-center">
                    <div class="quantity d-flex align-items-center">
                      <div class="dec-btn">-</div>
                      <input type="text" value="4" class="quantity-no">
                      <div class="inc-btn">+</div>
                    </div>
                  </div>
                </div>
                <div class="col-2"><span>$325.00</span></div>
                
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="CTAs d-flex align-items-center justify-content-center justify-content-md-end flex-column flex-md-row"><a href="shop.html" class="btn btn-template-outlined wide">Print Invoice</a><a href="#" class="btn btn-template wide">Back to Homepage</a></div>
    </div>
</section>
@endsection
@extends('users.layout.layout')
@section('print')
<section class="shopping-cart">
    <h3 class="print-invoice-title">Invoice</h3>
    <h6 class="print-invoice-title">Order-ID: abc</h6>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Thong tin khach hang</h5>
                <p>ten</p>
                <p>so dt</p>
                <p>dia chi giao hang</p>
            </div>
            <div class="col-md-6">
                <h5>Thong tin don hang</h5>
                <p>ngay dat hang</p>
                <p>phuong thuc thanh toan</p>
            </div>
        </div>
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
            <div class="item mt-4">
              <div class="row d-flex align-items-center">
                <div class="col-5">
                  <div class="d-flex align-items-center"><img src="https://d19m59y37dris4.cloudfront.net/hub/1-4-2/img/shirt.png" alt="..." class="img-fluid" width="80">
                    <div class="title ml-4"><a href="detail.html">
                        <h5>Loose Oversised Shirt</h5><span class="text-muted">Size: Large</span></a></div>
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
            </div>  
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="CTAs d-flex align-items-center justify-content-center justify-content-md-end flex-column flex-md-row"><a href="{{ route('homepage') }}" class="btn btn-template-outlined wide">Back to Homepage</a><a href="#" class="btn btn-template wide">Print Invoice</a></div>
    </div>
</section>
@endsection
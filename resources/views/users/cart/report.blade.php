@extends('users.layout.layout')
@section('title', 'Report')
@section('content')
  <section class="report p-5">
      <div class="container card card-body">
          <div class="row p-4">
            <div class="col-md-6 text-left" style="line-height: 0.7;">
              <img class="img-fluid" src="{{url("img/tinyhub-logo.png")}}" alt="" width="160" height="auto">
              <hr>
              <p>Website: wwww.tinyhub.com</p>
              <p>Phone Number: 020-800-456-747</p>
              <p>Email: tinyhub@gmail.com</p>
            </div>
            <div class="col-md-6 text-left" style="line-height: 0.7;">
              <h2 style="color: #f47535;">Invoice</h2><br>  
              <hr>
              <p>Order Id: 09201</p>
              <p>Created: 20/07/2020</p>
              <p>Payment Method: COD</p>
            </div>
          </div>
          <div class="row p-4">
            <div class="col-md-6" style="line-height: 0.7;">
                <h4>Customer Information</h4>
                <hr>
                <p>Fullname: Jason Dang</p>
                <p>Email: jason@gmail.com</p>
                <p>Phone: 0908099871</p>
                <p>Address: 300 CMT8 Phuong 1 Quan 3</p>
            </div>
            <div class="col-md-6" style="line-height: 0.7;">
                <h4>Receiver Information</h4>
                <hr>
                <p>Fullname: Jason Dang</p>
                <p>Phone: 0908099871</p>
                <p>Receiving address: 300 CMT8 Phuong 1 Quan 3</p>
            </div>
          </div>
          <div class="row p-4">
            <div class="col-md-12">
              <table class="table table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product ID</th>
                    <th scope="col">Product Title</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>1</td>
                    <td>JBL True-Wireless</td>
                    <td>2</td>
                    <td>$20</td>
                    <td>$40</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th></th>
                    <td colspan="4" class="text-right text-danger text-uppercase">Total</td>
                    <td class="text-red">$40</td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
          <div class="row p-4">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
              <a href=""><button type="submit" class="btn login-btn">Print</button></a>
              <a href="{{route("homepage")}}"><button type="reset" class="btn btn-dark">Back to homepage</button></a>
            </div>
            <div class="col-md-3"></div>
          </div>
      </div>
  </section>
@endsection

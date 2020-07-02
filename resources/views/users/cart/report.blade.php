<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <!-- FONT AWESOME--->
    <link rel="stylesheet" href="{{asset("plugin/fontawesome-free/css/all.min.css")}}">
    <!-- BOOTSTRAP--->
    <link rel="stylesheet" href="{{asset("plugin/bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/orionicon.css")}}">
    <!-- GOOGLE FONT--->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;700&display=swap" rel="stylesheet">
    <!-- OWN CSS--->
    <link rel="stylesheet" href="{{asset("css/custom-frontpage.css")}}">
    <link rel="stylesheet" href="{{asset("css/custom.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.default.css")}}">
    <!-- TESTIMONIAL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <!--data table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <!-- Na --->
    <link rel="stylesheet" href="{{asset("css/product-details.css")}}">
    <link rel="stylesheet" href="{{asset("css/product-list.css")}}">
    <link rel="stylesheet" href="{{asset("css/google-fonts-poppins.css")}}">
    <!-- lightSlider -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset("css/lightslider.css")}}">
    <style>
        /* Cart */
        body{
            background: #fff!important;
        }
       
        .basket-header{
            padding: 25px 20px;
            background: #f5f5f5;
            border-radius: 50px;
            font-weight: 500;
        }
        input.quantity, .quantity input{
            width: 50px;
            height: 30px;
            border: none;
            text-align: center;
            color: #333;
            font-weight: 400;
            line-height: 30px;
            outline: none;
        }
        .inc-btn , .dec-btn{
            width: 30px;
            height: 30px;
            border-radius: 50%;
            line-height: 30px;
            border: 1px solid;
            text-align: center;
            cursor: pointer;
        }
        .delete fa fa-trash::before{
            content: '';
        }
        .btn-template {
            background-color: #f47635;
            border-color: #f47635;
        }
        .block-header{
            padding: 20px 30px;
            border-radius: 50px;
            background: #f5f5f5;
        }
        .CTAs{
            margin-top: 40px;
            margin-bottom: 30px;
        }
        dl , ol , ul{
            margin-top: 0;
            margin-bottom: 1rem;
        }
        .list-unstyled{
            padding-left: 0;
            list-style: none;
        }
        .text-primary{
            color:#f47635!important;
        }
        ul.order-menu, strong.price-total{
            font-weight: 700;
            font-size: 1.2em;
        }
        strong{
            font-weight: 100;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }   
        /* Check out */
        section.cart{
            margin-top: 40px;
        }
        section.checkout .nav-pill{
            background: #f5f5f5;
            border-radius: 50px;
            padding: 0;
            border: none!important;
            overflow: hidden;
            height: 50px;
        }
        section.checkout .nav-item{
            width: 25%!important;
            height: 100%;
        }
        section.checkout .tab-content{
            padding: 40px 0 0 ;
        }
        .tab-content>.active{
            display: block;
        }
        @media(min-width: 992px){
        .flex-lg-row{
            flex-direction: row!important;
        }}
        .justify-content-between{
            justify-content: space-between!important;
        }
        section.checkout .block-body{
            border: 1px solid #ddd;
            padding: 40px 30px;
        }
        section.checkout ul.order-menu{
            margin-bottom: 0;
            font-weight: 400;
            font-size: 1.2em;
            line-height: 2;
        }
        section.checkout strong{
            font-weight: 100;
        }
        .print-invoice-title{
            text-align: center;
        }
        @media (max-width: 992px){
        .shopping-cart .container:first-of-type {
            width: 100% !important;
            overflow-x: scroll;
        }}
        @media (max-width: 992px){
        .shopping-cart .container:first-of-type .basket-holder {
        min-width: 991px;
        }}
    </style>
</head>
<body>
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
            <p>Order Id: {{$id}}</p>
            <p>Created: {{$orderDetails->created_at}}</p>
            <p>Payment Method: {{$orderDetails->payment}}</p>
          </div>
        </div>
        <div class="row p-4">
          <div class="col-md-6" style="line-height: 0.7;">
              <h4>Customer Information</h4>
              <hr>
              <p>Fullname: {{$orderDetails->customer_name}}</p>
              <p>Email: {{$orderDetails->email}}</p>
              <p>Phone: {{$orderDetails->phone}}</p>
              <p>Address: {{$orderDetails->address}}</p>
          </div>
          <div class="col-md-6" style="line-height: 0.7;">
              <h4>Receiver Information</h4>
              <hr>
              <p>Fullname: {{$orderDetails->consignee_name}}</p>
              <p>Phone: {{$orderDetails->phone_consignee}}</p>
              <p>Receiving address: {{$orderDetails->shipping_address}}</p>
          </div>
        </div>
        <div class="row p-4">
          <div class="col-md-12">
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Product Title</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Price</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>

                @foreach($select as $s)
                <tr>
                  <th scope="row">{{++$stt}}</th>
                  <td>{{$s->product_title}}</td>
                  <td>{{$s->quantity}}</td>
                  <td>${{$s->price}}</td>
                  <td>${{$s->quantity * $s->price}}</td>
                </tr>
                @endforeach

              </tbody>
              <tfoot>
                <tr>
                  <th></th>
                  <td colspan="3" class="text-right text-danger text-uppercase">Total</td>
                  <td class="text-red">${{$total}}</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <div class="row p-4">
          <div class="col-md-3"></div>
          <div class="col-md-6 text-center">
            <button class="btn login-btn" onclick="print('Invoice')">Print Invoice</button></a>
            <a href="{{route("homepage")}}"><button type="reset" class="btn btn-dark">Back to homepage</button></a>
          </div>
          <div class="col-md-3"></div>
        </div>
    </div>
</section>

    <!-- JQUERY --->
    <script src="{{asset("plugin/jquery/jquery.min.js")}}"></script>
    <!-- BS4 --->
    <script src="{{asset("plugin/bootstrap/js/bootstrap.min.js")}}"></script>
    <!-- Popper -->
    <script src="{{asset("plugin/popper.js/umd/popper.min.js")}}"></script>
    <!-- TINY HUB JS -->
    <script src="{{asset("js/front.js")}}"></script>
    <!-- Testimonial -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    @yield('script-section')
    <!-- data table -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- light Slider -->
    <script src="{{asset("js/lightslider.js")}}"></script>
</body>
</html>

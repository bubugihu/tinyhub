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
  <!-- Na --->
  <link rel="stylesheet" href="{{asset("css/product-details.css")}}">
  <link rel="stylesheet" href="{{asset("css/product-list.css")}}">
  <link rel="stylesheet" href="{{asset("css/google-fonts-poppins.css")}}">
  <style>
    /* Cart */
    body {
      background: #fff !important;
    }

    section {
      padding: 50px;
    }

    .basket-header {
      padding: 25px 20px;
      background: #f5f5f5;
      border-radius: 50px;
      font-weight: 500;
    }

    input.quantity,
    .quantity input {
      width: 50px;
      height: 30px;
      border: none;
      text-align: center;
      color: #333;
      font-weight: 400;
      line-height: 30px;
      outline: none;
    }

    .inc-btn,
    .dec-btn {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      line-height: 30px;
      border: 1px solid;
      text-align: center;
      cursor: pointer;
    }

    .delete fa fa-trash::before {
      content: '';
    }

    .btn-template {
      background-color: #f47635;
      border-color: #f47635;
    }

    .block-header {
      padding: 20px 30px;
      border-radius: 50px;
      background: #f5f5f5;
    }

    .CTAs {
      margin-top: 40px;
    }

    dl,
    ol,
    ul {
      margin-top: 0;
      margin-bottom: 1rem;
    }

    .list-unstyled {
      padding-left: 0;
      list-style: none;
    }

    .text-primary {
      color: #f47635 !important;
    }

    ul.order-menu,
    strong.price-total {
      font-weight: 700;
      font-size: 1.2em;
    }

    strong {
      font-weight: 100;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Check out */
    section.checkout .nav-pill {
      background: #f5f5f5;
      border-radius: 50px;
      padding: 0;
      border: none !important;
      overflow: hidden;
      height: 50px;
    }

    section.checkout .nav-item {
      width: 25% !important;
      height: 100%;
    }

    section.checkout .tab-content {
      padding: 40px 0 0;
    }

    .tab-content>.active {
      display: block;
    }

    @media(min-width: 992px) {
      .flex-lg-row {
        flex-direction: row !important;
      }
    }

    .justify-content-between {
      justify-content: space-between !important;
    }

    section.checkout .block-body {
      border: 1px solid #ddd;
      padding: 40px 30px;
    }

    section.checkout ul.order-menu {
      margin-bottom: 0;
      font-weight: 400;
      font-size: 1.2em;
      line-height: 2;
    }

    section.checkout strong {
      font-weight: 100;
    }

    .print-invoice-title {
      text-align: center;
    }

    @media (max-width: 992px) {
      .shopping-cart .container:first-of-type {
        width: 100% !important;
        overflow-x: scroll;
      }
    }

    @media (max-width: 992px) {
      .shopping-cart .container:first-of-type .basket-holder {
        min-width: 991px;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <a href="{{ route('homepage')}}" class="navbar-brand-homepage "><img src="{{url("img/tinyhub-logo.png")}}" alt="tinyhub logo" width="170" height="auto"></a>
  </div>
  <section>
    <h3 class="print-invoice-title">Invoice</h3>
    <h6 class="text-center" style="font-weight: normal;">Order-ID: 123123</h6>
    <h6 class="text-center" style="font-weight: normal;">Created at: 11/11/2019</h6>
    <h6 class="text-center" style="font-weight: normal;">Method payment: COD</h6>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h5>Customer Information</h5>
          <p>Full Name:</p>
          <p>Phone Number</p>
          <p>Address: </p>
        </div>
        <div class="col-md-6">
          <h5>Shipping Address</h5>
          <p>Full Name: </p>
          <p>Phone Number</p>
          <p>Address: </p>
        </div>
      </div>
      <div class="basket">
        <div class="basket-holder">
          <div class="basket-header">
            <div class="row">
              <div class="col-1">No</div>
              <div class="col-4">Product</div>
              <div class="col-2">Price</div>
              <div class="col-3">Quantity</div>
              <div class="col-2">Amount</div>
            </div>
          </div>
          <div class="basket-body">
            <!-- Product-->
            <div class="item mt-4">
              <div class="row d-flex align-items-center">
                <div class="col-1">
                  <div class="text-center">1</div>
                </div>
                <div class="col-4">
                  <div class="d-flex align-items-center">
                    <div class="title ml-4">
                      True wireless JBL
                    </div>
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
              <div class="row d-flex align-items-center mt-4">
                <div class="col-1">
                </div>
                <div class="col-4">
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
      <div class="CTAs  text-center"><a href="#" class="btn btn-template wide" onclick="print('invoice.pdf')">Thank You</a></div>
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
  <script>
    $(document).ready(function() {
      $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
          $('#back-to-top').fadeIn();
        } else {
          $('#back-to-top').fadeOut();
        }
      });
      // scroll body to 0px on click
      $('#back-to-top').click(function() {
        $('body,html').animate({
          scrollTop: 0
        }, 400);
        return false;
      });
    });
    $(document).ready(function() {
      $(".testimonial-carousel").slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        adaptiveHeight: true,
        prevArrow: '<i class="fa fa-angle-left"></i>',
        nextArrow: '<i class="fa fa-angle-right"></i>',
        responsive: [{
            breakpoint: 1376,
            settings: {
              slidesToShow: 2
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });
    })
  </script>
  <script>
    var city = document.querySelector('#city');
    var district = document.querySelector('#district');
    var options2 = district.querySelectorAll('option');

    function giveSelection(selValue) {
      district.innerHTML = ''; //onchange
      for (var i = 0; i < options2.length; i++) {
        if (options2[i].dataset.option === selValue) {
          district.appendChild(options2[i]);
        }
      }
    }

    giveSelection(city.value);
  </script>
</body>

</html>
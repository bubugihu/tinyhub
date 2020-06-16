<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
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
    <style>
        /* Cart */
        body{
            background: #fff!important;
        }
        section{
            padding:50px;
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
        .btn-template{
            background-color: #9055A2;
            border-color: #9055A2;
        }
        .block-header{
            padding: 20px 30px;
            border-radius: 50px;
            background: #f5f5f5;
        }
        .CTAs{
            margin-top: 40px;
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
            color:#9055A2!important;
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

        <!-- NAV BAR --->
        @include('users.layout.nav-bar')

        <!-- CONTENT WRAPPER CONTAINS PAGE --->
        @yield('content')
        @yield('shopping-cart')
        @yield('checkout')
        @yield('invoice')
        <!-- FOOTER --->
        @include('users.layout.footer')


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
</body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("plugin/fontawesome-free/css/all.min.css")}}">
    <!-- BOOTSTRAP--->
    <link rel="stylesheet" href="{{asset("plugin/bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/orionicon.css")}}">
    <!-- GOOGLE FONT--->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;700&display=swap" rel="stylesheet">
    <!-- OWN CSS--->
    <link rel="stylesheet" href="{{asset("css/custom.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.default.css")}}">

    <style>
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
        .quantity input{
            width: 30px;
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
            border: 1px solid #999;
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
        .btn.wide, .wide
    </style>
</head>
<body>
    <div id="app">
        

        
        <main class="py-4">
            @yield('shopping-cart')
            
        </main>
    </div>
    <!-- JQUERY --->
    <script src="{{asset("plugin/jquery/jquery.min.js")}}"></script>
    <!-- BS4 --->
    <script src="{{asset("plugin/bootstrap/js/bootstrap.min.js")}}"></script>
    <!-- Popper -->
    <script src="{{asset("plugin/popper.js/umd/popper.min.js")}}"></script>
    <!-- TINY HUB JS -->
    <script src="{{asset("js/front.js")}}"></script>
</body>
</html>

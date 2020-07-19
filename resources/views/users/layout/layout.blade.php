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
    <!--data table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <!-- lightSlider -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset("css/lightslider.css")}}">
</head>

<body>

    <!-- NAV BAR --->
    @include('users.layout.nav-bar')

    <!-- CONTENT WRAPPER CONTAINS PAGE --->
    @yield('content')
    <!-- FOOTER --->
    @include('users.layout.footer')


    <!-- JQUERY --->
    <script src="{{asset("plugin/jquery/jquery.min.js")}}"></script>
    <!-- BS4 --->
    <script src="{{asset("plugin/bootstrap/js/bootstrap.min.js")}}"></script>
    <!-- Popper -->
    <script src="{{asset("plugin/popper.js/umd/popper.min.js")}}"></script>
    <!-- Testimonial -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    @yield('script-section')
    <!-- TINY HUB JS -->
    <script src="{{asset("js/front.js")}}"></script>
    <!-- data table -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- light Slider -->
    <script src="{{asset("js/lightslider.js")}}"></script>
</body>

</html>
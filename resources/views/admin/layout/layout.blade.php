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
    <link rel="stylesheet" href="{{asset("css/custom.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.default.css")}}">

</head>
<body>

        <!-- NAV BAR --->
        @include('admin.layout.nav-bar')
        <!-- SIDE BAR --->
        @include('admin.layout.side-bar')
        <!-- CONTENT WRAPPER CONTAINS PAGE --->

        @yield('content')

        <!-- FOOTER --->
        @include('admin.layout.footer')


    <!-- JQUERY --->
    <script src="{{asset("plugin/jquery/jquery.min.js")}}"></script>
    <!-- BS4 --->
    <script src="{{asset("plugin/bootstrap/js/bootstrap.min.js")}}"></script>
    <!-- Popper -->
    <script src="{{asset("plugin/popper.js/umd/popper.min.js")}}"></script>
    <!-- TINY HUB JS -->
    <script src="{{asset("js/front.js")}}"></script>
    @yield('script-section')
</body>
</html>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="zxx">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Bingo One page parallax responsive HTML Template ">

    <meta name="author" content="Themefisher.com">

    <title>Bit-Bank</title>

    <!-- Mobile Specific Meta
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('fornt_assets/img/favicon.png') }}" />

    <!-- CSS
  ================================================== -->
    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="{{ asset('fornt_assets/plugins/themefisher-font.v-2/style.css') }}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('fornt_assets/plugins/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('fornt_assets/plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('fornt_assets/plugins/slick-carousel/slick/slick-theme.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('fornt_assets/css/style.css') }}">



</head>


<body id="body">


@yield('main')


    <!--
    Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    <script src="{{ asset('fornt_assets/plugins/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('fornt_assets/plugins/bootstrap/dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('fornt_assets/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('fornt_assets/plugins/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <!-- Smooth Scroll js -->
    <script src="{{ asset('fornt_assets/plugins/smooth-scroll/dist/js/smooth-scroll.min.js') }}"></script>

    <!-- Custom js -->
    <script src="{{ asset('fornt_assets/js/script.js') }}"></script>
        @yield('script')

</body>

</html>

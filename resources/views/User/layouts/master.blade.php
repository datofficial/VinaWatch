<!DOCTYPE HTML>
<html>
<head>
    <title>VinaWatch</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('User/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('User/css/icomoon.css') }}">
    <!-- Ion Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('User/css/ionicons.min.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('User/css/bootstrap.min.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('User/css/magnific-popup.css') }}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('User/css/flexslider.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('User/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('User/css/owl.theme.default.min.css') }}">

    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('User/css/bootstrap-datepicker.css') }}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{ asset('User/fonts/flaticon/font/flaticon.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('User/css/style.css') }}">

</head>
<body>
    
<div class="colorlib-loader"></div>

<div id="page">
    @include('User.Component.header')

    @yield('content')

    @include('User.Component.footer')
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="{{ asset('User/js/jquery.min.js') }}"></script>
<!-- popper -->
<script src="{{ asset('User/js/popper.min.js') }}"></script>
<!-- bootstrap 4.1 -->
<script src="{{ asset('User/js/bootstrap.min.js') }}"></script>
<!-- jQuery easing -->
<script src="{{ asset('User/js/jquery.easing.1.3.js') }}"></script>
<!-- Waypoints -->
<script src="{{ asset('User/js/jquery.waypoints.min.js') }}"></script>
<!-- Flexslider -->
<script src="{{ asset('User/js/jquery.flexslider-min.js') }}"></script>
<!-- Owl carousel -->
<script src="{{ asset('User/js/owl.carousel.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('User/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('User/js/magnific-popup-options.js') }}"></script>
<!-- Date Picker -->
<script src="{{ asset('User/js/bootstrap-datepicker.js') }}"></script>
<!-- Stellar Parallax -->
<script src="{{ asset('User/js/jquery.stellar.min.js') }}"></script>
<!-- Main -->
<script src="{{ asset('User/js/main.js') }}"></script>

</body>
</html>
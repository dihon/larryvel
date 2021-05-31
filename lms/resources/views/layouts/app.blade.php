<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    
    <title>LMS</title>

    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="dist/css/slicknav.css">
    <link rel="stylesheet" href="dist/css/flaticon.css">
    <link rel="stylesheet" href="dist/css/animate.min.css">
    <link rel="stylesheet" href="dist/css/magnific-popup.css">
    <link rel="stylesheet" href="dist/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="dist/css/themify-icons.css">
    <link rel="stylesheet" href="dist/css/slick.css">
    <link rel="stylesheet" href="dist/css/nice-select.css">
    <link rel="stylesheet" href="dist/css/style.css">
    
</head>
<body id="app-layout">
    @include('partials.navigation')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    

    <script src="./dist/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./dist/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./dist/js/popper.min.js"></script>
    <script src="./dist/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./dist/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./dist/js/owl.carousel.min.js"></script>
    <script src="./dist/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./dist/js/wow.min.js"></script>
    <script src="./dist/js/animated.headline.js"></script>
    <script src="./dist/js/jquery.magnific-popup.js"></script>

    <!-- Nice-select, sticky -->
    <script src="./dist/js/jquery.nice-select.min.js"></script>
    <script src="./dist/js/jquery.sticky.js"></script>

    <!-- counter , waypoint -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="./dist/js/jquery.counterup.min.js"></script>
    
    <!-- contact js -->
    <script src="./dist/js/contact.js"></script>
    <script src="./dist/js/jquery.form.js"></script>
    <script src="./dist/js/jquery.validate.min.js"></script>
    <script src="./dist/js/mail-script.js"></script>
    <script src="./dist/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->    
    <script src="./dist/js/plugins.js"></script>
    <script src="./dist/js/main.js"></script>
</body>
</html>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="matx no-js">
<!--<![endif]-->
<!-- Tha UI Guy -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PrimeFinger') }}</title>
    <meta name="description" content="Prime Fingers">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="prime-fingers/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="prime-fingers/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="prime-fingers/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="prime-fingers/apple-touch-icon-144x144.html">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="prime-fingers/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="prime-fingers/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="prime-fingers/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="prime-fingers/favicon-16x16.png" sizes="16x16">
    <meta name="application-name" content="&nbsp;">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="prime-fingers/mstile-144x144.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,700italic,700,500italic,900" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="{{asset('assets/libs/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/mdl/material.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/owl-carousel/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/owl-carousel/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/sweetalert/sweet-alert.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/sweetalert/ie9.css')}}">
    <link rel="stylesheet" href="{{asset('assets/demo/assets/css/common.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/common.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/option-panel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/revolution/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/revolution/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/revolution/css/navigation.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


    <!--[if lt IE 9]>
            <script src="demo/assets/js/vendor/html5shiv.js"></script>
        <![endif]-->
</head>

<body>
    <div id="loader" class="loader-wrapper">
        <div class="matx-preloader"></div>
    </div>


    @yield('content')



    <script>
        window.jQuery || document.write(
            '<script type="text/javascript" src="{{asset('assets/js/vendor/jquery-1.10.2.min.js')}}"><\/script>')
    </script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyCpwYS06r70-Z3E38QhNo62Fa0900gcUic"></script>
    <script type="text/javascript" src="{{asset('assets/libs/mdl/material.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/all-plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/common-plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/libs/owl-carousel/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/libs/sweetalert/sweet-alert.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/libs/jwplayer/jwplayer.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/libs/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/libs/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/libs/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/libs/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/libs/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/libs/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/libs/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/libs/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/libs/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/libs/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/libs/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/common.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/all-components.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/option-panel.js')}}"></script>
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

</body>
<!-- Tha UI Guy - PoeticDev -->

</html>
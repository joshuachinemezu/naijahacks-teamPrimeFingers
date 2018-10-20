<!DOCTYPE html>
<html lang="en">

<head>
    <title>Noliah </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"  href="{{asset('assets/auth/vendor/bootstrap/css/bootstrap.min.css')}}" >
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/auth/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/auth/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('assets/auth/vendor/css-hamburgers/hamburgers.min.css')}}" type="text/css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"  href="{{asset('assets/auth/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/auth/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/auth/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/auth/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/auth/css/main.css')}}">

        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <!--===============================================================================================-->
</head>

<body>

	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

    @yield('content')


    <!--===============================================================================================-->
    <script src="{{asset('assets/auth/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/auth/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/auth/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('assets/auth/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/auth/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/auth/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('assets/auth/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/auth/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->

        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    <script src="{{asset('assets/auth/js/main.js')}}"></script>

</body>

</html>

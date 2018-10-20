<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Schedule instagram post, Automate instagram">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Noliah') }}</title>

    	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">

        <!-- Themify Icons -->
        <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet">

        <!-- Animate Icons -->
        <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">

                <!-- Owl carousel Icons -->
                <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>



    @yield('content')



</body>
    <!-- JQuery -->
    <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <!-- Owl carousel js -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!-- Custom js -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
</body>

</html>

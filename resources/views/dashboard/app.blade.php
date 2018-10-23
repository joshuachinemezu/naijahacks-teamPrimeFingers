<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/rsc/plugins/images/favicon.png')}}">
    <title>Prime Fingers</title>
    <!-- Morris CSS -->
    <link href="{{asset('assets/rsc/plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/rsc/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- This is Sidebar menu CSS -->
    <link href="{{asset('assets/rsc/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- This is a Animation CSS -->
    <link href="{{asset('assets/rsc/css/animate.css')}}" rel="stylesheet">
    <!-- This is a Custom CSS -->
    <link href="{{asset('assets/rsc/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/rsc/css/custom.css')}}" rel="stylesheet">

    <!-- color CSS you can use different color css from css/colors folder -->
    <!-- We have chosen the skin-blue (default.css')}}) for this starter
         page. However, you can choose any other skin from folder css / colors .
         -->
    <link href="{{asset('assets/rsc/css/colors/megna.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

    <!-- Related File -->
    <!-- animation CSS -->
    <!-- toast CSS -->
    <link href="{{asset('assets/rsc/plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
</head>

<body class="fix-sidebar">
    <!-- Preloader -->
    <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div> -->
    <div id="wrapper">

        @yield('content')


      </div>
      <!-- /#wrapper -->
      <!-- jQuery -->
      <script src="{{asset('assets/rsc/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="{{asset('assets/rsc/bootstrap/dist/js/bootstrap.min.js')}}"></script>
      <!-- Sidebar menu plugin JavaScript -->
      <script src="{{asset('assets/rsc/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
      <!--Slimscroll JavaScript For custom scroll-->
      <script src="{{asset('assets/rsc/js/jquery.slimscroll.js')}}"></script>
      <!--Wave Effects -->
      <script src="{{asset('assets/rsc/js/waves.js')}}"></script>
  
      <!--Morris JavaScript -->
      <script src="{{asset('assets/rsc/plugins/bower_components/raphael/raphael-min.js')}}"></script>
      <script src="{{asset('assets/rsc/plugins/bower_components/morrisjs/morris.js')}}"></script>
      <script src="{{asset('assets/rsc/js/morris-data.js')}}"></script>
  
  
      <script src="{{asset('assets/rsc/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
      <script src="{{asset('assets/rsc/plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
      <!-- Custom Theme JavaScript -->
      <script src="{{asset('assets/rsc/js/custom.min.js')}}"></script>
      <!-- <script src="{{asset('assets/rsc/js/dashboard1.js')}}"></script> -->
      <!-- Custom tab JavaScript -->
      <script src="{{asset('assets/rsc/js/cbpFWTabs.js')}}"></script>
      <script src="{{asset('assets/rsc/plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
  </body>
  
  </html>
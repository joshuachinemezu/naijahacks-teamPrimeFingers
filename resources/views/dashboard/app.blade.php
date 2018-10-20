<!DOCTYPE html>
<html>
<!-- Designed by the NoliahTeam -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>



  <link href="{{asset('assets/dashboard/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/dashboard/css/custom.css')}}" rel="stylesheet">
  
</head>

<body class="app">
  <div id="preloader">
    <div class="loader"></div>
  </div>
  <div>

        @yield('content')

    </div>
</div>

    <script src="{{asset('assets/dashboard/js/vendor.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/bundle.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/custom.js')}}"></script>

      </body>
      <!-- Designed by the NoliahTeam -->
      
      </html>
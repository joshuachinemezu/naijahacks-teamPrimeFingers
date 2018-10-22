<div class="nav-overlay-bg"></div>
<header class="main-header init-animation"><a href="index.html" class="logos matx-logo logo-initial init-animation"><img
            class="logo-dark" src="{{asset('assets/demo/images/logo_lite.png')}}" alt="logo"> <img class="logo-lite" src="{{asset('assets/demo/images/logo_lite.png')}}"
            alt="logo"></a>
    <nav class="nav-typo main-nav">
        <ul>
            <li class=""><a href="/">HOME</a></li>
            <li><a href="{{ url('register/tester') }}">GET PAID TO TEST</a></li>

            <li><a href="{{ url('register/company') }}">GET FEED BACK FOR YOUR PRODUCT</a></li>

            <li><a href="{{route('login')}}">LOGIN</a></li>

            <li><a href="{{route('how-it-works')}}">TEST NOW</a></li>
        </ul>
    </nav>
    <div class="mdl-layout__drawer-button mobile-menu-area"><i id="menu-back-btn" class="mobile-menu-ctrl zmdi zmdi-arrow-right"></i>
        <i id="menu-show-btn" class="mobile-menu-ctrl active zmdi zmdi-menu"></i></div>
</header>
<nav class="nav-typo mobile-nav">
    <ul>
        <li><a href="/">HOME</a></li>
        <li><a href="{{ url('register/tester') }}">GET PAID TO TEST</a></li>

        <li><a href="{{ url('register/company') }}">GET FEED BACK FOR YOUR PRODUCT</a></li>

        <li><a href="{{route('login')}}">LOGIN</a></li>

        <li><a href="{{route('how-it-works')}}">HOW IT WORKS</a></li>
    </ul>
</nav>
@extends('dashboard.app')


@section('content')

<main class="main-content bgc-white-100" style="padding: 49px 5px 5px;
">
<div class="t-0 l-0 bgc-white w-100 h-100 d-f fxd-r fxw-w ai-c jc-c pos-r p-30">
      <div class="d-f jc-c fxd-c">
            <h5 class="mB-30 fw-900 lh-1 c-green-500" style="font-size:20px">Please connect a social account to continue.</h5>
            <p class="c-grey-600" style="font-size:12px"><b>Note: We do not post unauthorized contents to your social accounts neither do we have access to your account.</b></p>
            <a href="{{ 'connect/instagram' }}"><div class="mR-60"><img alt="#" style="width:150px; margin-left:-46px" src="{{asset('assets/img/socials/instagram.webp')}}"><span style="font-size:15px; margin-left:-30px">Connect to Instagram</span></div></a>
            <a href="/"><div class="mR-60"><img alt="#" style="width:70px; margin:17px;margin-left:0px" src="{{asset('assets/img/socials/twitter.jpg')}}"><span style="font-size:15px; margin-left:6px">Connect to Twitter</span></div></a>
            <a href=""><div class="mR-60"><img alt="#" style="width:90px; margin:17px; margin-left:-2px" src="{{asset('assets/img/socials/slack.jpg')}}"><span style="font-size:15px; margin-left:-6px">Connect to Slack</span></div></a><br/>
            <div><a href="/" type="primary" class="btn btn-primary">Go to Home</a></div>
      </div>
</div>
</main>


@include('dashboard.partial.footer')


@endsection
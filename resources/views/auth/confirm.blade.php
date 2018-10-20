@extends('layouts.app') 

@section('content')

<!-- Start your project here-->

<section class="about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6 about-text">
                <h2>Registration was successful</h2>
                <h5>Please activate your account by clicking the link that was sent to your mail.</h5>
                <p><b>Note: &nbsp;</b>You won't be able to login until you activate your account.</p>
                <p class="mt-4">Didn't see link?</p>
                <a href="" class="site-btn sb-gradients sbg-line mt-2">Resend Link</a>
            </div>
        </div>
        <div class="about-img">
            <img src="{{asset('assets/img/ingoas.png')}}" alt="">
        </div>
    </div>
</section>
    <!-- /Start your project here-->

    @endsection

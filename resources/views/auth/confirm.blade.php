@extends('layouts.app')

@section('content')
@include('layouts.partial.header')

<main class="main-wrapper">
    <br/><br/>
    <br/><br/>
        <section class="primary-bg-color lefticon-intro-imodules">
            <div class="section-common-space-form">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3"></div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="comments-section">
                                <div class="clearfix single-comment mdl-shadow--2dp jumbo-shadow">
                                    <h2 class="com-title text-center mb-0">Welcome to the PrimeFingers Community!</h2>
                                    <div class="text-center">
                                        <img src="{{asset('assets/img/success.svg')}}" class="success-img" />
                                    </div>
                                    <p class="text-center">Please confirm your account using the link we just sent to
                                        your email.</p>
                                    <p class="text-center">If you haven’t received the confirmation email, Click <a
                                            href="#">here</a> for us to resend confirmation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@include('layouts.partial.footer')

@endsection

<script type="text/javascript" src="{{asset('assets/auth/js/register.js')}}"></script>
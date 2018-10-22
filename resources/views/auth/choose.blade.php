@extends('layouts.app')

@section('content')
@include('layouts.partial.header')

<main class="main-wrapper">
    <section class="primary-bg-color lefticon-intro-imodules">
        <div class="section-common-space-form">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3"></div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="comments-section">
                            <h2 class="com-title text-center">Sign up Here</h2>
                            <div class="clearfix single-comment mdl-shadow--2dp jumbo-shadow">
                                <form action="#" class="matx-form-valid">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="text-left"><a href="{{ url('register/tester') }}" class="mdl-button btn-full mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-black btn-default btn-submit btn-block">As
                                                    a Tester</a></div>
                                        </div><br/><br/>
                                        <div class="col-lg-6">
                                            <div class="text-left"><a href="{{ url('register/company') }}" class="mdl-button btn-full mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-black btn-default btn-submit btn-block">As
                                                    a Company</a></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="text-center form-txt">Already have an Account? <a href="{{route('login')}}">Login
                                                here</a></p>
                                    </div>
                                </form>
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

<script type="text/javascript" src="{{asset('assets/auth/js/login.js')}}"></script>
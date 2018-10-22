@extends('layouts.app')

@section('content')
@include('layouts.partial.header')

<main class="main-wrapper">
    <section class="primary-bg-color lefticon-intro-imodules">
        <div class="section-common-space-form">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4"></div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="comments-section">
                            <h2 class="com-title text-center">Login Now</h2>
                            <div class="clearfix single-comment mdl-shadow--2dp jumbo-shadow">
                                <form  class="matx-form-valid"  method="post" name="frmChange" onSubmit="return login(event)">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mdl-textfield mdl-js-textfield"><input class="mdl-textfield__input"
                                                    type="email" id="email"><label class="mdl-textfield__label" for="email">Email</label></div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mdl-textfield mdl-js-textfield"><input class="mdl-textfield__input"
                                                    type="password" id="password"><label class="mdl-textfield__label"
                                                    for="password">Password</label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                                <div class="text-left"><button type="submit" class="mdl-button btn-full mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-black btn-default btn-submit btn-block">
                                                        <span class="btn-text">{{ __('LOGIN') }}</span>
                                                        <div id="action-loader" style="padding-left:-20px; display: none"
                                                            class="loader-wrapper">
                                                            <div class="matx-preloader"></div>
                                                        </div>
                                                    </button></div>
                                        </div>
                                        <p class="text-center form-txt">Forgot Password? <a href="">Click
                                                here</a></p>
                                        <p class="text-center ">Don't have an account? <a href="register/choose">Sign
                                                up here</a></p>
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
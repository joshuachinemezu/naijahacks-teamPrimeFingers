@extends('layouts.auth.app')

@section('content')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="mR-60 mB-10" style="text-align:center"><img alt="#" style="width:150px; margin-left:0px" src="{{asset('assets/img/socials/instagram.webp')}}"></div><br />

            <form class="login100-form validate-form" method="post" name="frmChange" onSubmit="return connectAccount(event)">
                @csrf

                <!-- <span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span> -->

                <div class="wrap-input100 validate-input" data-validate="Enter Username">
                    <input class="input100" type="text" name="username" id="username">
                    <span class="focus-input100" data-placeholder="{{ __('Username') }}"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100" type="password" id="password" name="password">
                    <span class="focus-input100" data-placeholder="{{ __('Password') }}"></span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn disable-btn">
                            <span class="btn-text">{{ __('Connect') }}</span>
                            <i class="fa fa-spinner fa-spin" id="action-loader"></i>
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-70">

                    <span class="txt1">
                        Don’t have an account?
                    </span>

                    <a class="txt2" href="https://instagram.com">
                        Get one
                    </a>

                    <p style="margin-top:10px" class="txt1">
                        <a class="txt2" href="{{ route('home') }}">Back to Home</a>
                    </p>

                </div>

            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

@endsection

<script type="text/javascript" src="{{asset('assets/connect/custom.js')}}"></script>
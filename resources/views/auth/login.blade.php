@extends('layouts.auth.app')

@section('content')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post" name="frmChange" onSubmit="return validateInput(event)">
                @csrf
                <a href="{{ route('home') }}" style="color:#20509e" class="login100-form-title p-b-26">
                    {{ config('app.name', 'Noliah') }}
                </a>
                <!-- <span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span> -->

                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <input class="input100" type="text" name="email" id="email">
                    <span class="focus-input100" data-placeholder="{{ __('Email') }}"></span>
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
                            <span class="btn-text">{{ __('Login') }}</span>
                            <i class="fa fa-spinner fa-spin" id="action-loader"></i>
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-70">
                    <span class="txt1">
                        Forgot password? &nbsp;
                        <a class="txt2" href="{{ route('home') }}">Recover</a>
                    </span>
                    <br />
                    <span class="txt1">
                        Don’t have an account?
                    </span>

                    <a class="txt2" href="{{ route('register') }}">
                        Sign Up
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

@endsection

<script type="text/javascript" src="{{asset('assets/auth/js/login.js')}}"></script>
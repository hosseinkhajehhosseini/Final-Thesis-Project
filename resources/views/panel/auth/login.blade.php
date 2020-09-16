<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>ورود به پنل کاربری ftc pro</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('cork/assets/img/logo1.png') }}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('cork/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('cork/assets/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('cork/assets/css/authentication/form-1.css') }}" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('cork/assets/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cork/assets/css/forms/switches.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/font.css') }}">
</head>
<body class="form">

<div class="form-container">
    <div class="form-form">
        <div class="form-form-wrap">
            <div class="form-container">
                <div class="form-content">
                    <h1 class="mb-4"><img src="{{ asset('cork/assets/img/logo2.png') }}"></h1>
                    <form class="text-left" action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form">
                            <div id="username-field" class="field-wrapper input">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <input id="username" name="email_or_phone" type="text" class="form-control" placeholder="ایمیل یا تلفن" value="{{ old('email_or_phone') }}">
{{--                                {{ dd($errors) }}--}}
                                @if($errors->has('email_or_phone'))
                                    <span class="field-error">{{ $errors->first('email_or_phone') }}</span>
                                @endif
                            </div>

                            <div id="password-field" class="field-wrapper input mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-lock">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg>
                                <input id="password" name="password" type="password" class="form-control"
                                       placeholder="رمزعبور">
                                @if($errors->has('password'))
                                    <span class="field-error">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="d-sm-flex justify-content-between">
                                <div class="field-wrapper toggle-pass">
                                    <p class="d-inline-block">نمایش رمزعبور</p>
                                    <label class="switch s-primary">
                                        <input type="checkbox" id="toggle-password" class="d-none">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="field-wrapper">
                                    <button type="submit" class="btn btn-primary" value="">ورود</button>
                                </div>

                            </div>

                            <div class="field-wrapper text-center keep-logged-in">
                                <div class="n-chk new-checkbox checkbox-outline-primary">
                                    <label class="new-control new-checkbox checkbox-outline-primary">
                                        <input type="checkbox" class="new-control-input">
                                        <span class="new-control-indicator"></span>مرا به خاطر بسپار
                                    </label>
                                </div>
                            </div>

                            {{--<div class="field-wrapper">--}}
                            {{--<a href="auth_pass_recovery.html" class="forgot-pass-link">Forgot Password?</a>--}}
                            {{--</div>--}}

                        </div>
                    </form>
                    {{--<p class="terms-conditions">© 2019 All Rights Reserved. <a href="index.html">CORK</a> is a product of Designreset. <a href="javascript:void(0);">Cookie Preferences</a>, <a href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.</p>--}}

                </div>
            </div>
        </div>
    </div>
    <div class="form-image">
        <div class="l-image">
        </div>
    </div>
</div>


<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('cork/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('cork/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('cork/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('cork/assets/js/authentication/form-1.js') }}"></script>

</body>
</html>
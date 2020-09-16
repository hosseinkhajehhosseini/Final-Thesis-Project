<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('website/css/bootstrap.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('website/css/font.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('website/css/persianDatepicker.css') }}">
    <style>
        .btn-darker {
            background-color: #171a1d;
            color: #fff;
            transition: .25s;
            border: 1px solid #171a1d;
            padding: 7px 0;
        }

        .btn-darker:hover {
            background-color: #fefefe;
            color: #171a1d;
            font-weight: bold;
        }

        .form-box form {
            /*border : .5px solid rgba(64, 64, 62, 0.81);*/
            box-shadow: 0px 4px 10px rgba(99, 99, 99, 0.68);
        }

        .form-box h1 {
            background-color: #cb1313;
            color: #fefefe;
            height: 80px;
            line-height: 80px;
            margin-top: -80px
        }

        .element-container.register {
            position: relative;
            background: url(/website/img/9.jpg) center top no-repeat;
            background-size: cover;
            height: 85vh
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-md bg-light navbar-dark py-md-4">
    {{--<div class="element-nav d-flex flex-row-reverse flex-wrap justify-content-around align-items-center">--}}
    {{--<a href="#" class="navbar-brand">--}}
    {{--<img src="http://demo.gostaranweb.com/Maco/wp-content/uploads/2018/01/maco-logo-alt.png" class="img-fluid">--}}
    {{--</a>--}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse d-md-flex flex-row-reverse flex-wrap justify-content-around"
         id="collapsibleNavbar">
        <ul class="navbar-nav d-flex flex-wrap flex-md-row-reverse flex-column mb-md-0 mb-4">
            <li class="nav-li"><a class="text-dark" href="{{ route('website.index') }}">خانه</a></li>
        </ul>

        <a href="{{ auth()->check() ? route('panel.dashboard') : route('website.users.join') }}"
           class="custom-btn m-md-2 my-5">
            @if(auth()->check()) پنل کاربری @else ثبت نام @endif
        </a>
    </div>
</nav>
<div class="w-100 element-container register">
    <div class="element-overlay"></div>
    <div class="element-content">
        <h1 style="font-size: 70px;color : #fff"><span style="color : #cb1313">به ما</span> بپیوندید</h1>
    </div>
</div>
<div class="d-flex flex-wrap align-items-center">
    <div class="form-box col-lg-7 col-md-8 col-12 mb-5">
        <h1 class="text-center mb-0">اطلاعات خود را وارد کنید</h1>
        <form class="w-100 p-4" method="post" action="{{ route('website.users.store') }}">
            {{ csrf_field() }}
            <div class="d-flex flex-wrap flex-md-row-reverse flex-column">
                <div class="col-md-6 col-12 my-md-3">
                    <div class="form-group">
                        <input type="text" name="name"
                               class="form-control form-control-lg @if($errors->has('name')) border-danger @endif"
                               placeholder="نام" autocomplete="off" value="{{ old('name') }}">
                        @if($errors->has('name'))
                            <span class="text-danger font-weight-bold" style="font-size: 13px">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-12 my-md-3">
                    <div class="form-group">
                        <input type="text" name="family" class="form-control form-control-lg @if($errors->has('family')) border-danger @endif" placeholder="نام خانوادگی"
                               autocomplete="off" value="{{ old('family') }}">
                        @if($errors->has('family'))
                            <span class="text-danger font-weight-bold" style="font-size: 13px">{{ $errors->first('family') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-12 my-md-3">
                    <div class="form-group">
                        <input type="text" name="mobile" class="form-control form-control-lg @if($errors->has('mobile')) border-danger @endif" placeholder="موبایل"
                               autocomplete="off" value="{{ old('mobile') }}">
                        @if($errors->has('mobile'))
                            <span class="text-danger font-weight-bold" style="font-size: 13px">{{ $errors->first('mobile') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-12 my-md-3">
                    <div class="form-group">
                        <input type="text" name="birthday" class="form-control form-control-lg @if($errors->has('birthday')) border-danger @endif" placeholder="تاریخ تولد"
                               autocomplete="off" value="{{ old('birthday') }}">
                        @if($errors->has('birthday'))
                            <span class="text-danger font-weight-bold" style="font-size: 13px">{{ $errors->first('birthday') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-12 my-md-3">
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-lg @if($errors->has('password')) border-danger @endif"
                               placeholder="رمز عبور" autocomplete="off">
                        @if($errors->has('password'))
                            <span class="text-danger font-weight-bold" style="font-size: 13px">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 col-12 my-md-3">
                    <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control form-control-lg"
                               placeholder="تکرار رمز عبور">
                    </div>
                </div>
                <div class="col-12 my-md-3">
                    <div class="form-group">
                        <input type="submit" class="btn btn-darker btn-block" value="ثبت نام">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-5 col-md-4 col-12 text-center">
        <p>قبلا ثبت نام کرده اید ؟
            <a href="{{ route('website.users.login') }}">وارد شوید</a>
        </p>
    </div>
</div>


<script src="{{ asset('website/js/jquery.min.js') }}"></script>
<script src="{{ asset('website/js/jquery.bez.min.js') }}"></script>
<script src="{{ asset('website/js/popper.min.js') }}"></script>
<script src="{{ asset('website/js/bootstrap.js') }}"></script>
<script src="{{ asset('website/js/persianDatepicker.js') }}"></script>
<script>
    $(document).ready(function () {

        $(window).on("load",function () {
            var has_error = {{ count($errors->all()) }} > 0;
            if(has_error){
                $("body , html").animate({
                    scrollTop : $(".form-box").offset().top
                },2000,$.bez([.785, .135, .15, .86]))
            }
        })

        $("input[name='birthday']").persianDatepicker({
            formatDate: "YYYY-0M-0D"
        });

        $("input").on("keyup",function () {
            $(this).removeClass("border-danger")
        })
    })
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>باشگاه بدنسازی</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('website/css/bootstrap.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('website/css/font.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('website/css/font-awesome.css') }}">
</head>
<body>

<div id="section-top" class="element-container top">
    <div class="element-overlay"></div>
    <div class="element-shape element-shape-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="element-fill" d="M0,6V0h1000v100L0,6z"></path>
        </svg>
    </div>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark" style="z-index: 10000;background-color: rgba(56,56,56,0.78) !important;">
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
                <li class="nav-li active"><a href="#section-top">خانه</a></li>
                <li class="nav-li"><a href="#section-bio">معرفی</a></li>
                <li class="nav-li"><a href="#section-feature">خدمات ما</a></li>
                <li class="nav-li"><a href="#section-bmi">ماشین حساب BMI</a></li>
                {{--<li class="nav-li"><a href="#section-comment">نظرات</a></li>--}}
            </ul>

            <a href="{{ auth()->check() ? route('panel.dashboard') : route('website.users.join') }}"
               class="custom-btn m-md-2 my-5">
                @if(auth()->check()) پنل کاربری @else ثبت نام @endif
            </a>
            <!--<div class="nav-icon-group">-->
            <!--<span>09302991048</span>-->
            <!--<i class="fas fa-phone"></i>-->
            <!--</div>-->
        </div>
    </nav>
    <div class="element-content">
        <h1 class="col-lg-5 col-md-7 mr-auto">سلامتی با ارزش است وقتی با برنامـه برای آن قدم برداریـد .</h1>
        <p class="col-lg-7 col-md-9 mr-auto">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
            طراحان گرافیک است. چاپگرها و متون
            بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای
            متنوع</p>
        @if(!auth()->check())
            <a href="{{ route('website.users.login') }}" class="custom-btn m-md-2 my-5">
               ورود به پنل کاربری
            </a>
        @endif
    </div>
</div>

<div id="section-bio" class="element-container bio">
    <div class="element-shape element-shape-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="element-fill" d="M0,6V0h1000v100L0,6z"></path>
        </svg>
    </div>
    <div class="col-md-11 col-12 mx-auto pb-lg-5 pb-md-4 pb-3">
        <div class="row d-flex flex-row flex-wrap align-items-center">
            <div class="col-md-6 mx-auto">
                <h2 class="element-title px-md-1 px-3">گروه ورزشی</h2>
                <p class="element-description text-justify px-md-1 px-3" dir="rtl">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                    چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                    و
                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال
                    و
                    آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان
                    رایانه
                    ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                </p>
            </div>
            <div class="col-md-6 mx-auto">
                <img src="{{ asset('website/img/gym.png') }}" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div id="section-feature" class="feature element-container">
    <div class="col-lg-11 col-12 mx-auto">
        <div class="row">
            <h2 class="col-12 text-center my-md-4 my-2">خدمات ما</h2>
            <div class="item col-md-4 col-sm-6 col-12 my-md-3 my-1">
                <div class="icon col-lg-3 col-md-4 col-sm-5 col-4">
                    <img src="{{ asset('website/img/icon1.png') }}" class="img-fluid">
                </div>
                <div class="description col-lg-9 col-md-8 col-sm-7 col-12">
                    <h5 class="my-2">بدنسازی</h5>
                    <p class="mb-md-2 mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                        طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                </div>
            </div>
            <div class="item col-md-4 col-sm-6 col-12 my-md-3 my-1">
                <div class="icon col-lg-3 col-md-4 col-sm-5 col-4">
                    <img src="{{ asset('website/img/icon2.png') }}" class="img-fluid">
                </div>
                <div class="description col-lg-9 col-md-8 col-sm-7 col-12">
                    <h5 class="my-2">تمرین خانگی</h5>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                </div>
            </div>
            <div class="item col-md-4 col-sm-6 col-12 my-md-3 my-1">
                <div class="icon col-lg-3 col-md-4 col-sm-5 col-4">
                    <img src="{{ asset('website/img/icon3.png') }}" class="img-fluid">

                </div>
                <div class="description col-lg-9 col-md-8 col-sm-7 col-12">
                    <h5 class="my-2">حرکات کششی</h5>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                </div>
            </div>
            <div class="item col-md-4 col-sm-6 col-12 my-md-3 my-1">
                <div class="icon col-lg-3 col-md-4 col-sm-5 col-4">
                    <img src="{{ asset('website/img/icon4.png') }}" class="img-fluid">

                </div>
                <div class="description col-lg-9 col-md-8 col-sm-7 col-12">
                    <h5 class="my-2">رژیم غذایی</h5>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                </div>
            </div>
            <div class="item col-md-4 col-sm-6 col-12 my-md-3 my-1">
                <div class="icon col-lg-3 col-md-4 col-sm-5 col-4">
                    <img src="{{ asset('website/img/icon5.png') }}" class="img-fluid">

                </div>
                <div class="description col-lg-9 col-md-8 col-sm-7 col-12">
                    <h5 class="my-2">تمرین هوازی</h5>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                </div>
            </div>
            <div class="item col-md-4 col-sm-6 col-12 my-md-3 my-1">
                <div class="icon col-lg-3 col-md-4 col-sm-5 col-4">
                    <img src="{{ asset('website/img/icon6.png') }}" class="img-fluid">

                </div>
                <div class="description col-lg-9 col-md-8 col-sm-7 col-12">
                    <h5 class="my-2">چکاپ هفتگی</h5>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="section-bmi" class="contact element-container">
    <div class="element-overlay"></div>
    <div class="element-shape element-shape-top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="element-fill" d="M0,6V0h1000v100L0,6z"></path>
        </svg>
    </div>
    <div class="element-shape element-shape-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="element-fill" d="M0,6V0h1000v100L0,6z"></path>
        </svg>
    </div>
    <div class="col-12 text-center my-md-4 my-3">
        <h1 class="col-md-6 mx-auto mb-5" style="font-family: iransans_web;font-size: 40px;">برنامه
            روزانه
            و تمرینات روزانه خود را برنامه ریزی کنید</h1>
        <div class="col-12 mb-5">
            <div class="d-flex flex-wrap flex-row-reverse justify-content-center align-items-center">
                <div class="col-lg-3 my-md-3 my-2">
                    <input type="number" id="weight" name="weight" placeholder="وزن (کیلوگرم)"
                           class="form-control form-control-lg" dir="rtl">
                </div>
                <div class="col-lg-3 my-md-3 my-2">
                    <input type="number" id="height" name="height" placeholder="قد (سانتی متر)"
                           class="form-control form-control-lg" dir="rtl">
                </div>
                <a href="javascript:void(0)" id="bmi-calculator-btn" class="custom-btn">محاسبه BMI</a>
                <div class="col-lg-6 my-md-3 my-2">
                    <input type="text" id="bmi-results" placeholder="محل قرارگیری نتیجه BMI شما"
                           style="font-size: 16px" class="form-control form-control-lg" dir="rtl" readonly disabled>
                </div>
                <a href="#" class="custom-btn my-md-3 my-2">از همین حالا شروع کنید</a>
            </div>
        </div>
    </div>
</div>

{{--<div id="section-comment" class="comment element-container">--}}
{{--<div class="col-lg-7 col-md-11 col-12 text-center mx-auto">--}}
{{--<div id="comments-carousel" class="carousel slide" data-ride="carousel">--}}
{{--<ul class="carousel-indicators">--}}
{{--<li data-slide-to="0" data-target="#comments-carousel" class="active"></li>--}}
{{--<li data-slide-to="1" data-target="#comments-carousel"></li>--}}
{{--<li data-slide-to="2" data-target="#comments-carousel"></li>--}}
{{--</ul>--}}
{{--<div class="carousel-inner">--}}
{{--<div class="carousel-item active">--}}
{{--<p class="my-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
{{--گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>--}}
{{--</div>--}}
{{--<div class="carousel-item">--}}
{{--<p class="my-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
{{--گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>--}}
{{--</div>--}}
{{--<div class="carousel-item">--}}
{{--<p class="my-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان--}}
{{--گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

<footer class="w-100" style="background-color: #353535;text-align: center;color : whitesmoke;padding: 8vh 0 ">
    تمامی حقوق این سایت محفوض میباشد
</footer>

<script src="{{ asset('website/js/jquery.min.js') }}"></script>
<script src="{{ asset('website/js/jquery.bez.min.js') }}"></script>
<script src="{{ asset('website/js/popper.min.js') }}"></script>
<script src="{{ asset('website/js/bootstrap.js') }}"></script>
<script src="{{ asset('website/js/calculate-bmi.js') }}"></script>
<script>
    $(document).ready(function () {
        $("li.nav-li a").on("click", function () {
            var elem_id = $(this).attr("href");
            $("body , html").animate({
                scrollTop: $("" + elem_id).offset().top
            }, 1000, $.bez([.785, .135, .15, .86]));
        });

        $("#bmi-calculator-btn").on("click", function () {
            calculate();
        });
    })
</script>
</body>
</html>
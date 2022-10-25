<!DOCTYPE html>
@php $locale = session()->get('locale'); @endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head style="">
    <title>{{ $titleSeo }}</title>
    {{--  start  code soroush--}}
    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/bootstrap.css')}}">
{{--    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/font-awesome.css')}}">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/FontAwesome.otf">--}}
    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/prettyPhoto.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/player/YTPlayer.css')}}">
    <link rel="icon" href="https://adib.com.tr/1-removebg-preview.png" type="image/png">
    {{--    font google--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
{{--    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/adib/new/css/responsive.css')}}">
    {{--    <!-- some code for meta content -->--}}
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133848856-1"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-133848856-1');
    </script>

    <meta name="description" content="{{$descriptionSeo}}"/>
    <meta name="keywords" content="{{$keywordsSeo}}">
    <link rel="canonical" href="{{$url_page}}"/>
    <meta property="og:locale" content="fa_IR"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="{{url('logo_adib.png')}}"/>
    <meta property="og:title" content="{{$titleSeo}}"/>
    <meta property="og:description" content="{{$descriptionSeo}}"/>
    <meta property="og:url" content="{{$url_page}}"/>
    <meta property="og:site_name" content="adib.com.tr"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
        /*@import url('https://v1.fontapi.ir/css/Shabnam');*/
        .mt-1
        {
            margin-top: 10px!important;
        }
        html, body, h1, h2, h3, h4, h4, h5, h6, p, div, span, a, body * {
            font-family: 'iransansdn', sans-serif;
        }
        textarea{
            resize: vertical !important;
        }

        .clients-say-item .client-comment:after {
            top: 20px !important;
        }

        h5 {
            letter-spacing: unset !important;
        }

        .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
            z-index: 2;
            color: #ffffff;
            cursor: default;
            background-color: #2D3E48 !important;
            border-color: #202E37 !important;
        }

        @media (max-width: 650px) {
            .top-header-p-e {
                margin-top: 10px;
                width: 100%;
            }

            #slid2_btn {
                right: -8vw !important;
                position: relative !important
            }

            #home1 {
                top: 100px !important;
            }

            .breadcrumb {
                margin-top: 60px;
            }
        }

        @keyframes pulse {
            0% {
                -moz-box-shadow: 0 0 0 0 rgba(27, 89, 141, 1);
                box-shadow: 0 0 0 0 rgba(27, 89, 141, 1);
            }
            90% {
                -moz-box-shadow: 0 0 35px 20px rgba(27, 89, 141, 0);
                box-shadow: 0 0 35px 20px rgba(27, 89, 141, 0);
            }
            100% {
                -moz-box-shadow: 0 0 0 0 rgba(27, 89, 141, 0);
                box-shadow: 0 0 0 0 rgba(27, 89, 141, 0);
            }
        }

        .wat_sapp {
            position: fixed;
            text-align: center;
            bottom: 6%;
            left: 2%;
            z-index: 999;
            animation-name: text-focus-in;
            animation-duration: 2.2s;
            animation-timing-function: linear;
            animation-delay: 0s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
            animation-fill-mode: backwards;
        }

        .wat_sapp img {
            width: 48%;
            border-radius: 50px !important;
            box-shadow: 0 0 50px 11px #2D3E48;
            margin-bottom: 5px;
            animation: pulse 2s infinite;
        }

        .wat_sapp p {
            animation: pulse2 2s infinite;
        }
        .owl-item,.customer_icon , .customer_icon h4{
            transition: 0.5s !important;
        }
        .owl-item:hover h4{
            transform: scale(1.2) !important;
            color: #F26341 !important;
            transition: 0.5s !important;
        }
        #home .details-on-top .support {
            background: #F26341;
            color: #FFFFFF;
            padding: 8px 14px;
            border-radius: 3px;
        }
        #slider .h5-slider {
            padding-left: 10px;
            background: rgba(0,0,0,0.6)
        }
        #home .language .flag {
            padding: 0px;
            width: 28px;
            margin: 0px 4px;
            border-radius: 2px;
        }
        #slider .h1-slider {
            position:relative;
            right: 50px;
            top: -10px;
        }
        #client-say .lorem-11 {
            padding:0 4px;
            display: flex;
            justify-content: end;
            align-items: center;
            margin-top: 30px
        }
        #modal-w .modal-body {
            padding-bottom: 80px !important;
        }
        #modal-w .modal-title {
            color: #F26341 !important;
            text-align: right !important;
            font-size: 18px !important;
        }
        #adib-job-form-create .grecaptcha-badge {
            right: 22px !important;
        }
        #adib-job-form-create select {
            height: auto;
            margin-bottom: 8px;
        }
        #adib-job-form-create input {
            height: 38px;
            margin-bottom: 8px;
        }
        #adib-job-form-create button , button.g-recaptcha {
            float: right;
            margin-left: 12px;
            padding: 12px 18px;
            margin-top: 8px !important;
            background: #2D728B;
            border-radius: 4px;
            color: white;
            border: none;
        }
        #scroll_address button.g-recaptcha {
            margin: 4px 0px 100px !important;
        }
        #team2 .content {
            padding: 0px;
        }
        #team2 .team-items .owl-wrapper-outer .owl-wrapper .owl-item .item {
            width: 100%;
        }
        #team2 .team-items .owl-wrapper-outer .owl-wrapper .owl-item .item p {
            font-size: 13px;
        }
        #team2 .team-items .owl-wrapper-outer .owl-wrapper .owl-item .item div.item-education ,#all-team .team-items .owl-wrapper-outer .owl-wrapper .owl-item .item div.item-education {
            padding-top: 6px;
        }
        #team2 h3.href {
            padding: 16px 0px 40px;
        }
        #team2 .team-items .owl-wrapper-outer .owl-wrapper .owl-item:hover h4 , #all-team .team-items .owl-wrapper-outer .owl-wrapper .owl-item:hover h4 {
            color: #29A9FF !important;
        }
        #all-team .main_title_a {
            margin: 60px 0px 0px;
        }
        #all-team .owl-carousel .owl-wrapper {
            width: 100% !important;
        }
        #all-team .owl-carousel .owl-item {
            width: 100% !important;
        }
        #all-team .owl-carousel .owl-item .item {
            min-height: 348px;
        }
        #blog .team-items .owl-wrapper-outer .owl-wrapper .owl-item .item {
            width: 100%;
        }
        #blog .blog-short {
            line-height: 22px;
            padding-bottom: 40px;
        }
        #blog .blog-load-more {
            display: flex;
            justify-content: center;
            align-items: center;
            /* margin-top: 60px; */
            position: absolute;
            bottom: 10px;
            width: 100%;
            right: 0px;
        }
        @media (min-width: 992px) {
            #team2 .main_title_a {
                margin: 0px 0 0px 0;
            }
            #team2 .main-content {
                margin-top: 0px;
            }
            .nav-menu > ul > li {
                padding: 0px;
            }
        }
        @media (max-width: 650px) {
            #blog .blog-load-more {
                bottom: 38px;
            }
            #home2{
                padding-top: 20px;
            }
            #pagetop {
                position: fixed;
                top: 0px;
            }
            #navigation {
                top: 76px;
                position: fixed;
            }
            #scroll_address .contact-social a {
                margin: 0 6px 0 0;
            }
            #scroll_address .adib-address {
                text-align: right;
            }
            #client-say .client-say-carousel .carousel a.left {
                left: 12px;
            }
            #client-say .client-say-carousel .carousel a.right {
                left: 62px;
            }
            #client-say .carousel-inner>.item {
                margin: auto 12px;
            }
            #client-say .content {
                padding-top: 28px;
            }
            #slider .h1-slider {
                right: 80px;
                font-size: 18px;
            }
            #navigation {
                top: -22px;
            }
            #pagetop {
                padding: 4px 0;
                padding-top: 8px;
            }
            #pagetop .pagetop .right, .pagetop .left {
                margin: 0px;
            }
            #home .language {
                margin-right: 16px;
            }
            #home .language .flag {
                margin: 0px 0px;
            }
            #home .details-on-top .support {
                padding: 2px 8px;
                margin-left: 8px;
            }
            #home .details-on-top {
                margin-left: 6%;
            }
            .revslide .rev-title-d {
                font-size: 22px;
            }
        }
    </style>

</head>
<body data-spy="scroll" data-target=".nav-menu" data-offset="50" style="overflow-x: hidden !important">
{{--modal--}}
<div id="myModalSlider" class="modal fade pt-0" role="dialog">
    <div class="modal-dialog modal-lg mt-0">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="height: 50px;padding: 0 20px;display: flex;
    align-items: center;">
                <div style="width: 100%;text-align: center;    color: #F26341;
    font-weight: 700;">{{__('sentence.form.text1')}}</div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p class="text-center my-0" style="padding: 8px 0">{{__('sentence.form.text2')}}</p>
                <div class="container-fluid">
                    <form class="row frm_send" action="{{route('form-post-slider',app()->getLocale())}}" method="post">
                        {{csrf_field()}}
                        <div class="col-md-6" style="margin-top: 5px">
                            <input type="text" class="form-control" name="full_name"
                                   placeholder="* {{__('sentence.form.name')}}">
                        </div>
                        <div class="col-md-6" style="margin-top: 5px">
                            <input type="text" class="form-control" name="email"
                                   placeholder="{{__('sentence.form.email')}}">
                        </div>
                        <div class="col-md-6" style="margin-top: 5px">
                            <input type="text" class="form-control" name="mobile"
                                   placeholder="* {{__('sentence.form.mobile')}}">
                        </div>
                        <div class="col-md-6" style="margin-top: 5px">
                            <input type="text" class="form-control" name="city"
                                   placeholder="{{__('sentence.form.city')}}">
                        </div>
                        <div class="col-md-12" style="margin-top: 5px">
                            <input type="text" class="form-control" name="subject"
                                   placeholder="{{__('sentence.form.subject')}}">
                        </div>
                        <div class="col-md-12" style="margin-top: 5px">
                            <textarea class="form-control px-2" name="text" placeholder="* {{__('sentence.form.text')}}"
                                      rows="5"></textarea>
                        </div>
                        <div class="col-md-12" style="margin-top: 5px">
                            <button type="submit" class="btn"
                                    style="background: #F26341;color: #fff;padding: 6px 40px">{{__('sentence.form.btn')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Page Loader-->
<div id="pageloader">
    <div class="loader-item">
        <img src="{{url("adib/new/images/loading.gif")}}" alt='Loading...'/>
    </div>
</div>
<!-- End Page Loader-->
<!-- Home Section -->
<section id="home" style="position: sticky !important;top: 0 !important;z-index: 1002!important;">
    <!-- Top Bar Section -->
    <section id="pagetop">
        <!-- Content -->
        <div class="content pagetop">

            <!-- Top Details-->
            <div class="col-xs-9 left">
                <div class="top_details"
                     style="width: 100%;    display: flex; flex-wrap: wrap;   justify-content: space-between;">
                    <div class="details-on-top"><a class="read-more support " href="https://adib-it.com/support/login">
                                <i class="fa fa-cogs" style="margin: 0 14px 0 0px;"></i>پشتیبانی</a>
                    </div>
                    <!-- Languages DropDown-->
                    <div class="language drop" >
                        {{-- new --}}
                        <div class="d-flex">
                            <a href="https://adib.com.tr/en"><img class="flag" src="{{url('adib/new/images/en.png')}}" alt="icon"></a>
                            <a href="https://adib.com.tr/tr"><img class="flag" src="{{url('adib/new/images/tr.png')}}" alt="icon"></a>
                            <a href="https://adib.com.tr/ar"><img class="flag" src="{{url('adib/new/images/ar.png')}}" alt="icon"></a>
                            <a href="{{url('/')}}"><img class="flag" src="{{url('adib/new/images/fa.png')}}" alt="icon"></a>
                        </div>
                        {{-- old --}}
                        {{-- @if($locale=='tr' )
                            <img style="width: 25px" src="{{url('adib/new/images/tr.png')}}" alt="icon tr">
                        @elseif($locale == 'ar')
                            <img style="width: 25px" src="{{url('adib/new/images/ar.png')}}" alt="icon ar">
                        @elseif($locale == 'en')
                            <img style="width: 25px" src="{{url('adib/new/images/en.png')}}" alt="icon en">
                        @elseif($locale == 'fa')
                            <img style="width: 25px" src="{{url('adib/new/images/fa.png')}}" alt="icon fa">
                        @else
                            <a href="#"><i class="fa fa-globe"></i> </a>
                        @endif --}}

                        <div class="languages-panel">
                            <ul class="content">
                                <li><a href="https://adib.com.tr/en"><img style="width: 25px"
                                                                          src="{{url('adib/new/images/en.png')}}"
                                                                          alt="icon">
                                        english
                                        @if($locale=='en' )<i class="fa fa-check lang_checked"></i>@endif
                                    </a></li>
                                {{--                                <li class="active"><a href="{{url('en')}}">english <i class="fa fa-check lang_checked"></i></a></li>--}}
                                <li><a href="https://adib.com.tr/tr">
                                        <img style="width: 25px" src="{{url('adib/new/images/tr.png')}}" alt="icon">
                                        turkish
                                        @if($locale=='tr' )<i class="fa fa-check lang_checked"></i>@endif
                                    </a></li>
                                <li><a href="https://adib.com.tr/ar">
                                        <img style="width: 25px" src="{{url('adib/new/images/ar.png')}}" alt="icon">
                                        arabic
                                        @if($locale=='ar' )<i class="fa fa-check lang_checked"></i>@endif
                                    </a></li>
                                <li><a href="{{url('/')}}">
                                        <img style="width: 25px" src="{{url('adib/new/images/fa.png')}}" alt="icon">
                                        Persian
                                        @if($locale=='fa' )<i class="fa fa-check lang_checked"></i>@endif
                                    </a></li>


                            </ul>
                        </div>
                    </div>
                    <div style="display: flex;flex-wrap: wrap;justify-content: space-evenly;" class="top-header-p-e">
                        <!-- End Languages DropDown-->
                        <span class="details-on-top hidden-in-mobile-a" style="direction: rtl"><i
                                    class="fa fa-map-marker"></i> {{substr(trans('sentence.footer.address'),0,70)}}<a
                                    href="#scroll_address" class="scroll" style="color: #F26341 ">...</a></span>
                        <span class="details-on-top"><i class="fa fa-phone"></i><a style="color: #BFCAD0"
                                                                                   href="tel:(+98) 21 49295">(+98) 21 49295</a></span>
                        <span class="details-on-top"><i class="fa fa-envelope"></i><a style="color: #BFCAD0"
                                                                                      href="mailto:info@adib-it.com">info@adib-it.com</a></span>

                    </div>
                </div>
            </div>
            <!-- End Top Details-->

            <!-- Top Social Media-->
            <div class="col-xs-3 right hidden-in-mobile-a">
                <div class="top-social-media">
                    <a style="display: inline-flex;justify-content: center;align-items: center" href="https://twitter.com/Adib_IT_Group"><i class="fa fa-twitter"></i></a>
                    <a style="display: inline-flex;justify-content: center;align-items: center" href="https://t.me/Adibit"><i class="fa fa-telegram"></i></a>
                    <a style="display: inline-flex;justify-content: center;align-items: center" href="https://instagram.com/adib_group?utm_medium=copy_link"><i class="fa fa-instagram"></i></a>
                    <a style="display: inline-flex;justify-content: center;align-items: center" href="https://www.linkedin.com/in/adib-it-890926173/"><i class="fa fa-linkedin"></i></a>
                    <a style="display: inline-flex;justify-content: center;align-items: center" href="https://www.aparat.com/adibwebdesign"><i class="fa fa-youtube"></i></a>
                    <a style="display: inline-flex;justify-content: center;align-items: center" href="https://www.pinterest.com/adibitc"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>
            <!-- End Social Media-->
            <div class="clear"></div>
        </div>
        <!-- End Content -->
    </section>
    <!-- End Top Bar Section -->
</section>
<section id="home1" style="position: sticky !important;top: 54px;z-index: 1001!important;">
    <!-- Navigation Section -->
    <section id="navigation" class="shadow">
        <!-- Content -->
        <div class="content navigation">
            <!-- Logo -->
            <div class="logo" style="display: flex;    justify-content: center;    align-items: center;height: 100%;">
                <a class="scroll" style="display: inline;margin-top: 0;" href="{{url('/')}}"><img
                            src="{{url('1-removebg-preview.png')}}"
                            style="    height: 45px!important;position: relative; " alt="Logo"/>
                    <span style="font-size: 13px;color: #fff;position: relative;top: 1px;margin-left: 6px">ادیب گستر عصر نوین</span>
                </a>
            </div>
            <!-- End Logo -->

            <!-- Nav Menu -->
            @php
                $Menu = App\Menu::where('id','!=','4')->get();
                $ProductCategory= App\ProductCategory::all();
                $service=App\Service::get();
                $product = App\Product::all();
            @endphp
            <div class="nav-menu">
                <ul class="nav main-nav">

                    @if(trans('sentence.menu.analyze') != 'null' and $locale == 'fa')
                        <li><a class="scroll" href="{{url('order')}}">آنالیز سایت </a></li>
                    @endif

                    @if(trans('sentence.menu.analyze') != 'null' and $locale == 'fa')
                        <li><a class="scroll" href="{{ route('job-form-index',$locale) }}">استخدام </a></li>
                    @endif

                    @if(trans('sentence.menu.contactUs') != 'null')
                        <li><a class="scroll" href="#contact"> {{trans('sentence.menu.contactUs')}}</a></li>
                    @endif
                    @if(trans('sentence.menu.transCAD') != 'null')
                        <li><a class="scroll" href="{{ route('trans-cad') }}">{{trans('sentence.menu.transCAD')}}</a>
                        </li>
                    @endif
                    @if(trans('sentence.menu.hire') != 'null' and $locale == 'fa')
                        <li><a class="scroll" href="{{route('employment-form')}}"> {{trans('sentence.menu.hire')}}</a>
                        </li>
                    @endif
                    @if(trans('sentence.menu.templates') != 'null')
                        <li class="{{ (request()->segment(2) == 'Portfolio-design-site') ? 'active' : '' }}"><a
                                    class="scroll"
                                    @if(request()->is('fa')) href="#portfolio"
                                    @else href="{{url($locale."#portfolio")}}" @endif >نمونه کارها</a>
                        </li>
                    @endif
                    @if(trans('sentence.menu.service') != 'null')
                        <li><a class="scroll" aria-label="AdibIT"
                               @if(request()->is('fa')) href="#services"
                               @elseif((request()->segment(2) == 'service-detail') )
                                       href="#serviceDetail"
                               @else href="{{url($locale."#services")}}" @endif >{{trans('sentence.menu.service')}}</a>
                        </li>
                    @endif
                        @if(trans('sentence.menu.news') != 'null' and $locale == 'fa')
                            <li><a class="scroll"   @if(request()->is('fa')) href="#our-clients"
                                   @else href="{{ route('user-news-list1') }}" @endif >   {{trans('sentence.menu.news')}}</a></li>
                        @endif
{{--                        client-say--}}
                    @if(trans('sentence.menu.articles') != 'null')
                        <li><a class="scroll"
                               @if(request()->is('fa')) href="#blog"
                               @else href="{{url($locale."#blog")}}" @endif> {{trans('sentence.menu.articles')}}</a>
                        </li>
                    @endif
                    @if(trans('sentence.menu.customers') != 'null')

                        <li><a class="scroll" aria-label="AdibIT"
                               @if(request()->is('fa')) href="#coustomer"
                               @else href="{{url($locale."#coustomer")}}" @endif >{{trans('sentence.menu.customers')}}</a>
                        </li>
                    @endif
                    @if($locale == 'fa')
                        <li><a class="scroll" aria-label="AdibIT"
                               @if(request()->is('fa')) href="#history"
                               @else href="{{url($locale."#history")}}" @endif >
                                تاریخچه
                            </a></li>
                    @endif
                    @if(trans('sentence.menu.aboutUs') != 'null')
                        <li><a class="scroll"
                               @if(request()->is('fa')) href="#important_links"
                               @else href="{{url($locale."#important_links")}}" @endif >{{trans('sentence.menu.aboutUs')}}</a>
                        </li>
                    @endif
                    @if(trans('sentence.menu.home') != 'null')
                        <li style="position: relative"
                            class=" {{ (request()->is('fa')) ? 'active' : '' }}">
                            <a class="scroll" aria-label="AdibIT"
                               href="{{ url(session()->get('locale')??$locale) }}">{{trans('sentence.menu.home')}}</a>
                            <a href="#slider" style=";top: -100000px;position: absolute;    opacity: 0;"></a>
                        </li>
                    @endif
                </ul>
            </div>
            <!-- End Nav Menu -->

            <!-- Dropdown Menu For Mobile Devices-->
            <div class="dropdown mobile-drop"
                 style="position:sticky!important;;top: 0!important;z-index: 99!important;">
                <a data-toggle="dropdown" class="mobile-menu" href="#"><i class="fa fa-bars"></i></a>
                <ul class="nav dropdown-menu " style="width: 96.5vw;    direction: rtl;" role="menu">
                    @if(trans('sentence.menu.home') != 'null')
                        <li style="position: relative">
                            <a class="scroll" aria-label="AdibIT"
                               href="{{ url(session()->get('locale')??$locale) }}">{{trans('sentence.menu.home')}}</a>
                            <a href="#slider" style=";top: -100000px;position: absolute;    opacity: 0;"></a>
                        </li>
                    @endif
                    @if(trans('sentence.menu.aboutUs') != 'null')
                        <li><a class="scroll"
                               @if(request()->is('fa')) href="#important_links"
                               @else href="{{url($locale."#important_links")}}" @endif >{{trans('sentence.menu.aboutUs')}}</a>
                        </li>
                    @endif
                    @if($locale == 'fa')
                        <li><a class="scroll" aria-label="AdibIT"
                               @if(request()->is('fa')) href="#history"
                               @else href="{{url($locale."#history")}}" @endif >
                                تاریخچه
                            </a></li>
                    @endif
                    @if(trans('sentence.menu.customers') != 'null')

                        <li><a class="scroll" aria-label="AdibIT"
                               @if(request()->is('fa')) href="#coustomer"
                               @else href="{{url($locale."#coustomer")}}" @endif >{{trans('sentence.menu.customers')}}</a>
                        </li>
                    @endif
                    @if(trans('sentence.menu.articles') != 'null')
                        <li><a class="scroll"
                               @if(request()->is('fa')) href="#blog"
                               @else href="{{url($locale."#blog")}}" @endif> {{trans('sentence.menu.articles')}}</a>
                        </li>
                    @endif
                        @if(trans('sentence.menu.news') != 'null' and $locale == 'fa')
                            <li><a class="scroll"   @if(request()->is('fa')) href="#our-clients"
                                   @else href="{{ route('user-news-list1') }}" @endif >   {{trans('sentence.menu.news')}}</a></li>
                        @endif
                    @if(trans('sentence.menu.service') != 'null')
                        <li><a class="scroll" aria-label="AdibIT"
                               @if(request()->is('fa')) href="#services"
                               @else href="{{url($locale."#services")}}" @endif >{{trans('sentence.menu.service')}}</a>
                        </li>
                    @endif
                    @if(trans('sentence.menu.templates') != 'null')
                        <li class="{{ (request()->segment(2) == 'Portfolio-design-site') ? 'active' : '' }}"><a
                                    class="scroll"
                                    @if(request()->is('fa')) href="#portfolio"
                                    @else href="{{url($locale."#portfolio")}}" @endif >نمونه کارها</a>
                        </li>
                    @endif
                    @if(trans('sentence.menu.hire') != 'null' and $locale == 'fa')
                        <li><a class="scroll" href="{{route('employment-form')}}"> {{trans('sentence.menu.hire')}}</a>
                        </li>
                    @endif
                    @if(trans('sentence.menu.transCAD') != 'null')
                        <li><a class="scroll" href="{{ route('trans-cad') }}">{{trans('sentence.menu.transCAD')}}</a>
                        </li>
                    @endif
                    @if(trans('sentence.menu.contactUs') != 'null')
                        <li><a class="scroll" href="#contact"> {{trans('sentence.menu.contactUs')}}</a></li>
                    @endif
                    @if(trans('sentence.menu.analyze') != 'null' and $locale == 'fa')
                        <li><a class="scroll" href="{{url('order')}}">آنالیز سایت </a></li>
                    @endif

                </ul>
            </div>
            <!-- End Dropdown Menu For Mobile Devices-->
            <div class="clear"></div>
        </div>
        <!-- End Content -->
    </section>
    <!-- End Navigation Section -->
</section>
{{--siders--}}
@if(request()->is('fa'))
    <section id="home2">
        <!-- Revolution Slider -->
        <section id="slider">
            <div class="tp-banner">
                <ul>
                    <!-- Slide -->
                    <li class="revslide" data-transition="random" data-slotamount="7" data-masterspeed="800">
                        <!-- MAIN IMAGE -->
                        {{--                        <img src="https://arwen.ideal-theme.com/html/arwen/images/rev-slider/slide1.jpg" alt="slidebg1"--}}
                        {{--                             data-bgfit="cover"--}}
                        {{--                             data-bgposition="center top" data-bgrepeat="no-repeat">--}}

                        <img src="{{url("adib/new/images/slid_1.jpg")}}" alt="slidebg1"
                             data-bgfit="cover"
                             data-bgposition="center top" data-bgrepeat="no-repeat">
                        <!-- Layer 1 -->
                        <div class="tp-caption sft customout"
                             data-x="center"
                             data-y="100"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="1400"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
                            <h4 class="rev-text rev-title-d">
                                مدیریت حرفه ای رسانه های اجتماعی
                            </h4>
                        </div>

{{--                        <!-- Layer 2 -->--}}
{{--                        <div class="tp-caption sft customout "--}}
{{--                             data-x="center"--}}
{{--                             data-y="210"--}}
{{--                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"--}}
{{--                             data-speed="1000"--}}
{{--                             data-start="1700"--}}
{{--                             data-easing="Power4.easeOut"--}}
{{--                             data-endspeed="500"--}}
{{--                             data-endeasing="Power4.easeIn"--}}
{{--                             data-captionhidden="on">--}}
{{--                            <h5 class="rev-text rev-title-e" style="line-height: 1.2">--}}
{{--                                Instagram Twitter Facebook Linkedin <br>و سایر موارد ضروری برای صنعت شما--}}
{{--                                موسسه و کسب و کار شما در <br> همه کانال های رسانه های اجتماعی--}}
{{--                                ما خدمات مدیریت حرفه ای را ارائه می دهیم--}}
{{--                            </h5>--}}
{{--                        </div>--}}

                        <!-- Layer 3 -->
{{--                        <div class="tp-caption sft customout "--}}
{{--                             data-x="center"--}}
{{--                             data-y="300"--}}
{{--                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"--}}
{{--                             data-speed="1000"--}}
{{--                             data-start="2000"--}}
{{--                             data-easing="Power4.easeOut"--}}
{{--                             data-endspeed="500"--}}
{{--                             data-endeasing="Power4.easeIn"--}}
{{--                             data-captionhidden="on">--}}
{{--                            <div><a class="white-button "--}}
{{--                                    style="margin-top: 45px;position: relative;z-index: 10000;left: -20vw" href="#">--}}
{{--                                    مرور--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </li>

                    <!-- Slide -->
                    <li class="revslide" data-transition="random" data-slotamount="7" data-masterspeed="800">
                        <!-- MAIN IMAGE -->
                        <img src="{{url('/adib/new/images/rev-slider/slide2.jpg')}}" alt="slidebg2" data-bgfit="cover"
                             data-bgposition="center top" data-bgrepeat="no-repeat">

                        <!-- Layer 1 -->
                        <div class="tp-caption lfb customout"
                             data-x="0"
                             data-y="120"
                             data-customin="x:0;y:50;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="1200"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                        >
                            <img src="{{url('/adib/new/images/rev-slider/write.png')}}" style="height: 430px!important;width: auto!important" alt="slider"/>
                        </div>


                        <!-- Layer 2 -->
                        <div class="tp-caption lft customout"
                             data-x="1000"
                             data-y="150"
                             data-customin="x:0;y:50;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="1500"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                        >
                            <img src="{{url('/adib/new/images/rev-slider/balon.png')}}" alt=""/>
                        </div>

                        <!-- Layer 3 -->
                        <div class="tp-caption  lft customout"
                             data-x="300"
                             data-y="50"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="2000"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
                            <h1 class="rev-text rev-title-a h1-slider">
                                ما ایده های شما را به بهترین شکل خلق می کنیم

                            </h1>
                        </div>

                        <!-- Layer 4 -->
                        <div class="tp-caption  skewfromrightshort customout hidden-in-mobile-a"
                             data-x="300"
                             data-y="100"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="2300"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
                            <h2 class="rev-text-b rev-title-b" style="line-height: 1.8;text-align: end">
                                طراحی سایت – طراحی اپلیکیشن – تبلیغات در گوگل
                                <br>
                                طرح های پست اینستاگرام

                            </h2>
                        </div>

                        <!-- Layer 5 -->
                        <div class="tp-caption customin customout"
                             data-x="600"
                             data-y="210"
                             data-customin="x:50;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="2900"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                        >
                            <h3 class="rev-text rev-title-c"><i class="fa fa-laptop"></i>
                                طراحی وب سایت

                            </h3>
                        </div>

                        <!-- Layer 6 -->
                        <div class="tp-caption customin customout hidden-in-mobile-c"
                             data-x="600"
                             data-y="310"
                             data-customin="x:50;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="3200"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                        >
                            <h3 class="rev-text rev-title-c"><i class="fa fa-html5"></i>
                                تبلیغات در گوگل

                            </h3>
                        </div>

                        <!-- Layer 7 -->
                        <div class="tp-caption customin customout "
                             data-x="600"
                             data-y="410"
                             data-customin="x:50;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="3800"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                        >
                            <a class="white-button scroll" id="slid2_btn" href="#about">
                                بیشتر

                            </a>
                        </div>

                        <!-- Layer 8 -->
                        <div class="tp-caption customin customout hidden-in-mobile-a"
                             data-x="740"
                             data-y="410"
                             data-customin="x:50;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="4100"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                        >
                            <a class="red-button" href="#">
                                اکنون سفارش دهید

                            </a>
                        </div>
                    </li>

                    <!-- Slide -->
                    <li class="revslide" data-transition="random" data-slotamount="7" data-masterspeed="800">
                        <!-- MAIN IMAGE -->
                        {{--                        <img src="https://arwen.ideal-theme.com/html/arwen/images/rev-slider/slide3.jpg" alt="slidebg3"--}}
                        {{--                             data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">--}}

                        <img src="{{url("adib/new/images/slid_2_back.jpg")}}" alt="slidebg3"
                             data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">

                        <!-- Layer 1 -->
                        <div class="tp-caption sfb customout"
                             data-x="200"
                             data-y="270"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="900"
                             data-start="900"
                             data-easing="Power4.easeOut"
                             data-endspeed="1300"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
                            {{--                            <img src="https://arwen.ideal-theme.com/html/arwen/images/rev-slider/earth.png" alt="earth"/>--}}
                            {{--                                                        <img src="{{url("adib/new/images/slid_2_back.jpg")}}" alt="earth"/>--}}
                        </div>

                        <!-- Layer 2 -->
                        <div class="tp-caption sfl customout"
                             data-x="center"
                             data-y="50"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="900"
                             data-start="1200"
                             data-easing="Power4.easeOut"
                             data-endspeed="900"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
                            <h5 class="rev-text rev-title-d h5-slider">
                                چرا ما را انتخاب کنید؟
                            </h5>
                        </div>


                        <!-- Layer 4 -->
                        <div class="tp-caption sfb customout hidden-in-mobile-a"

                             data-x="center"
                             data-y="140"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="900"
                             data-start="1800"
                             data-easing="Power4.easeOut"
                             data-endspeed="900"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
                            <h2 class="rev-text rev-title-e"
                                style="margin-bottom: 20px;font-size: 20px;line-height: 1.2;position: relative;left: -25px">
                                ما به قدرت ملاقات چهره به چهره ایمان داریم! در راستای خواسته های شما
                                رویاهای شما <br>
                                ما وب سایت را فاش می کنیم.
                                موارد بیشتری وجود دارد

                            </h2>
                        </div>

                        <!-- Layer 5 -->
                        <div class="tp-caption sfb customout"
                             data-x="center"
                             data-y="255"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="900"
                             data-start="2100"
                             data-easing="Power4.easeOut"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
                            <h3 class="rev-text rev-title-c"
                                style="background: rgba(0,0,0,0.6);direction: rtl;position: relative;left: -12px"><i
                                        class="fa fa-desktop"></i>
                                طراحی سفارشی - وب سایت شرکتی - وب سایت تجارت الکترونیک

                            </h3>
                        </div>

                        <!-- Layer 6 -->
                        <div class="tp-caption sfb customout"
                             data-x="900"
                             data-y="30"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="900"
                             data-start="2700"
                             data-easing="Power4.easeOut"
                             data-endspeed="900"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
                            {{--                            <img src="https://arwen.ideal-theme.com/html/arwen/images/rev-slider/girl.png" alt="check"/>--}}
                            <img src="{{url("adib/new/images/slid_2_girl.png")}}" style="width: 250px;" alt="check"/>
                        </div>

                        <!-- Layer 7 -->
                        <div class="tp-caption sft customout "

                             data-x="800"
                             data-y="30"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="900"
                             data-start="3000"
                             data-easing="Power4.easeOut"
                             data-endspeed="900"
                             data-endeasing="Power4.easeIn"
                             data-captionhidden="on">
                            {{--                            <img src="https://arwen.ideal-theme.com/html/arwen/images/rev-slider/gull.png" alt="check"/>--}}
                            <img src="{{url("adib/new/images/slid_2_mark.png")}}" style="width: 100px;" alt="check"/>
                        </div>

                        <!-- Layer 8 -->
                        <div class="tp-caption customin customout hidden-in-mobile-b hidden-in-mobile-c"
                             data-x="center"
                             data-y="370"
                             data-customin="x:50;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1000"
                             data-start="2500"
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             data-endeasing="Power4.easeIn"
                        >
                            <a class="red-button" href="#">
                                اکنون پیشنهاد را دریافت کنید

                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Revolution Slider -->
    </section>
    <!-- End Home-->
@endif
@yield('body')
<!-- Contact Section -->
<section id="contact" class="main-content" style="margin-top:12px;padding: 30px 0 0 0;background: #fff">
    <div>
        <h1 style="text-align: center" class="main_title_a ">
            {{trans('sentence.footer.tel')}}
        </h1>
    </div>
    <!-- Google Map -->
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2289.8083161788427!2d51.29908064715312!3d35.7439718479578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8dfce6b96eef51%3A0x495625fae1ce6924!2sAdib%20IT%20Group!5e0!3m2!1sen!2s!4v1648444715597!5m2!1sen!2s"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- End Google Map -->

    <!-- Content -->

    <!-- End Content -->
</section>

<section>
    <div class="content" id="scroll_address">
        <div class="col-md-6 animated" data-animation="fadeInLeft" data-animation-delay="100">

            <!-- Main Title -->
        {{--            <h1 class="main_title_a align-left">--}}
        {{--                {{trans('sentence.footer.tel')}}--}}
        {{--            </h1>--}}

        <!-- Address -->
            <address dir="rtl" style="padding-top: 10px">
                <p class="adib-address" style="display: flex"><i class="fa fa-map-marker"></i><i class="fa fa-minus"></i>
                    <span>{{trans('sentence.footer.address')}}</span></p>
                <p><i class="fa fa-add1 fa-phone"></i><i class="fa fa-minus"></i>(+98) 21 49295 </p>
                <p><i class="fa fa-mobile "></i><i class="fa fa-minus"></i>(+98) 21-44620366</p>
                <p><i class="fa fa-add3 fa-envelope"></i><i class="fa fa-minus"></i> info@adib-it.com</p>
                {{--                <p><i class="fa fa-globe"></i><i class="fa fa-minus"></i>www.yoursite.com</p>--}}
            </address>
            <!-- End Address -->

            <!-- Social Media Icons -->
            <div class="contact-social"
                 style="display: flex;justify-content: center;flex-wrap: wrap;align-items: center;">
                <a style="display: inline-flex;justify-content: center;align-items: center" href="https://twitter.com/Adib_IT_Group"><i class="fa fa-twitter"></i></a>
                <a style="display: inline-flex;justify-content: center;align-items: center" href="https://t.me/Adibit"><i class="fa fa-telegram"></i></a>
                <a style="display: inline-flex;justify-content: center;align-items: center" href="https://instagram.com/adib_group?utm_medium=copy_link"><i class="fa fa-instagram"></i></a>
                <a style="display: inline-flex;justify-content: center;align-items: center" href="https://www.linkedin.com/in/adib-it-890926173/"><i class="fa fa-linkedin"></i></a>
                <a style="display: inline-flex;justify-content: center;align-items: center" href="https://www.aparat.com/adibwebdesign"><i class="fa fa-youtube"></i></a>
                <a style="display: inline-flex;justify-content: center;align-items: center" href="https://www.pinterest.com/adibitc"><i class="fa fa-pinterest"></i></a>
            </div>
            <!-- End Social Media Icons -->

        </div>
        <div class="col-md-6 animated" data-animation="fadeInRight" data-animation-delay="100">

            <!-- Main Title -->
            {{--    <h1 class="main_title_a align-left" style="padding-top: 35px;text-align: center !important">--}}
            {{--        در تماس باشید--}}
            {{--    </h1>--}}

            <form method="post" action="{{route('contact-store',app()->getLocale())}}" id="contact-form">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6 col-sm-6 mt-1" style="direction: rtl">
                        <input type="text" class="form-control " name="name" id="name"
                               placeholder="نام" required>
                    </div>
                    <div class="col-md-6 col-sm-6 mt-1" style="direction: rtl">
                        <input type="email" class="form-control" name="email" id="email"
                               placeholder="ایمیل"
                               required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 mt-1" style="direction: rtl">
                        <input type="tel" class="form-control" name="mobile" id="mobile"
                               placeholder="موبایل"
                               required>
                    </div>
                    <div class="col-md-6 col-sm-6 mt-1" style="direction: rtl">
                        <input type="text" class="form-control" name="subject" id="subject"
                               placeholder="موضوع"
                               required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 mt-1" style="direction: rtl">
<textarea class="form-control" name="text" id="text" required
          placeholder="پیام"
          rows="9"></textarea>
                    </div>
                </div>
                <button class="g-recaptcha" data-sitekey="6LfLS9kgAAAAAH0jCae-OshbDmgb87XNd3MQj-6U" data-callback='onSubmit2' data-action='submit'>ارسال</button>
            </form>

        </div>
    </div>
</section>

<div class="clear"></div>
<!-- Footer Section -->
<section id="footer" class="main-content">
    <div class="content footer">
        <div class="col-xs-12 align-center">

            <!-- Go To Top -->
            <div id="go-top" class="animated" data-animation="fadeInUp" data-animation-delay="0">
                <a href="#home" class="scroll"><i class="fa fa-chevron-up"></i></a>
            </div><!-- End Go To Top -->

            <p class="footer-text copyright animated" data-animation="fadeInUp" data-animation-delay="100">
                Copyright © 2022 - ADIB.COM.TR . تمامی حقوق محفوظ است.
            </p><!-- End Site Copyright -->

        </div>
        <div class="clear"></div>
    </div>
    <!-- End Footer Content -->
</section>

<div class="wat_sapp wat_sapp1">
{{--    <a target="_blank" rel="noreferrer" href="https://api.whatsapp.com/send?phone=+905317677479">--}}
    <a target="_blank" rel="noreferrer" href="https://api.whatsapp.com/send?phone=+905437707479">
        <img class="social_img" src="{{url('adib/whatss4.png')}}" alt="whatsapp adib">
    </a>
</div>
<!-- End Footer Section -->

<script type="text/javascript" src="{{url('/adib/new/js/jquery-1.10.2.min.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/jquery.appear.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/modernizr-latest.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/SmoothScroll.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/jquery.parallax-1.1.3.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/jquery.sticky.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/jquery.isotope.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/rev-slider/jquery.themepunch.plugins.min.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/rev-slider/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/jquery.mb.YTPlayer.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
{{--<script src="http://maps.google.com/maps/api/js?sensor=false"></script>--}}
<script type="text/javascript" src="{{url('/adib/new/js/jquery.mapmarker.js')}}"></script>
<script type="text/javascript" src="{{url('/adib/new/js/scripts.js')}}"></script>

<script>
    @if(session()->has('err_message'))
    $(document).ready(function () {
        Swal.fire({
            title: "ناموفق",
            text: "{{ session('err_message') }}",
            icon: "warning",
            timer: 6000,
            timerProgressBar: true,
        })
    });
    @endif
    @if(session()->has('flash_message'))
    $(document).ready(function () {
        Swal.fire({
            title: "موفق",
            text: "{{ session('flash_message') }}",
            icon: "success",
            timer: 6000,
            timerProgressBar: true,
        })
    })
    ;@endif
    @if (count($errors) > 0)
    $(document).ready(function () {
        Swal.fire({
            title: "ناموفق",
            icon: "warning",
            html:
                    @foreach ($errors->all() as $key => $error)
                            '<p class="text-right mt-2 ml-5" dir="rtl"> {{$key+1}} : ' +
                    '{{ $error }}' +
                    '</p>' +
                    @endforeach
                            '<p class="text-right mt-2 ml-5" dir="rtl">' +
                    '</p>',
            timer: parseInt('{{count($errors)}}') * 1500,
            timerProgressBar: true,
        })
    });
    @endif
</script>
<script>
    function onSubmit(token) {
        document.getElementById("adib-job-form-create").submit();
    }
    function onSubmit2(token) {
        document.getElementById("contact-form").submit();
    }
</script> 
</body>
</html>

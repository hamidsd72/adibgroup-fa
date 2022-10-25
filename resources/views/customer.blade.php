@extends('layouts.user')
@section('links')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
@endsection


@php $locale = session()->get('locale'); @endphp




@push('stylesheets')




@endpush
@section('body')
    <style>


    .air .fssc {
        padding: 42px 54px 44px 54px !important;
        height: 220px;
    }

    .air .monitor {
        background: rgba(0, 0, 0, 0) url(https://mockuphone.com/static/images/devices/apple-ipadair2-gold-portrait.png) no-repeat scroll center center/96% 93% !important;
    }

    .iphone .fssc {
        height: 182px;
        padding: 43px 15px 41px 17px !important;
        margin-left: -4px;
    }

    .iphone .fssc {
        height: 180px;
    }

    .iphone .monitor {
        background: rgba(0, 0, 0, 0) url(https://mockuphone.com/static/images/devices/apple-iphone5-white-portrait.png) no-repeat scroll center center/201% 94% !important;
    }

    .services,
    .left-header {
        display: none;
    }

    .right-header {
        float: right;
    }

    main.content {
        margin-top: 0;
    }

    .header {
        height: 240px;
    }

    .logo-description {
        margin-top: 50px;
    }

    .prosda img {
        width: 100%;
        margin-bottom: 8px;
    }

    .prosda {
        background-color: #fff;
        padding: 16px;
        border-radius: 3px;
        box-shadow: 1px 1px 7px 2px #eaeaea;
    }

    .prosda h5 {
        font-size: 13px;
        text-align: center;
    }

    .netre {
        direction: rtl;
        line-height: 3;
        font-size: 12px;
    }

    .cust-box {
        background-color: #fff;
        padding: 20px;
        border-radius: 2px;
        /*box-shadow: 1px 2px 7px 1px rgba(0, 0, 0, 0.07);*/

        margin-bottom: 30px;
        direction: rtl;
    }

    .cust-box ul li:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: 0;
    }

    @-moz-keyframes spin {
        100% {
            -moz-transform: rotate(360deg)
        }
    }

    @-webkit-keyframes spin {
        100% {
            -webkit-transform: rotate(360deg)
        }
    }

    @keyframes spin {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    .services-customer {
        position: absolute;
        left: 0;
        top: 0;
        margin: 70px 0 0 20px;
    }

    .services-customer i.fa {
        font-size: 25px;
        border: 1px solid #d0d0d0;
        border-radius: 50%;
        float: left;
        width: 50px;
        height: 50px;
        text-align: center;
        line-height: 1.8;
        color: #9E9E9E;
        transition: .2s;
    }

    .circle {
        border-radius: 50%;
    }

    .icon-bordered {
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 50%;
    }

    .icon-bordered {
        position: absolute;
        width: 56px;
        height: 56px;
        border-radius: 50%;
        left: 12px;
        margin-top: -2px;
        -webkit-animation: spin 4s linear infinite;
        -moz-animation: spin 4s linear infinite;
        animation: spin 4s linear infinite;
    }

    .icon-bordered:before {
        content: '';
        width: 5px;
        height: 5px;
        background: #009688;
        float: left;
        border-radius: 50%;
        margin: 1px;
    }

    .cust-box ul li {
        font-size: 12px;
        width: 75%;
        padding-bottom: 5px;
        margin-bottom: 5.2222px;
        color: #777;
    }

    .picfssc {
        float: left;
        width: 268px;
        margin: -20px 0 -20px 0;
    }

    .picfssc.air {
        width: 200px;
        margin: 25px 0 -25px -30px;
    }

    .air .monitor {
        background: rgba(0, 0, 0, 0) url({{url('/assets/img/air.png')}}) no-repeat scroll center center/96% 93%;
    }

    .air .fssc {
        padding: 33px 18px 32px 53px;
        height: 220px;
    }

    .iphone .monitor {
        background: rgba(0, 0, 0, 0) url({{url('/assets/img/iphone.png')}}) no-repeat scroll center center/96% 93%;
    }

    .picfssc.iphone {
        width: 90px;
        margin: 57px 0 -15px -30px;
    }

    .iphone .fssc {
        height: 180px;
    }

    .iphone .fssc {
        height: 180px;
        padding: 27px 7px 26px 7px;
    }

    .cust-box p {
        line-height: 2;
        font-size: 12px;
        color: #777;
    }

    .cust-box ul li span {
        float: left;
        margin-left: 15px;
    }

    .cust-box ul li span.active {
        color: #FF5722;
    }

    .cust-box ul li span.active1 {
        color: #fff;
        border: 1px solid black;
    }

    .tek ul li {
        width: 100%;
    }

    .tek ul li span {
        margin-left: 5px;
    }

    .customer-logo {
        position: absolute;
        width: 70px;
        height: 70px;
        right: 0;

        border-radius: 50%;
        margin: 8px 30px 0 0;
    }

    .customer-logo img {
        width: 100%;
    }

    .cust-box ul li span.active:after {
        content: '';
        background: #FF5722;
        width: 9.3px;
        height: 9px;
        border-radius: 50%;
        position: absolute;
        margin: 3px -10px 0 0;
    }

    .fssc.monitor p img {
        margin-top: -20px !important;
    }

    .picfssc.air p > img {
        margin-top: 20px !important;
    }

    .picfssc.iphone > a > div > span {
        position: absolute;
        top: 0;
        right: 0;
        width: 78px;
        height: 129px;
        background: #fff;
        margin: 113px 58px 0 0;
    }

    .picfssc.iphone > a > div > span img {
        margin-top: 30px !important;
    }

    .seoPortfolio table td {
        padding: 1rem;
        font-size: 12px;
        border: 1px solid #ddd;
        color: #666;
    }

    .seoPortfolio table {
        width: 100% !important;
        float: right;
    }

    .header {
        height: 120px;
        overflow: hidden;
        background: #00BCD4 !important;
    }

    .header-filter .container {
        position: relative;
        top: -7px;
        left: auto;
    }

    .header .carousel {
        display: none;
    }

    .monitor {
        background: url({{url('/assets/img/monitor.png')}}) center center/96% 93% no-repeat rgba(0, 0, 0, 0)
    }

    .fssc {
        border-radius: 10px;
        height: 262px;
        margin: 10px auto 15px;
        padding: 8.2% 4.85% 31%;
        overflow: hidden;
        transition: none;
        transition: all .4s ease;
        -o-transition: all .4s ease;
        -moz-transition: all .4s ease;
        -webkit-transition: all .4s ease
    }

    .fssc img {
        height: auto;
        transition: all 4s ease;
        -o-transition: all 4s ease;
        -moz-transition: all 4s ease;
        -webkit-transition: all 4s ease
    }

    .fssc > div {
        float: right;
        height: 100%;
        overflow: hidden
    }

    .fssc, ul li {
        display: block
    }

    .form-group, .fssc img, .fssc > div, .service, .world img, a.port-t, legend > span {
        width: 100%
    }

    .cost p, .fssc, .post-slide .date, .servic a h5, a.port-t {
        text-align: center
    }

    .row:before, .row:after {
        display: inline-block !important;
    }
</style>
    @if(!is_null($customer))
    <section>
        <ul class="breadcrumb" style="margin-bottom: 0;border-bottom: 1px solid #CCCBC9;border-radius: unset !important">
            <li><a href="{{url('/')}}"><!--{{trans('sentence.navigation.home')}}--> <span style="    color: #202E37 !important;" class="fa fa-reply "></span></a></li>
            <li style="color: #F26341 !important"><a href="{{url('Customers')}}">مشتریان ما</a></li>
            <li style="color: #F26341 !important"> {{$customer->title}}  </li>
        </ul>
    </section>
    @endif

<section>
    <div class="content" style="    padding: 90px 0 0 0;" >

        <!-- Main Title -->
        <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
            {{ $customer->title }}
        </h1>
    </div>
</section>

    @if(!is_null($customer))
        <?php $titles = $customer->title;$titles2 = '';?>
        <main class="content clas_34"  style="padding: 40px 0">
            <div class="w-100 articles">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-12 col-sm-12 pull-right">
                            <div class="cust-box pull-right w-100" style="width: 100%;    display: flex;    justify-content: space-evenly;">
                                <div style="width: 50%;">
                                    <ul>
                                        <li>{{trans('sentence.templates.single.web_design')}}
                                            <span @if($customer->webdesign == 1) class="active" @endif><i></i></span>
                                        </li>
                                        <li>{{trans('sentence.templates.single.seo')}}
                                            <span @if($customer->seo == 1) class="active" @endif><i></i></span>
                                        </li>
                                        <li>{{trans('sentence.templates.single.network')}}
                                            <span @if($customer->camera == 1) class="active" @endif><i></i></span>
                                        </li>
                                        <li>{{trans('sentence.templates.single.camera')}}
                                            <span @if($customer->network == 1) class="active" @endif><i></i></span>
                                        </li>
                                        <li>{{trans('sentence.templates.single.voIP')}}
                                            <span @if($customer->voip == 1) class="active" @endif><i></i></span>
                                        </li>
                                        <li>{{trans('sentence.templates.single.mikrotik')}}
                                            <span @if($customer->microtik == 1) class="active" @endif><i></i></span>
                                        </li>
                                        <li>{{trans('sentence.templates.single.central')}}
                                            <span @if($customer->santral == 1) class="active" @endif><i></i></span>
                                        </li>
                                    </ul></div>
                                <div style="width: 50%;  border-left: 1px solid #eee;"><ul>
                                        <li>
                                            Laravel
                                            <span @if($customer->laravel == 1) class="active"
                                                  @else uk-icon="icon:ban;ratio:0.5" @endif ></span>
                                        </li>
                                        <li>
                                            HTML5
                                            <span @if($customer->HTML5 == 1) class="active"
                                                  @else uk-icon="icon:ban;ratio:0.5" @endif></span>
                                        </li>
                                        <li>
                                            CSS3
                                            <span @if($customer->CSS3 == 1) class="active"
                                                  @else uk-icon="icon:ban;ratio:0.5" @endif></span>
                                        </li>
                                        <li>
                                            Vue Js
                                            <span @if($customer->vue == 1) class="active"
                                                  @else uk-icon="icon:ban;ratio:0.5" @endif></span>
                                        </li>
                                        <li>
                                            Wordpress
                                            <span @if($customer->wordpress == 1) class="active"
                                                  @else uk-icon="icon:ban;ratio:0.5" @endif></span>
                                        </li>
                                    </ul></div>
                            </div>
                        </div>
                        <div class="col-md-6 pull-right">
                            <div class="customer-logo">
                                @if(!empty($customer->photo->path))
                                    <img src="{{ url($customer->photo->path) }}" alt="{{ $customer->photo->alt }}"/>
                                @endif
                            </div>
                            <div class="cust-box pull-right w-100">
                                <div class="picfssc">
                                    <a href="#" class="fssc monitor">
                                        <div>
                                            <img src="{{ url($customer->site->path) }}" alt="{{$customer->title}}"
                                                 title="{{$customer->title}}"/>
                                        </div>
                                    </a>
                                </div>
                                <div class="picfssc air">
                                    <a href="#" class="fssc monitor">
                                        <div>
                                            <img src="{{ url($customer->site->path) }}" alt="{{$customer->title}}"
                                                 title="{{$customer->title}}"/>
                                        </div>
                                    </a>
                                </div>
                                <div class="picfssc iphone">
                                    <a href="#" class="fssc monitor">
                                        <div>
                                            <img src="{{ url($customer->site->path) }}" alt="{{$customer->title}}"
                                                 title="{{$customer->title}}"/>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 style="color: #F26341;text-align: center;padding-bottom: 10px;font-weight: 700">{{trans('sentence.templates.single.history')}}</h4>

                    <div class="row">
                        <div class="col-md-12 pull-right">
                            <div class="cust-box pull-right w-100" >
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-justify" style="text-align: justify">{{$customer->description}}</p>
                                    </div>
                                    <div class="col-md-12 text-center" style="margin: 25px" >
                                        <a href="{{$customer->url}}" target="_blank" rel="nofollow" style="
    color: #FFFFFF;
    /* display: block; */
    font-size: 14px;
    height: auto;
    padding: 8px 15px;
    text-align: center;
    text-transform: uppercase;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    -ms-border-radius: 3px;
    background: #F26341;
">{{trans('sentence.templates.single.view')}}</a>
                                    </div>

                                </div>

                            </div>


{{--<div class="row">--}}
{{--    <div class="col-md-12">--}}
{{--        <div class="cust-box  w-100" style="padding: 0;">--}}
{{--            <div class="row" >--}}
{{--                <div class="col-md-4 col-xs-12">--}}
{{--                    @if($customer->hasSeo == 1)--}}
{{--                        <div class="seoPortfolio">{!! html_entity_decode($customer->content) !!}</div>--}}
{{--                    @else--}}
{{--                        <div class="seoPortfolio text-center">--}}
{{--                            <img src="http://teeteel.ir/wp-content/uploads/2013/02/%D8%B3%D8%A6%D9%88-%DA%86%DB%8C%D8%B3%D8%AA.jpg"--}}
{{--                                 class="circle clas_38" alt="seo"/></div>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--                <div class="col-md-8 col-xs-12">--}}
{{--                    <p class="text-justify">&nbsp;&nbsp;--}}
{{--                        --}}{{--                                            {{trans('sentence.templates.single.seo_text')}}--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="col-md-12">--}}
{{--        <div class="owl-carousel owl-theme">--}}

{{--            @if(isset($customer->like))--}}
{{--                @if(!is_null($customer->like) && $customer->like != "null")--}}

{{--                    @foreach(json_decode($customer->like) as $val)--}}


{{--                        @php $item = \App\Customer::find($val) @endphp--}}

{{--                        @if(!is_null($item))--}}
{{--                            <div class="item">--}}
{{--                                <a class="hover"--}}
{{--                                   href="{{ route('customer', [$locale , $item->slug]) }}">--}}
{{--                                    <div style="background-image: url('{{$item->site ? url($item->site->path) : '' }}'); "--}}
{{--                                         class="item best-srv">--}}

{{--                                        <div class="srv-icon">--}}

{{--                                        </div>--}}
{{--                                        <div class="srv-info">--}}
{{--                                            <h4 class="font-weight-bold mb-3 text-center clas_30">{{ $item->title }}</h4>--}}

{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                @endif--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}





                        </div>
                    </div>

                </div>
            </div>

        </main>
    @else
        <main class="pull-right content">
            <div class="pull-right w-100 articles">
                <div class="container text-center">
                    <img src="{{asset('/assets/img/oops.jpg')}}" width="300px" alt="oops image">
                    <h1>{{trans('sentence.templates.single.oops')}}</h1>
                </div>
            </div>
        </main>
    @endif

    @push('script')

        <link rel="stylesheet"

              href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css"

              integrity="sha256-AWqwvQ3kg5aA5KcXpX25sYKowsX97sTCTbeo33Yfyk0=" crossorigin="anonymous"/>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"

                integrity="sha256-s5TTOyp+xlSmsDfr/aZhg0Gz+JejYr5iTJI8JxG1SkM=" crossorigin="anonymous"></script>

        <script>

            $('.owl-carousel').owlCarousel({

                rtl: true,

                loop: true,

                margin: 10,

                dots: true,

                slideSpeed: 1000,


                responsive: {

                    0: {

                        items: 1

                    },

                    600: {

                        items: 1

                    },

                    1000: {

                        items: 3

                    }

                }

            });

        </script>

    @endpush
@endsection
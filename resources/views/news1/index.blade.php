
@extends('layouts.user')
@php $locale = session()->get('locale'); @endphp

<?php
$seo = App\Meta::where('name_page', 'مشتریان ما')->get();
?>
@section('meta')
    @if($seo)
        @foreach($seo as $seo)
            <meta property="og:description"
                  content="{{$seo->description}}"/>
            <meta name="Keywords"
                  content="{{$seo->keyword}}"/>
            <meta property="og:title"
                  content="{{$seo->title_page}}"/>

        @endforeach
    @endif
@endsection
@section('body')
    <style>
        #contact-form label{
            font-size: 13px;
        }
        textarea{
            resize: vertical;
        }
        .news-conect-us {
            border-right: solid 1px #eee;
            padding: 15px 35px;
            margin: 15px 0 30px 0;
        }

        .news-costomer {
            border-right: solid 1px;
            padding: 15px 35px;
            margin: 15px 0 25px 0;

        }

        nav.navbar {
            background: #a2c517;
        }

        .search form, .search input {
            border-color: rgba(255, 255, 255, 0.37);
        }

        .search-icon {
            color: #fff !important;
        }

        .search ::-webkit-input-placeholder {
            color: #fff !important;
        }

        .search ::-moz-placeholder {
            color: #fff !important;
        }

        .news-titr {
            font-size: 23px;
            font-weight: 700;
            line-height: 0.1;
            padding-bottom: 15px;
        }

        .news-titr font {
            color: #ff7600;
            /*size: 12px!important;*/
            font-size: 12px !important;
            margin-left: 5px;
        }

        .news-itemss {
            margin-bottom: 50px;
        }


        .news-column {
            -webkit-transition: all 0.4s;
            -moz-transition: all 0.4s;
            -ms-transition: all 0.4s;
            -o-transition: all 0.4s;
            transition: all 0.4s;
        }

        .news-column:hover {
            transform: scale(1.1);
        }

        .page-header {
            max-height: 100px !important;
            padding: 25px 0 !important;
        }

        .page-header h1 {
            font-size: 23px !important;
            margin-top: 7px;
            color: white !important;
            margin-bottom: 3px;
        }

        .he:hover {

            border-left: 1px solid #e4e4e4;
            border-right: 1px solid #e4e4e4;

        }

        .news-column-title h2 {
            font-size: 14px;
        }

        .customer-title {
            text-align: center;
            margin-top: 10px;
        }

        .news-label {
            text-align: center;
            position: relative;
        }

        .news-label .tit {
            background-color: silver;
            text-align: center;
            margin: auto;
            position: absolute;
            left: 50%;
            top: -35px;
            padding: 12px;
        }

        .news-items-title {
            font-size: 15px !important;
        }

        .news-items-description {
            font-size: 13px !important;
        }
        .news-items-title{
            transition: 0.5s;
        }
        .news-items-title:hover {
            color: #F26341 !important;
            margin-right: 10px;
        }

    </style>

    <section>
        <ul class="breadcrumb" style="margin-bottom: 0;border-bottom: 1px solid #CCCBC9;border-radius: unset !important">
            <li><a href="{{url('/')}}"><!--{{trans('sentence.navigation.home')}}--> <span style="    color: #202E37 !important;" class="fa fa-reply "></span></a></li>
            {{--            <li style="color: #F26341 !important">{{trans('sentence.navigation.templates')}} </li>--}}
            <li style="color: #F26341 !important">اخبار </li>
        </ul>
    </section>

    <section class=" w-100 mt-5 mb-5" style="direction: ltr" >
        <div class="container">
            <div class="row">
                <div class="content" style="padding: 50px 0 !important;">
                    <!-- Main Title -->
                    <h1 class="main_title_a animated" style="" data-animation="fadeInUp" data-animation-delay="300">
{{--                        {{trans('sentence.news.title')}}--}}
                        اخبارها
                    </h1>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12" style="direction: rtl;">
                            <div class="news-conect-us">
                                <form action="{{route('contact-store')}}" method="post" class="clas_51" id="contact-form">
                                    <div class="col-12">
                                        <h5>
{{--                                            {{trans('sentence.news.form_title')}}--}}
                                            برای تماس با ما فرم زیر را تکمیل کنید:
                                        </h5>
                                        <hr/>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="mb-1">
{{--                                                {{trans('sentence.news.name')}}--}}
                                                نام و نام خانوادگی :
                                            </label>
                                            <input type="text" name="name" class="form-control"
                                                   placeholder="نام و نام خانوادگی"
                                                   value="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="mb-1">
{{--                                                {{trans('sentence.news.email')}}--}}
                                                ایمیل :
                                            </label>
                                            <input type="email" name="email" class="form-control"
                                                   placeholder="ایمیل"
                                                   value="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="mb-1">
{{--                                                {{trans('sentence.news.mobile')}}--}}
                                                موبایل :
                                            </label>
                                            <input type="number" name="mobile" class="form-control"
                                                   placeholder="موبایل"
                                                   value="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="mb-1">
{{--                                                {{trans('sentence.news.t_f')}}--}}
                                                موضوع :
                                            </label>
                                            <input type="text" name="title" class="form-control"
                                                   placeholder="موضوع"
                                                   value="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="mb-1">
{{--                                            {{trans('sentence.news.text')}}--}}
                                            متن :
                                        </label>

                                        <textarea name="text" class="form-control"
                                                  placeholder="متن"
                                                  rows="10"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn bg-success w-100 mt-4"><i
                                                    class="fa fa-send"></i>&ensp;
                                            ارسال
                                        </button>
                                    </div>
                                    {{csrf_field()}}
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-8">
                    <?php
                    function limitWord($string, $limit)
                    {
                        $words = explode(" ", $string);
                        $output = implode(" ", array_splice($words, 0, $limit));
                        return $output;
                    }
                    ?>
                    @foreach($items as $item)
                        <div class="row news-itemss">

                            <div class="col-md-2 margin_a">
                                <a href="{{ route('user-show-news1',[$locale , $item->slug]) }}"><img class="news-items-img "
                                            src="{{url($item->home)}}"
                                            alt="{{$item->title}}"></a>
                            </div>
                            <div class="col-md-10" style="direction: rtl;">
                                <a href="{{ route('user-show-news1',[$locale , $item->slug]) }}"></a>
                                <p class="news-titr"><font><i class="fa fa-square" aria-hidden="true"></i></font>
                                    <a class="news-items-title clas_50"
                                       href="{{ route('user-show-news1',[$locale , $item->slug]) }}">
                                        {{$item->title}}</a></p>
                                <p class="news-items-description">
                                    {{limitWord($item->short_text,25)}}...
                                </p>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-md-12 mb-5">
                        <div class="mx-auto disp_ta">
                            {{ $items->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection

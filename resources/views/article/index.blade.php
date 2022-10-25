@extends('layouts.user')



@section('title')

@endsection
@php $locale = session()->get('locale'); @endphp

@section('body')

    <style>

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

        .page-header {

            max-height: 100px !important;

            padding: 15px 0 !important;

            padding-top: 7px !important;

            height: 100px;

        }

        .page-header h1 {

            font-size: 23px !important;

            margin-top: 7px;

            color: white !important;

            margin-bottom: 3px;

        }

        .news-column-title h2 {

            font-size: 17px;

        }

        .news-column {
            border: 1px solid #eee;
            box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.08);
            background-color: #fff;
            margin-bottom: 40px;
        }

        .news-column-text a p {
            color: #9e9e9e !important;
            text-decoration: none !important;
        }

        .a123 {
            padding: 8px 20px;
            background: #f80;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
            color: #fff;
            font-size: 13px;
            text-decoration: none;
        }

    </style>


    <div class="siteMap-url">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <ul class="ul pt-3 pb-3 pr-3 pl-3 clas_21">
                        <li><a class="clas_22" href="{{url('/')}}"> {{trans('sentence.navigation.home')}} / </a>
                        </li>
                        <li class="mr-1"><a class="clas_22" href="#" onclick="location.reload()">  {{trans('sentence.navigation.article')}} </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header class="page-header">

        <div class="container">

            <div class="page-header-title">

                <h1>مقالات</h1>

                <img src="{{url('image/me-vector.png')}}" alt="vector" class="clas_23">

            </div>

        </div>

    </header>

    <section class="pull-right w-100 mt-5 mb-5" data-direction="rtl">

        <div class="container">

            <div class="row">

                @foreach($items as $i)

                    @if(isset($i->slug) && !is_null($i->slug))
                        <div class="col-md-4 col-xs-12">

                            <div class="news-column pull-right w-100 hig_429">

                                <div class="news-column-image pull-right w-100 text-center" rel="image">

                                    <a href="{{ route('user-article-show',[$locale , $i->slug]) }}">
                                        <img src="{{ url($i->home ? $i->home : '') }}" alt="{{ $i->title }}" class="hig_170">
                                    </a>

                                </div>

                                <div class="news-column-info pull-right w-100">

                                    <div class="row">

                                        <div class="col-12 text-left" rel="datetime" data-direction="ltr">

                                            <i class="fa fa-calendar-o"></i>&nbsp;{{ my_jdate($i->created_at, 'Y/m/d') }}

                                        </div>

                                    </div>

                                </div>

                                <div class="news-column-title pull-right w-100">

                                    <a href="{{ route('user-article-show',[$locale , $i->slug]) }}">
                                        <h2>{{ $i->title }}</h2>
                                    </a>

                                </div>

                                <div class="news-column-text pull-right w-100 hig_75" >

                                    <a href="{{ route('user-article-show',[$locale , $i->slug]) }}">
                                        <p>{{ str_limit($i->short_text,70) }}</p>
                                    </a>

                                </div>

                                <div class="news-column-link w-100">

                                    <a href="{{ route('user-article-show',[$locale , $i->slug]) }}"
                                       class="btn btn-sm btn-default pull-left legitRipple a123">{{trans('sentence.articles.more')}}
                                        &nbsp;&nbsp;<i
                                                class="fa fa-arrow-left"></i></a>

                                </div>

                            </div>

                        </div>
                    @endif

                @endforeach

            </div>

            <div class="col-md-12 mb-5">

                {{ $items->links() }}

            </div>

        </div>

        </div>

    </section>

@endsection
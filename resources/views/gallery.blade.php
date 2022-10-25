@extends('layouts.user')

@php $locale = session()->get('locale'); @endphp

@section('body')
    <style>
        .work-inner:hover .title-img{
            transform: translateY(-40px);
        }
        .checked_filter
        {
            width: 200px;
            position: absolute;
            right: 0;
            top: 20px;
            text-align: right;
            direction: rtl;
        }
    </style>
    <section>
        <ul class="breadcrumb" style="margin-bottom: 0;border-bottom: 1px solid #CCCBC9;border-radius: unset !important">
            <li><a href="{{url('/')}}"><!--{{trans('sentence.navigation.home')}}--> <span style="    color: #202E37 !important;" class="fa fa-reply "></span></a></li>
{{--            <li style="color: #F26341 !important">{{trans('sentence.navigation.templates')}} </li>--}}
            <li style="color: #F26341 !important">نمونه کار ها </li>
        </ul>
    </section>
    <section id="portfolio" class="main-content">
        <!-- Content -->
        <div class="content">
            <!-- Main Title -->
            <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
{{--                {{trans('sentence.templates.title')}}--}}
                نمونه کار طراحی وب سایت
            </h1>
            <form action="{{$url}}" method="get" class="checked_filter">
                <select name="type" class="form-control"onchange="this.form.submit()">
                    <option value="all">تکنولوژی استفاده شده</option>
                    <option value="1" {{request()->type && request()->type==1?'selected':''}}>قالب آماده</option>
                    <option value="2" {{request()->type && request()->type==2?'selected':''}}>کدنویسی اختصاصی</option>
                </select>
            </form>
            <!-- Works -->
            <div class="works">
                <!-- Filter Navigation -->
                <div id="" class="filter-menu inline animated" data-animation=""
                     data-animation-delay="500">
                    <ul id="" class="filters option-set" data-option-key="">
                        @php
                            $pars_url=parse_url(url()->current());
                            $route=isset(explode('/',$pars_url['path'])[2]) ? true : '';
                        @endphp
                        <li  style="margin-top: 35px;" ><a href="{{ route('user-gallery') }}"  style="border: 1px solid #CCCBC9" data-option-value="*" class=" {{\Request::route()->getName()=='user-gallery'?'selected':''}}">همه</a></li>
                        @foreach($categories as $value)
                            <li  style="margin-top: 35px;" ><a href="{{route('user-tem-cat' , [$locale , $value->slug])}}" style="border: 1px solid #CCCBC9"  class="{{isset($slugs) && $value->slug==$slugs?'selected':''}}" >{{$value->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- End Filter Navigation -->
                <!-- Filter -->
                <div class="items animated pretty-lightbox-a" data-animation="fadeInUp" data-animation-delay="700">
                @foreach($customers as $customer)
                    <!-- Item -->
                        <div class="work col-xs-4 printing photography">
                            <div class="work-inner" onclick="window.open('{{ 'http://'.str_replace(['http://','https://'],'',$customer->url)}}','_blank')">
                                <div class="work-img " style="position:relative;z-index: 101;overflow: hidden;border-bottom-right-radius: unset !important;border-bottom-left-radius: unset !important;">
                                    <img style="height: 40vh;object-fit: cover"
                                         src="{{$customer->site?url($customer->site->path):'' }}"
                                         alt="{{ $customer->title}}"/>
                                    <div class="mask">
{{--                                        <a class="button zoom" href="{{$customer->site?url($customer->site->path):'' }}"--}}
{{--                                           data-rel="prettyPhoto[gallery]"><i class="fa fa-film"></i></a>--}}
{{--                                        <a class="button detail" href="{{$customer->url}}" target="_blank"><i--}}
{{--                                                    class="fa fa-link"></i></a>--}}
                                    </div>
                                    <div class="work-desc">
                                        <h4>
                                        <a href="{{ strpos($customer->url,'http')?$customer->url:'http://'.$customer->url}}" target="_blank">
                                            {{ $customer->title}}
                                        </a>
                                        </h4>
                                    </div>
                                </div>
                                <h4 class="title-img" style="transition: 0.5s;position:relative;z-index: 100;padding: 10px 0;background: #F26341;text-align: center; margin: 0;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px; color: #fff;">
                                    {{ $customer->title}}
                                </h4>
                            </div>
                        </div>
                        <!-- End Item -->
                    @endforeach

                    <div class="clear"></div>

                </div>
                <!-- End Filter -->

                <div style="display: flex;justify-content: center;align-items: center;    position: relative;    top: 45px;">
                    <div >
                        {{$customers->appends(Request::except('page'))->links("pagination::bootstrap-4")}}
                    </div>
                </div>
            </div>
            <!-- End Works -->
        </div>
        <!-- End Content -->
    </section>


@endsection
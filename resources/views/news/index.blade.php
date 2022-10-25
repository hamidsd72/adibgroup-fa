
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
        .customer-list :hover img {
            filter: grayscale(100%);
        }

        .customer-list h4 {
            transition: 0.6s !important;
        }

        .customer-list :hover h4 {
            color: #F26341;
            transform: scale(1.2);
        }
    </style>
    <section>
        <ul class="breadcrumb"
            style="margin-bottom: 0;border-bottom: 1px solid #CCCBC9;border-radius: unset !important">
            <li><a href="{{url('/')}}"><!--{{trans('sentence.navigation.home')}}--> <span
                            style="    color: #202E37 !important;" class="fa fa-reply "></span></a></li>
            {{--            <li style="color: #F26341 !important">{{trans('sentence.navigation.customer')}} </li>--}}
            <li style="color: #F26341 !important">مشتریان ما</li>
        </ul>
    </section>
    <section id="coustomer" class="main-content">
        <div style="display: flex;justify-content: space-evenly;align-items: center;flex-wrap: wrap"
             class="customer-list">
            @foreach($items as $i)
                <a href="{{ 'http://'.str_replace(['http://','https://'],'',$i->url)}}" target="_blank">

                    <div style="border-radius: 5px;width: 250px;height: 200px;margin: 0;text-align: center;flex-direction: column;
    align-items: center;    padding: 20px;    justify-content: center;position: relative">
                        @if($i->photo)
                            <img src="{{ url($i->photo->path) }}" alt="{{ $i->photo->alt }}"
                                 style=" width: 80%;object-fit: contain;height:140px;border-radius: 3px;box-shadow: 0 0 2px 1px #d6d6d6;padding: 5px">
                        @else
                                <img src="{{ url('adib/icon_1.png')}}" alt="{{ $i->slug }}"
                                     style="width: 80%;object-fit: contain">

                        @endif
                            <h4 style="font-size: 15px; bottom: 20px;text-align: center" class="customer-title">{{ $i->title  }}</h4>
                    </div>
                </a>
            @endforeach
        </div>
            <div style="display: flex;justify-content: center;align-items: center;    position: relative;    top: 45px;">
                <div >
                    {{$items->appends(Request::except('page'))->links("pagination::bootstrap-4")}}
                </div>
            </div>
    </section>
@endsection
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
            <li style="color: #F26341 !important">{{$title}}</li>
        </ul>
    </section>

    <section id="all-team">
        <div class="container">
            <h1 class="main_title_a animated">
                {{$title}}
            </h1>
            <div class="row">
                @foreach ($items as $item)
                    <div class="col-lg-3">
                        <div class="team-items slide-boxes">
                            <div class="item animated" data-animation="rollIn" data-animation-delay="0">
                                <img src="{{url($item->photo?$item->photo->path:'')}}" alt="{{$item->title}}" class="img-circle" style="width: 160px;min-width: 160px;height: 160px;min-height:160px;" />
                                <h4>{{$item->name}}</h4>
                                <h5>{{$item->title}}<div class="item-education">{{$item->education}}</div></h5>
                                <p class="item-about">{!! $item->about !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    


@endsection
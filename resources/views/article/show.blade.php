{{--{{dd(2)}}--}}
{{--{{dd($article  , $other)}}--}}
@extends('layouts.user')
@php $locale = session()->get('locale'); @endphp

@section('body')
    <style>
        @media (max-width:700px) {
            .leftdiv{
                width: 100% !important;
                margin:0 10px;
            }
            .rightdiv{
                width: 100% !important;
                margin:0 10px;
            }

        }
        .ch-leftdiv a{
            transition: 0.5s;
        }
        .ch-leftdiv a:hover{
            color: #F26341 !important;
            margin-left: 10px !important;
        }
        #adib-blog-show h2 {
            margin-top: 0px;
        }
        #adib-blog-show img {
            width: 100% !important;
        }
    </style>
    {{--    map url--}}
    <section>
        <ul class="breadcrumb" style="margin-bottom: 0;border-bottom: 1px solid #CCCBC9;border-radius: unset !important">
            <li><a href="{{url('/')}}"><span style="    color: #202E37 !important;" class="fa fa-reply "></span></a></li>
{{--            <li>مقالات</li>--}}
            <li style="color: #F26341 !important">{{$article->title}}</li>
        </ul>
    </section>
    {{--main--}}
    <section>
        <div class="content" style="display: flex;flex-wrap: wrap;direction: rtl;">
            <!-- Top Details-->
            <div class=" rightdiv" style="width: 70%;padding: 0 10px">
                <h2 style="text-align: center;  margin-bottom: 40px;padding-top: 0;color: #F26341">
                    {{$article->title}}
                </h2>
                <div style="display: flex; justify-content: center">
                    <img style="width: 70%;margin: auto;object-fit: cover;border: 4px double #eee;border-radius: 2px;" src="{{url($article->home)}}" alt=""
                    />
                </div>
                {{-- <h4 style="margin-top: 40px; padding: 20px">
                    {{ $article->short_text}}
                </h4> --}}
                {{-- <h5 style="margin: 10px 0; padding: 20px">
                    {{ $article->description}}
                </h5> --}}
                <div id="adib-blog-show" style="margin: 20px; padding: 20px">
                    {!! $article->text !!}
                </div>
            </div>
            <!-- End Top Details-->
            <!-- Top Social Media-->
            <div class="leftdiv" style="width: 30%;">
                @foreach($other as $row)
                    <div >
                        <div style="border-bottom: 1px solid #ccc; display: flex;padding: 10px 0;" class="ch-leftdiv">
                            <div>
                                <img src="{{url($row->home)}}"    style="width: 70px; object-fit: cover"   alt=""
                                />
                            </div>
                            <div style="padding: 10px"><a href="{{ route('user-article-show',[$locale , $row->slug])}}">{{$row->title}}</a></div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- End Social Media-->


            <div class="clear"></div>
        </div>
    </section>


@endsection

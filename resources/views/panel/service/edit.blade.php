@component('layouts.back')

    @slot('title') افزودن {{ $title }} @endslot

    @slot('body')
        <link rel="stylesheet" type="text/css"
              href="https://menoonline.com/public/dashboard/css/bootstrap-tagsinput.css"/>


        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"
              type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">


        <link rel="stylesheet" href="https://menoonline.com/public/front/css/fastselect.min.css">



        {{--<!-- Include Editor style. -->--}}
        {{--<link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_editor.pkgd.min.css" rel="stylesheet"--}}
              {{--type="text/css"/>--}}
        {{--<link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_style.min.css" rel="stylesheet"--}}
              {{--type="text/css"/>--}}

        <style>
            .fr-wrapper div:nth-child(1) a {
                visibility: hidden !important;
            }

        </style>

        <div class="card">

            <div class="card-header archive-card-header">

                <div class="archive-circle-wrap">

                    <div class="archive-circle">

                        <i class="fa fa-lemon-o"></i>

                    </div>

                    <h2>ویرایش {{$title}}</h2>

                </div>

            </div>

            <div class="card-body">

                <div class="post">

                    {{ Form::open(array('route' => array('service-update',$item->id), 'method' => 'PUT', 'files' => true)) }}

                    <div class=" mb-2 mr-4">
                    <span class="switch switch-success">
                        <label>
                            <span class="switch-title">نمایش صفحه داخلی</span>
                            <input type="checkbox" name="page" id="account_status" value="active" {{ $item->page == 'active' ? 'checked' : '' }}>
                            <span></span>
                        </label>
                    </span>
                    </div>
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                {{ Form::label('title', 'نام') }}

                                {{ Form::text('title', $item->title, array('class' => 'form-control')) }}

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                {{ Form::label('slug', 'نامک') }}

                                {{ Form::text('slug', $item->slug, array('class' => 'form-control')) }}

                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="form-group form-group-post">


                                    {{ Form::textarea('text', $item->text, array('class' => 'form-control textarea')) }}

                            </div>

                        </div>
                        <div class="col-md-12">
                            {{ Form::label('short_text', 'توضیحات کوتاه') }}
                            <div class="form-group form-group-post">
                                @if(app()->getLocale()=='tr' || app()->getLocale()=='en')
                                    {{ Form::textarea('short_text', $item->short_text, array('class' => 'form-control text-left textarea', 'size' => '30x2', 'placeholder' => 'خلاصه نوشته...','dir'=>'ltr')) }}
                                @else
                                {{ Form::textarea('short_text', $item->short_text, array('class' => 'form-control', 'size' => '30x2', 'placeholder' => 'خلاصه نوشته...')) }}
                                    @endif

                            </div>

                        </div>
                        @if(app()->getLocale()=='fa')
                        {{-- box 2 secion --}}
                        <div class="col-md-12">

                            <div class="form-group">

                                {{ Form::label('part2_title', 'عنوان پارت 2') }}

                                {{ Form::text('part2_title', $item->part2_title, array('class' => 'form-control')) }}

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group form-group-post">

                                {{ Form::textarea('part2_description', $item->part2_description, array('class' => 'form-control textarea', 'size' => '30x2', 'placeholder' => 'خلاصه نوشته...')) }}

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                {{ Form::label('part2_photo', 'تصویر پارت 2') }}

                                {{ Form::file('part2_photo', array('accept' => 'image/*')) }}

                            </div>
                            @if($item->part2_photo)
                                <img src="{{url($item->part2_photo)}}" style="width: 100px">
                            @endif
                        </div>

                        <div class="col-md-12">

                            <div class="form-group">

                                {{ Form::label('part3_title', 'عنوان پارت 3') }}

                                {{ Form::text('part3_title', $item->part3_title, array('class' => 'form-control')) }}

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group form-group-post">

                                {{ Form::textarea('part3_description', $item->part3_description, array('class' => 'form-control textarea', 'size' => '30x2', 'placeholder' => 'خلاصه نوشته...')) }}

                            </div>

                        </div>
                        {{-- BOX 4 --}}
                        <div class="col-md-12">

                            <div class="form-group">

                                {{ Form::label('part4_r_title', 'عنوان پارت 4 (راست)') }}

                                {{ Form::text('part4_r_title', $item->part4_r_title, array('class' => 'form-control')) }}

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group form-group-post">

                                {{ Form::textarea('part4_r_description', $item->part4_r_description, array('class' => 'form-control textarea', 'size' => '30x2', 'placeholder' => 'خلاصه نوشته...')) }}

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group">

                                {{ Form::label('part4_l1_title', 'عنوان پارت 4 باکس 1 (چپ)') }}

                                {{ Form::text('part4_l1_title', $item->part4_l1_title, array('class' => 'form-control')) }}

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group form-group-post">

                                {{ Form::label('part4_l1_title', 'توضیحات پارت 4 باکس 1 (چپ)') }}

                                {{ Form::textarea('part4_l1_description', $item->part4_l1_description, array('class' => 'form-control', 'size' => '30x2', 'placeholder' => 'خلاصه نوشته...')) }}

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group">

                                {{ Form::label('part4_l2_title', 'عنوان پارت 4 باکس 2 (چپ)') }}

                                {{ Form::text('part4_l2_title', $item->part4_l2_title, array('class' => 'form-control')) }}

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group form-group-post">

                                {{ Form::label('part4_l2_title', 'توضیحات پارت 4 باکس 2 (چپ)') }}

                                {{ Form::textarea('part4_l2_description', $item->part4_l2_description, array('class' => 'form-control', 'size' => '30x2', 'placeholder' => 'خلاصه نوشته...')) }}

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group">

                                {{ Form::label('part4_l3_title', 'عنوان پارت 4 باکس 3 (چپ)') }}

                                {{ Form::text('part4_l3_title', $item->part4_l3_title, array('class' => 'form-control')) }}

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group form-group-post">

                                {{ Form::label('part4_l3_title', 'توضیحات پارت 4 باکس 3 (چپ)') }}

                                {{ Form::textarea('part4_l3_description', $item->part4_l3_description, array('class' => 'form-control', 'size' => '30x2', 'placeholder' => 'خلاصه نوشته...')) }}

                            </div>

                        </div>
                        @endif
                        <div class="col-md-6">

                            <div class="form-group">

                                {{ Form::label('photo', 'تصویر شاخص') }}

                                {{ Form::file('photo', array('accept' => 'image/*')) }}

                            </div>
                            @if($item->photo)
                                <img src="{{url($item->photo->path)}}" style="width: 100px">
                            @endif
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-6">

                            <div class="form-group">

                                {{ Form::label('icon', 'آیکون (png) رنگ سیاه') }}

                                {{ Form::file('icon', array('accept' => 'image/png')) }}

                            </div>
                            @if($item->icon)
                                <img src="{{url($item->icon)}}" style="width: 50px">
                            @endif
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">

                                {{ Form::label('icon_hover', 'آیکون هاور(png) رنگ سفید') }}

                                {{ Form::file('icon_hover', array('accept' => 'image/png')) }}

                            </div>
                            @if($item->icon_hover)
                                <img src="{{url($item->icon_hover)}}" style="width: 50px;background: rgba(0,0,0,0.67)">
                            @endif
                        </div>
                        @if(app()->getLocale()=='fa')
                        <div class="col-md-6">

                            <div class="form-group">

                                {{ Form::label('title_page', 'عنوان صفحه') }}

                                {{ Form::text('title_page', $item->title_page, array('class' => 'form-control')) }}

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                {{ Form::label('tags', 'کلمات کلیدی') }}

                                {{ Form::text('tags', $item->tags, array('class' => 'form-control')) }}

                            </div>

                        </div>

                        <div class="col-md-12">

                            {{ Form::label('description', 'توضیحات سئو') }}

                            <div class="form-group  form-group-post">

                                {{ Form::textarea('description', $item->description, array('class' => 'form-control', 'size' => '30x2', 'placeholder' => '')) }}


                            </div>

                        </div>

                        @endif
                        <div class="col-md-12">

                            <div class="form-group">

                                {{ Form::label('sort', 'ترتیب نمایش') }}

                                {{ Form::number('sort', $item->sort, array('class' => 'form-control')) }}

                            </div>

                        </div>


                        <div class="col-md-12">
                            <div class="form-group form-group-select">
                                {{ Form::label('template[]', 'نمونه کارها') }}
                                {{ Form::select('template[]', array_pluck($customer , 'title' , 'id'), json_decode($item->template), array('class' => 'form-control multipleSelect' , 'multiple' =>true)) }}
                            </div>
                        </div>

                        @if(app()->getLocale()=='fa')
                        <div class="col-md-12">
                            <label>سوالات متداول</label>
                            <div class="form-group form-group-post">

                                {{ Form::textarea('question', $item->question, array('class' => 'form-control textarea', 'size' => '30x2', 'placeholder' => 'خلاصه نوشته...')) }}

                            </div>

                        </div>
                            @endif


                    </div>

                    <br/>

                    <a href="{{ URL::previous() }}" class="btn btn-rounded btn-secondary float-right"><i
                                class="fa fa-chevron-circle-right ml-1"></i>بازگشت</a>

                    {{ Form::button('<i class="fa fa-circle-o mtp-1 ml-1"></i>ویرایش', array('type' => 'submit', 'class' => 'btn  btn-rounded btn-primary float-left')) }}

                    {{ Form::close() }}

                </div>

            </div>

        </div>

    @endslot

    @push('scripts')


        <script type="text/javascript" src="{{asset('js/editir.min.js')}}"></script>
        <script src="https://menoonline.com/public/front/js/fastselect.js"></script>

        <script src="https://menoonline.com/public/front/js/fastselect.standalone.min.js"></script>
        {{--<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.5/js/froala_editor.pkgd.min.js"></script>--}}




        <script> $(function () {

                slug('#title', '#slug');

                $('.textarea').froalaEditor({
                    imageMove: true,
                    imageUploadMethod: 'post',
                    imageUploadURL: '{{url('upload.php')}}',
                    imageManagerLoadURL: '{{url('load_image.php')}}',
                    imageDeleteURL: '{{url('delete_image.php')}}',
                    imageUploadParams: {
                        id: 'my_editor'
                    },
                    htmlAllowedTags: ['.*'],   // Changed this to all tags
                    htmlRemoveTags: [''],   // Added this
                    fullPage: true,   // Added this
                    lineBreakerTags: [''],   // Added this, not sure if it does anything yet
                    linkAlwaysBlank: true   // Added this
                });

                $('.multipleSelect').fastselect({

                    placeholder: 'جستجو کنید',
                    searchPlaceholder: 'جستجو کنید',
                    noResultsText: 'چیزی یافت نشد :(',
                    userOptionPrefix: 'جستجو'
                });

            });


        </script>



    @endpush

@endcomponent
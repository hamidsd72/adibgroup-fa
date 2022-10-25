@component('layouts.back')
    @slot('title') ویرایش {{ $title }} {{ $item->title }} @endslot
    @slot('body')
        <div class="card">
            <div class="card-header archive-card-header">
                <div class="archive-circle-wrap">
                    <div class="archive-circle">
                        <i class="fa fa-lemon-o"></i>
                    </div>
                    <h2>ویرایش {{ $title }} {{ $item->name }}</h2>
                </div>
            </div>
            <div class="card-body">
                <div class="post">
                    {{ Form::model($item, array('route' => array('team-update', $item->id), 'method' => 'PATCH', 'files' => true)) }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('name', 'نام') }}
                                {{ Form::text('name', null, array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('title', 'سمت') }}
                                {{ Form::text('title', null, array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('education', 'تحصیلات') }}
                                {{ Form::text('education', null, array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('link', 'لینک') }}
                                {{ Form::text('link', null, array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('instagram', 'ایستاگرام') }}
                                {{ Form::text('instagram', null, array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('whatsapp', 'واتس اپ') }}
                                {{ Form::text('whatsapp', null, array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('linkedin', 'لینکدین') }}
                                {{ Form::text('linkedin', null, array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('email', 'ایمیل') }}
                                {{ Form::text('email', null, array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-group-team">
                                {{ Form::textarea('about', null, array('class' => 'form-control textarea')) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('photo', ' از تصویر مربعی استفاده شود ') }}
                                {{ Form::file('photo', array('accept' => 'image/*')) }}
                            </div>
                        </div>
                        @if(!is_null($item->photo))
                            <div class="col-md-6">
                                <img src="{{ url($item->photo->path) }}">
                            </div>
                        @endif
                    </div>
                    <br/>
                    <a href="{{ URL::previous() }}" class="btn btn-rounded btn-secondary float-right"><i
                            class="fa fa-chevron-circle-right ml-1"></i>بازگشت</a>
                    {{ Form::button('<i class="fa fa-circle-o mtp-1 ml-1"></i>ویرایش', array('type' => 'submit', 'class' => 'btn btn-rounded btn-primary float-left')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    @endslot
    @push('scripts')
        <script src="{{ asset('editor/laravel-ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('editor/laravel-ckeditor/adapters/jquery.js') }}"></script>
        <script type="text/javascript">
            var textareaOptions = {
                filebrowserImageBrowseUrl: '{{ url('filemanager?type=Images') }}',
                filebrowserImageUploadUrl: '{{ url('filemanager/upload?type=Images&_token=') }}',
                filebrowserBrowseUrl: '{{ url('filemanager?type=Files') }}',
                filebrowserUploadUrl: '{{ url('filemanager/upload?type=Files&_token=') }}',
                language: 'fa'
            };
        </script>
    @endpush
@endcomponent

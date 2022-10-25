@extends('layouts.user')

@php $locale = session()->get('locale'); @endphp

@section('body')


    <div id="modal-w">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">فرم استخدام در شرکت ادیب</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('job-form-store',app()->getLocale()) }}" method="post" enctype="multipart/form-data" id="adib-job-form-create">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6 col-sm-6 mt-1" style="direction: rtl">
                                <label style="color: #67747A" for="name">نام و نام خانوادگی</label>
                                <input type="text" class="form-control " name="name" id="name" placeholder="نام و نام خانوادگی" required>
                            </div>
                            <div class="col-md-6 col-sm-6 mt-1" style="direction: rtl">
                                <label style="color: #67747A" for="mobile">شماره موبایل فعال</label>
                                <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="موبایل" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 mt-1" style="direction: rtl;">
                                <label style="color: #67747A" for="experts">تخصص</label>
                                <select name="experts" class="form-control">
                                    <option value="طراح سایت و اپلیکیشن" selected>طراح سایت و اپلیکیشن</option>
                                    <option value="متخصص شبکه">متخصص شبکه</option>
                                    <option value="کارشناس فروش">کارشناس فروش</option>
                                    <option value="حسابدار">حسابدار</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-sm-6 mt-1" style="direction: rtl;">
                                <label style="color: #67747A" for="education">آخرین مدرک تحصیلی</label>
                                <select name="education" class="form-control">
                                    <option value="سیکل">سیکل</option>
                                    <option value="دیپلم">دیپلم</option>
                                    <option value="کاردانی">کاردانی</option>
                                    <option value="کارشناسی" selected>کارشناسی</option>
                                    <option value="کارشناسی ارشد">کارشناسی ارشد</option>
                                    <option value="دکترا">دکترا</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 mt-1" style="direction: rtl">
                                <label style="color: #67747A" for="age">سن (28)</label>
                                <input type="number" name="age" class="form-control" placeholder="سن" required>
                            </div>
                            <div class="col-md-6 col-sm-6 mt-1" style="direction: rtl">
                                <label style="color: #67747A" for="attachment"> فایل رزومه (pdf)</label>
                                <input type="file" name="attachment" class="form-control" required>
                            </div>
                        </div>
                        <button type="button" class="leave" data-dismiss="modal">انصراف</button>
                        {{-- <p><button type="submit" class="btn mt-1">ارسال</button></p> --}}
                        <button class="g-recaptcha" data-sitekey="6LfLS9kgAAAAAH0jCae-OshbDmgb87XNd3MQj-6U" data-callback='onSubmit' data-action='submit'>ارسال</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
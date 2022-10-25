@include('panel.particle.header')
<div class="app">
    <div class="main mt-4">
        <div class="view-content container" data-direction="rtl">
            <div class="row">
                <aside class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body archive-card-title">
                            <i class="fa fa-tv ml-2"></i>به پنل مدیریت

                            <span style="color: red">{{session()->get('locale')}}</span>
                            خوش آمدید
                        </div>
                    </div>
                    <div class="archive-menu-container mb-4" style="display: inline-block">
                        <ul class="nav nav-pills nav-stacked">
                            @role('مدیر')
                            <li>
                                <label>مدیریت کاربران</label>
                                <ul class="nav nav-pills nav-stacked">
                                    <li>
                                        <a href="{{ route('user-list') }}">لیست کاربران سایت</a>
                                    </li>
                                </ul>
                            </li>
                            @endrole
                            @role('مدیر')
                            <li>
                                <label>مدیریت محتوا</label>
                                <ul class="nav nav-pills nav-stacked">
                                    <li>
                                        <a href="{{ route('upload-list') }}">لیست آپلود ها</a>
                                    </li>
                                    {{--<li>--}}
                                        {{--<a href="{{ route('category-list') }}">لیست دسته بندی ها</a>--}}
                                    {{--</li>--}}
                                    <li>
                                        <a href="{{ route('product-list') }}">لیست خدمات (منوی فوتر)</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('service-list') }}">لیست خدمات (منوی بالا)</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('team-list') }}">لیست پرسنل</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('article-list') }}">لیست مقالات</a>
                                    </li>
                                    <li>
                                        {{--<a href="{{ route('news-list') }}">لیست مشتریان ما</a>--}}
                                    </li>
                                    {{--<li>--}}
                                        {{--<a href="{{ route('news-category-list') }}">دسته بندی اخبار</a>--}}
                                    {{--</li>--}}
                                    <li>
                                        <a href="{{ route('news-list') }}">لیست اخبار</a>
                                    </li>
                                    {{--<li>--}}
                                        {{--<a href="{{ route('comment-list') }}">لیست نظرات</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ route('gallery-category-list') }}">دسته بندی گالری</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ route('gallery-list') }}">لیست گالری</a>--}}
                                    {{--</li>--}}
                                    <li>
                                        <a href="{{ route('panel-customer-list') }}">لیست نمونه کارها</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('customer-category-list') }}">دسته بندی نمونه کارها</a>
                                    </li>
                                    {{--<li>--}}
                                        {{--<a href="{{ route('certificate-list') }}">گواهینامه ها</a>--}}
                                    {{--</li>--}}
                                    <li>
                                        <a href="{{ route('slider-list') }}">اسلایدر</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin-employment-list') }}">فرم استخدام</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin-analysis-list') }}">آنالیز سایت</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('editor-list') }}">ویراستار قالب</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('meta-list') }}">Meta</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('file-list') }}">Alt</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('subheader-list') }}">ساب هدر صفحات</a>
                                    </li>
                                </ul>
                            </li>
                            @endrole
                            @role('مدیر')
                            <li>
                                <label>مدیریت سایت</label>
                                <ul class="nav nav-pills nav-stacked">
                                    {{--<li>--}}
                                        {{--<a href="{{ route('visitlogs') }}">لیست بازدید ها</a>--}}
                                    {{--</li>--}}
                                    <li>
                                        <a href="{{ route('contact-list') }}">لیست تماس ها و پشتیبانی ها</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('settings-list') }}">لیست تنظیمات</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <label>مدیریت چالش</label>
                                <ul class="nav nav-pills nav-stacked">
                                    <li>
                                        <a href="https://challenge.adib-it.com/panel/challenge-cat-list">دسته بندی</a>
                                    </li>
                                    <li>
                                        <a href="https://challenge.adib-it.com/panel/challenge-query-list">سوالات و پاسخ</a>
                                    </li>
                                    <li>
                                        <a href="https://challenge.adib-it.com/panel/challenge-show-all">همه چالش ها</a>
                                    </li>
                                </ul>
                            </li>
                            @endrole
                            @role('کاربر')
                            <li>
                                <label>پنل کاربری</label>
                                <ul class="nav nav-pills nav-stacked">
                                    <li>
                                        <a href="{{ route('download') }}">دانلود فایل های بروزرسانی دستگاه</a>
                                    </li>
                                </ul>
                            </li>
                            @endrole
                        </ul>
                    </div>
                </aside>
                <section class="view col-md-9">
                    @include ('panel.messages.list')
                    {{ $body or 'بدون محتوا' }}
                </section>
            </div>
        </div>
        <footer class="footer mt-4 mb-4">
            <div class="container">
                <p class="float-left">{{ $_SERVER['SERVER_NAME'] }}</p>
                <p class="float-right" data-direction="ltr">Copyright © {{ date('Y') }}, All rights reserved.</p>
            </div>
        </footer>
    </div>
</div>
@include('panel.particle.footer')

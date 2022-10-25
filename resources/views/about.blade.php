@extends('layouts.user')
<?php
$seo = App\Meta::where('name_page', 'درباره ما')->get();
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
    .certification_row h3{
        transition: 0.5s;
    }
    .certification_row h3:hover{
        transform: scale(1.2);
        /*opacity: 0.8;*/
        color: #555;
    }
</style>


    <section>
        <ul class="breadcrumb"
            style="margin-bottom: 0;border-bottom: 1px solid #CCCBC9;border-radius: unset !important">
            <li><a href="{{url('/')}}"><!--{{trans('sentence.navigation.home')}}--> <span
                            style="    color: #202E37 !important;" class="fa fa-reply "></span></a></li>
            {{--            <li style="color: #F26341 !important">{{trans('sentence.navigation.templates')}} </li>--}}
            <li style="color: #F26341 !important">درباه ی ما</li>
        </ul>
    </section>
    {{--    <h1>{{ $item->name }}</h1>--}}


    <section class=" w-100" data-direction="rtl">
        <div class="container">

            <div class="container">
                <div class=" row " style="margin-bottom: 30px;" dir="rtl">
                    <h3 style="text-align: center;margin-bottom: 10px;color: #F26341">درباره ی ما</h3>
                    <p style="text-align: justify;font-size: 16px;line-height: 1.7;padding: 30px 0 0  0">
                    <h5 style="text-align: justify"><span style="color: #F26341;font-weight: 700">   شرکت ادیب گستر عصر نوین </span>
                        در دو بخش سخت افزار و نرم افزار فعالیت دارد</h5>
                    <p style="text-align: justify;line-height: 1.8">
                        <br>
                        این شرکت فعالیت حرفه ای خود را از سال ۱۳۸۰ آغاز نمود و در مدت زمان اندکی در میان رقبا خوش
                        درخشید. دپارتمان تخصصی ادیب گستر عصر نوین با بیش از ۲۰ سال سابقه در زمینه های مختلف IT نظیر
                        طراحی سایت، پشتیبانی سایت و سئو ، طراحی اپلیکیشن های Android وIOS راه اندازی و پشتیبانی شبکه،
                        مفتخر است که همراهی مجموعه هایی همچون بانک ملت ، بانک اقتصاد نوین، خدمات هوایی سامان ، هلدینگ
                        دارویی کارن ، مجموعه نمایشگاه های ایران هلث، انجمن صنفی گردشگری، انجمن صنفی تجهیزات پزشکی و بیش
                        از ده ها مجموعه ی دولتی وخصوصی دیگر را در کارنامه ی خود دارد. ارائه ی هریک از خدمات توسط یکی از
                        بخش های متخصص دپارتمان سازماندهی و پوشش دهی و اجرا می گردد.
                        <br>
                        <span style="color: #F26341;font-weight: 700">شرکت ادیب گستر عصر نوین</span> حفظ امنیت اطلاعات
                        مشتریانمان را به عنوان یک تعهد بزرگ می دانیم و تمام تلاش خود را برای این منظور انجام می دهیم با
                        فعالیت مستمر و به کارگیری نیروهای جوان ، باتجربه و متخصص و همگامی با بروزترین تکنولوژی های روز
                        دنیا ،توانسته جایگاه ویژه ای در میان رقبا کسب کند. بنیادی ترین اصول ما بر صداقت، اعتماد و رعایت
                        اخلاق حرفه ای استوار است؛ سابقه ی ما رضایت مشتریان ماست .
                    </p>

                </div>
                <div class="row" style="margin-bottom: 30px;" dir="rtl">
                    <h3 style="text-align: center;margin-bottom: 40px;color: #F26341;"> چشم انداز و ماموریت</h3>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <p style="padding: 14px 30px;text-align: justify;line-height: 1.8">

                            ما  <span style="color: #F26341;font-weight: 700">شرکت ادیب گستر عصر نوین</span> حفظ امنیت اطلاعات مشتریانمان را به عنوان یک تعهد بزرگ می دانیم
                            و تمام تلاش خود را برای این منظور انجام می دهیم .
                            در این راستا مجموعه ادیب با بهره مندى از مدیران متخصص و متعهد و دل سوز با پشتوانه نیروهاى
                            تخصصى با تجربه در بخش هاى مختلف از جمله راه اندازی و پشتیبانی و تحقیق و توسعه، سرمایه هاى
                            انسانى لازم براى دست یافتن به چشم انداز و ماموریت خود به شرح ذیل را فراهم کرده است.

                        </p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 "
                         style=" padding: 2px;border: 4px double #eee;border-radius: 4px;">
                        <img src="{{url('adib/new/images/about/چشم انداز و ماموریت.jpg')}}" alt="img amin_khansari.jpg"
                             style="width: 100%;height: 26vh;    object-position: center;object-fit: cover">
                    </div>


                </div>
                <div class="row" style="margin-bottom: 30px;" dir="rtl">
                    <h3 style="text-align: center;margin-bottom: 40px;color: #F26341;"> چشم انداز شرکت ادیب</h3>
                    <div class="col-md-4 col-sm-4 col-xs-12 "
                         style=" padding: 2px;border: 4px double #eee;border-radius: 4px;">
                        <img src="{{url('adib/new/images/about/چشم انداز شرکت.jpg')}}" alt="img amin_khansari.jpg"
                             style="width: 100%;height: 26vh;    object-position: center;object-fit: cover">

                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <p style="padding: 14px 30px;text-align: center;line-height: 1.8">
                            تبدیل شدن به یکی از بهترین شرکتهای ارائه دهده خدمات فن آوری اطلاعات با شعار داشتن <br>بهترین
                            خدمات و پشتیبانی .
                        </p>
                    </div>

                </div>
                <div class="row" style="margin-bottom: 30px;" dir="rtl">
                    <h3 style="text-align: center;margin-bottom: 40px;color: #F26341;"> ماموریت های شرکت ادیب </h3>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <p style="padding: 14px 30px;text-align: justify;line-height: 1.8">
                            ارائه خدمات با کیفیت با پایبندی به شعار"تعهد به کیفیت" به منظور ایجاد آرامش برای مشتریان
                            گرامی
                            در نظر گرفتن و مطالعه نیاز های مشتریان ، پیش از اقدام به ارائه خدمات
                            ارائه خدمات مطابق به روز با استانداردهاي علمي معتبــر
                            توسعه فردی و توانمندسازی کارکنان به‌عنوان ارزشمندترین سرمایه های یک سازمان </p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 "
                         style=" padding: 2px;border: 4px double #eee;border-radius: 4px;">
                        <img src="{{url('adib/new/images/about/ماموریت های شرکت.jpeg')}}" alt="img amin_khansari.jpg"
                             style="width: 100%;height: 26vh;    object-position: center;object-fit: cover">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 30px;" dir="rtl">
                    <h3 style="text-align: center;margin-bottom: 40px;color: #F26341;"> پاسخگویی به شکایت ها </h3>
                    <div class="col-md-4 col-sm-4 col-xs-12 "
                         style=" padding: 2px;border: 4px double #eee;border-radius: 4px;">
                        <img src="{{url('adib/new/images/about/پاسخگویی به شکایت ها.jpg')}}" alt="img amin_khansari.jpg"
                             style="width: 100%;height: 26vh;    object-position: center;object-fit: cover">
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <p style="padding: 14px 30px;text-align: justify;line-height: 1.8">
                            ارائه خدمات با کیفیت با پایبندی به شعار"تعهد به کپاسخگویی به شکایت ها براساس دستورالعمل های
                            رسیدگی به شکایات مشتریان
                            شناسایی نیازها و انتظارات مشتریان و ارائه پیشنهادات سازنده در مقابله با حفظ پایداری
                            سیستم </p>
                    </div>

                </div>

                <div class="row" style="margin-bottom: 30px;" dir="rtl">
                    <h3 style="text-align: center;margin-bottom: 30px;color: #F26341;">خط مشی ها </h3>
                    <h4 style="text-align: center;margin-bottom: 30px"> خط مشی سیستم مدیریت یکپارچه</h4>
                    <p style="text-align: justify;margin-bottom:30px ">
                        با استعانت از خداوند متعال

                        شرکت ادیب گستر عصر نوین یک شرکت بین المللی و یکی از برترین ارائه دهندگان خدمات فن آوری اطلاعات
                        در سطح کشور می باشد و افتخارهمکاری با شرکت های دولتی - نیمه دولتی و خصوصی زیادی را در رزومه خود
                        دارد و خط مشی مربوطه را بشرح ذیل بیان می دارد:
                    </p>
                        <p style="padding: 14px 0;text-align: justify;line-height: 1.8">
                            <span style="color: #F26341">۱. </span>حفظ و ارتقای کیفیت خدمات به مشتریان محترم
                            <br><br>
                            <span style="color: #F26341">۲. </span> قرار گرفتن جزء ۱۰ شرکت برتر ایران درزمینه فن آوری اطلاعات  تا سال ۱۴۱۰ هجری شمسی
                            <br> <br>
                            <span style="color: #F26341">۳. </span> تعهد به نام تجاری و توسعه برند ٰادیب از طریق رعایت الزامات قانونی در تولید و ارائه خدمات
                            <br><br>
                            <span style="color: #F26341">۴. </span> تعهد به نام تجاری و توسعه برند ٰادیب از طریق رعایت الزامات قانونی در تولید و ارائه خدمات توسعه و بهبود خدمات
                            <br><br>
                            <span style="color: #F26341">۵. </span>بهبود مداوم فرآیندها با بهره گیری از برترین تکنولوژی های روز دنیا
                            <br><br>
                            <span style="color: #F26341">۶. </span> برقراری ارتباط مداوم با مشتریان در جهت ایجاد اعتماد و وفاداری ایشان نسبت به خدمات شرکت
                            <br> <br>
                            <span style="color: #F26341">۷. </span> مشتری مداری از طریق دریافت نظرات و پیشنهادات مشتریان و ارتقاء کیفیت خدمات و خلق نورآوری های قابل اجرا
                            <br><br>
                            <span style="color: #F26341">۸. </span> افزایش تنوع خدمات به منظور پاسخگویی به نیازمندی های روزافزون مشتریان و افزایش توان رقابت با رقبای داخلی و خارجی
                            <br><br>
                            <span style="color: #F26341">۹. </span>بهبود مداوم فرآیندها با بهره گیری از برترین تکنولوژی های روز دنیا
                            <br><br>
                            <span style="color: #F26341">۱۰. </span> برقراری ارتباط مداوم با مشتریان در جهت ایجاد اعتماد و وفاداری ایشان نسبت به خدمات شرکت
                            <br> <br>
                            <span style="color: #F26341">۱۱. </span> مشتری مداری از طریق دریافت نظرات و پیشنهادات مشتریان و ارتقاء کیفیت خدمات و خلق نورآوری های قابل اجرا
                            <br><br>
                            <span style="color: #F26341">۱۲. </span> افزایش تنوع خدمات به منظور پاسخگویی به نیازمندی های روزافزون مشتریان و افزایش توان رقابت با رقبای داخلی و خارجی
                            <br><br>
                            <span style="color: #F26341">۱۳. </span>برگزاری جلسات بازنگری مدیریت جهت حصول اطمینان از اثربخشی و کارایی سیستم مدیریت یک پارچه
                            <br><br>
                            <span style="color: #F26341">۱۴. </span> ایجاد ارتباط علمی و تجاری موثر درون و برون سازمانی در سطوح ملی و بین المللی

                        </p>
                    </div>

                <div class="row certification_row" style="margin-bottom: 30px;" dir="rtl">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <h3 style="text-align: center;margin-bottom: 40px;;font-size: 18px"><a style="color: #F26341" href="https://sajar.mporg.ir/Company/CompanyDetail?cp=133253&cr=119492&crt=32">  شورای عالی انفورماتیک</a></h3>
                        <div class="" style="display: flex;justify-content:center;     align-items: center">
                            <div style="padding: 2px;border: 4px double #eee;border-radius: 4px;width: 70%">
                              <a href="https://sajar.mporg.ir/Company/CompanyDetail?cp=133253&cr=119492&crt=32" target="_blank">
                                  <img src="{{url('assets/front/img/cert01.jpg')}}" alt="img amin_khansari.jpg"
                                       style="width: 100%; object-position: center;object-fit: cover">
                              </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <h3 style="text-align: center;margin-bottom: 40px;font-size: 18px"><a style="color: #F26341;" href="https://tehran.irannsr.org/fa/page/104366-%D9%85%D8%B4%D8%A7%D9%87%D8%AF%D9%87-%D8%A7%D8%B9%D8%B6%D8%A7.html?ctp_id=1086&id=26764">نظام صنفی رایانه ای تهران</a></h3>
                        <div class="" style="display: flex;justify-content:center;       align-items: center">
                            <div style="padding: 2px;border: 4px double #eee;border-radius: 4px;width: 70%">
                              <a href="https://tehran.irannsr.org/fa/page/104366-%D9%85%D8%B4%D8%A7%D9%87%D8%AF%D9%87-%D8%A7%D8%B9%D8%B6%D8%A7.html?ctp_id=1086&id=26764" target="_blank">  <img src="{{url('assets/front/img/cert02.jpg')}}" alt="img amin_khansari.jpg"
                                                style="width: 100%; object-position: center;object-fit: cover"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <h3 style="text-align: center;margin-bottom: 40px;color: #F26341;font-size: 18px">  بیت دفندر</h3>
                        <div class="" style="display: flex;justify-content:center;      align-items: center">
                            <div style="padding: 2px;border: 4px double #eee;border-radius: 4px;width: 70%">
                                <a href="{{url('adib/new/images/Adib Sertifika.png')}}" target="_blank">    <img src="{{url('adib/new/images/Adib Sertifika.png')}}" alt="img amin_khansari.jpg"
                                                                                                                 style="width: 100%; object-position: center;object-fit: cover"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <h3 style="text-align: center;margin-bottom: 40px;color: #F26341;font-size: 18px">   اتحادیه فن آوران تهران</h3>
                        <div class="" style="display: flex;justify-content:center;       align-items: center;">
                            <div style="padding: 2px;border: 4px double #eee;border-radius: 4px;width: 70%;background: #F26341">
                                <a href="https://www.itunion.ir/wp-content/uploads/2020/07/logo-itunion.png" target="_blank">    <img src="https://www.itunion.ir/wp-content/uploads/2020/07/logo-itunion.png" alt="img amin_khansari.jpg"
                                                                                                          style="width: 100%; object-position: center;object-fit: cover"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 30px;" dir="rtl">
                    <h3 style="text-align: center;margin-bottom: 40px;color: #F26341;"> سخن مدیر عامل (امین
                        خوانساری)</h3>
                    <div class="col-md-4 col-sm-4 col-xs-12 "
                         style=" padding: 2px;border: 4px double #eee;border-radius: 4px;">
                        <img src="{{url('adib/new/images/amin_khansari2.jpeg')}}" alt="img amin_khansari.jpg"
                             style="width: 100%;height: 26vh;    object-position: center;object-fit: cover">
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <p style="padding: 14px 30px;text-align: justify;line-height: 1.8">
                            <span style="color: #F26341;font-weight: 700">شرکت ادیب گستر عصر نوین</span> به عنوان یک
                            مجموعه اقتصادی خصوصي ، رضايت و آرامش مشتريان خود را به عنوان اولين و بزرگترين هدف خود قرار
                            داده است . اين شركت اصل مشتري مداري را سرلوحه فرآیندهای جاری و آتی خود قرار داده و در این
                            راستا با برنامه های راهبردی نسبت به یادگیری ، نو آوری و استفاده از آخرین دستاوردهای عملی ،
                            اقدام نموده و حضور خود را در عرصه رقابت و توسعه پایدار گسترش میدهد . مدیریت وهمه کارکنان
                            شرکت اديب گستر عصر نوين با رعایت قوانین و مقررات مربوط با فعالیت های خود . با ارائه خدمات
                            پيشگيرنده در راستاي حفظ امنيت اطلاعات مشتريان شرکت همراه با نوين ترين و بروزترين امکانات که
                            موجبات آرامش آنها را تضمين كنند ، متعهد هستند .
                        </p>
                    </div>

                </div>
            </div>
        </div>


    </section>
    @push('script')
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css"
              integrity="sha256-AWqwvQ3kg5aA5KcXpX25sYKowsX97sTCTbeo33Yfyk0=" crossorigin="anonymous"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"
                integrity="sha256-s5TTOyp+xlSmsDfr/aZhg0Gz+JejYr5iTJI8JxG1SkM=" crossorigin="anonymous"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                rtl: true,
                loop: false,
                margin: 10,
                slideSpeed: 1000,
                autoPlay: true,
                navigation: true,
                autoWidth: false,
                items: 6,
                navigationText: ['<i class="nc-icon arrows-1_minimal-left"></i>', '<i class="nc-icon arrows-1_minimal-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 6
                    }
                }
            });
        </script>
    @endpush
@endsection

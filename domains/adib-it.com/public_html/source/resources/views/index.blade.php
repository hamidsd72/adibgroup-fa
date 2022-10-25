
{{--{{dd($news1)}}--}}
@extends('layouts.user')
@section('body')

  @php $locale = session()->get('locale'); @endphp

  @if (session('status'))
    <div class="alert alert-{{session('status')}}">
      <a aria-label="AdibIT" href="#" class="close" data-dismiss="alert"
         aria-label="close">&times;</a> {{ session('message') }}
    </div>
  @endif
  @php
    function limitWord($string, $limit){
        $words = explode(" ",$string);
        $output = implode(" ",array_splice($words,0,$limit));
        $output = $output . ' ...';
        return $output;
    }
  @endphp

  <!-- Important Links -->
  <section id="important_links" class="main-content">
    <!-- Content -->
    <div class="content important_links animated" data-animation="fadeInUp" data-animation-delay="300" style="padding: 30px 0px 15px 0">
      <!-- Important Links Carousel-->
      <div id="carousel-example-generic" class="carousel slide important_links_slide" data-ride="carousel">
        <!-- Slides Wrapper -->
        <div class="carousel-inner welcome-banner">
          <!-- Slide -->
          <div class="item active">
            <div class="welcome-banner-text">
              <h1 class="main_title_a">
                درباره ما
              </h1>
              <div style="margin-bottom: 20px">
{{--                {!!  substr(trans('sentence.home.service_text') , 0 , 400)!!}--}}
                <p style="    text-align: justify;    direction: rtl;    font-size: 18px;    line-height: 1.8;">
                  <b>شرکت ادیب گستر عصر نوین</b> در دو بخش سخت افزار و نرم افزار فعالیت دارد

                  این شرکت فعالیت حرفه ای خود را از سال 1380 آغاز نمود و در مدت زمان اندکی در میان رقبا خوش درخشید. دپارتمان تخصصی ادیب گستر عصر نوین با بیش از ۲۰ سال سابقه در زمینه های مختلف IT نظیر طراحی سایت، پشتیبانی سایت و سئو ، طراحی اپلیکیشن های Android وIOS راه اندازی و پشتیبانی شبکه،  مفتخر است که همراهی مجموعه هایی همچون بانک ملت ، بانک اقتصاد نوین، خدمات هوایی سامان ، هلدینگ دارویی کارن ، مجموعه نمایشگاه های ایران هلث، انجمن صنفی گردشگری، انجمن صنفی تجهیزات پزشکی و بیش از ده ها مجموعه ی دولتی وخصوصی دیگر را در کارنامه ی خود دارد. ارائه ی هریک از خدمات توسط یکی از بخش های متخصص دپارتمان سازماندهی و پوشش دهی و اجرا می گردد.
                </p>

              </div>
              <a  class="more_a"  href="{{ route('about-us') }}" > {{trans('sentence.home.view_more')}}</a>
              <a  class="load-more" id="btnabout" download href="{{url('image/adibresume5.pdf')}}"  > دریافت رزومه</a>
            </div>
          </div>
          <!-- End Slide -->

        </div>
        <!-- End Slides Wrapper -->

      </div>
      <!-- End Important Links Carousel-->
    </div>
    <!-- End Content -->
  </section>
  <!-- End Important Links -->

  <!-- About Section -->
  <section id="servies" class="main-content">
    <!-- Content -->
    <div class="content" style="padding: 30px 0">

      <!-- Main Title -->
      <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
          خدمات‌
      </h1>

      <!-- What We Do -->
      <ul class="about-contents slide-boxes">

      @foreach(App\Service::where('lang' ,  session()->get('locale'))->orderBy('sort' , 'ASC')->get()->chunk(4) as $key_ch=>$values)
        @foreach($values as $key=>$value)

          <!-- Item -->
            <li class="about box animated" data-animation="rotateInDownLeft" data-animation-delay="300">
              <a style="display: flex;justify-content: center;align-items: center;padding: 20px;cursor: grab !important"
                 href="{{$value->page=='active'?route('user-service-show',[app()->getLocale(),$value->slug]):'#'}}"
                 class="about-logo">
                <img src="{{ $value->icon_hover?url($value->icon_hover):url('adib/icon_2.png') }}"
                     class="icon_2" alt="{{$value->title}}">

              </a>
              <h3>{{$value->title}}</h3>
              <p> {!! $value->short_text !!}</p>
              {{--                            <a href="#" class="more_b"><i class="fa fa-plus"></i></a>--}}
            </li>
            <!-- End Item -->

          @endforeach
        @endforeach

      </ul>

      <!-- End What We Do -->
      <div class="clear"></div>

    </div>
    <!-- End Content -->
  </section>
  <!-- End About Section-->

  <!-- History Section -->
  <section id="history" class="main-content">
    <!-- Parallax Overlay -->
    <div class="parallax-overlay">
      <!-- Toons -->
      <div class="toons toons2">
        <!-- Content -->
        <div class="content">

          <!--White Title-->
          <div class="section-title-white animated" data-animation="fadeInUp" data-animation-delay="300">
            <h1>
              تاریخچه شرکت
            </h1>
            <div class="seperator"><span class="white_line"></span></div>
          </div>
          <!--End White Title-->

          <!-- History Timeline -->
          <ul class="history-timeline list-unstyled pretty-lightbox-b" style="text-align: end;">
            <!-- History Year -->
            <li class="year">۱۳۸۰</li>
            <li class="timeline-item animated" data-animation="fadeInRight" data-animation-delay="50" >
              <div class="timeline-image">
                <a class="" href="{{url('assets/front/img/new/05.jpg')}}" data-rel="prettyPhoto[gallery]">
                  <span class="image-overlay"></span>
                  <span class="image-zoom"><i class="fa fa-search"></i></span>
                  <img src="{{url('assets/front/img/new/05.jpg')}}" title="" alt=""/>
                </a>
              </div>
              <h4>   شروع فعالیت</h4>
              <div class="article">
                شرکت ادیب گستر عصر نوین  فعالیت خود را از سال ۱۳۸۰ در زمینه طراحی نرم افزار و سخت افزار آغاز کرد و هم اکنون با دو دفتر در استانبول ترکیه و تهران و بیش از ۵۰ نفر پرسنل متخصص و دارا بودن بیش از ۳۵۰ قرارداد نگهداری و پشتیبانی  یکى از خوشنام ترین برندها در میان رقبای خود در کشور می باشد.
              </div>
{{--              <span class="date"><i class="fa fa-calendar-o"></i> ۱۳۸۰  </span>--}}
              <a class="read-more" href="#">{{trans('sentence.home.view_more')}} </a>
            </li>
            <li class="timeline-item animated" data-animation="fadeInLeft" data-animation-delay="50">
              <div class="timeline-image">
                <a class="" href="{{url('assets/front/img/cert01.jpg')}}" data-rel="prettyPhoto[gallery]">
                  <span class="image-overlay"></span>
                  <span class="image-zoom"><i class="fa fa-search"></i></span>
                  <img src="{{url('assets/front/img/cert01.jpg')}}" title="" alt=""/>
                </a>
              </div>
              <h4>مجوز های شرکت</h4>
              <div class="article">
                از آنجا که کیفیت و تحویل به موقع خدمات از اهداف مجموعه ادیب بوده این شرکت با سابقه درخشان خود توانسته مجوز رتبه بندی شورای عالی انفورماتیک از سازمان برنامه و بودجه کشور و  مجوز نظام صنفی رایانه ای تهران و مجوز فعالیت از اتحادیه صنف فناوران رایانه ای تهران  را کسب نماید و دارای رضایت ۱۰۰ درصدی از مشتریان خود میباشد .              </div>
{{--              <span class="date"><i class="fa fa-calendar-o"></i>   ۱۳۹۷</span>--}}
                            <a class="read-more" href="#">{{trans('sentence.home.view_more')}} </a>
            </li>
            <li class="timeline-item animated" data-animation="fadeInRight" data-animation-delay="50">
              <div class="timeline-image">
                <a class="" href="{{url('assets/front/img/new/07.jpg')}}" data-rel="prettyPhoto[gallery]">
                  <span class="image-overlay"></span>
                  <span class="image-zoom"><i class="fa fa-search"></i></span>
                  <img src="{{url('assets/front/img/new/07.jpg')}}" title="" alt=""/>
                </a>
              </div>
              <h4>واحد سخت افزار   </h4>
              <div class="article">
                این واحد تخصص اجرای و راه اندازی و پشتیبانی انواع شبکه های کامپیوتری را دارد . راه اندازی انواع روترهای سیسکو و میکروتیک - مجازی سازی سرورها- ارائه بهترین راه کارهای بک آپ گیری و راه اندازی آنها و امنیت شبکه از دیگر توانایی های این تیم میباشد .
              </div>
{{--              <span class="date"><i class="fa fa-calendar-o"></i> ۱۳۹۷  </span>--}}
              <a class="read-more" href="#">{{trans('sentence.home.view_more')}} </a>
            </li>
            <li class="timeline-item animated" data-animation="fadeInLeft" data-animation-delay="100">
              <div class="timeline-image">
                <a class="" href="{{url('assets/front/img/new/08.jpg')}}" data-rel="prettyPhoto[gallery]">
                  <span class="image-overlay"></span>
                  <span class="image-zoom"><i class="fa fa-search"></i></span>
                  <img src="{{url('assets/front/img/new/08.jpg')}}" title="" alt=""/>
                </a>
              </div>
              <h4>واحد نرم افزار   </h4>
              <div class="article">
                شرکت ادیب گستر عصر نوین دارای یک تیم کامل تولید نرم افزارهای کاربردی ابری از قبیل  نرم افزار ارتباط با مشتری - باشگاه مشتریان و هر نرم افزار سفارشی - طراحی وب سایت های فروشگاهی و معرفی - انواع لندینگ پیج های مناسبتهای خاص میباشد .
              </div>
              {{--              <span class="date"><i class="fa fa-calendar-o"></i> ۱۳۹۷  </span>--}}
              <a class="read-more" href="#">{{trans('sentence.home.view_more')}} </a>
            </li>

            <li class="year">۱۳۹۷</li>
            <li class="timeline-item animated" data-animation="fadeInRight" data-animation-delay="150" >
              <div class="timeline-image">
                <a class="" href="{{url('assets/front/img/new/02.jpg')}}" data-rel="prettyPhoto[gallery]">
                  <span class="image-overlay"></span>
                  <span class="image-zoom"><i class="fa fa-search"></i></span>
                  <img src="{{url('assets/front/img/new/02.jpg')}}" title="" alt=""/>
                </a>
              </div>
              <h4> آنچه ما را متمایز می کند   </h4>
              <div class="article">
                واحد مشاوره و فروش شرکت ادیب با هدف ایجاد پل ارتباطی میان مشتریان و شرکت با نام صدای مشاور به طور رسمی کار خود را از مهر ماه 1384 آغاز کرده است . در این بخش کارشناسان فروش شرکت سوالات مشتریان در زمینه معرفی و انتخاب انواع خدمات شرکت و همچنین پیشنهاد راهکار مناسب برای مشکلات احتمالی هستند
                به منظور تسهیل ارتباط مخاطب با مشاوران امکان برقرای ارتباط به دو صورت آنلاین(واتس آپ - اینستاگرام و سایت رسمی شرکت ) و تلفنی وجود دارد.
              </div>
{{--              <span class="date"><i class="fa fa-calendar-o"></i> ۱۳۸۰  </span>--}}
              <a class="read-more" href="#">{{trans('sentence.home.view_more')}} </a>
            </li>
            <li class="timeline-item animated" data-animation="fadeInLeft" data-animation-delay="150">
              <div class="timeline-image">
                <a class="" href="{{url('assets/front/img/new/04.jpg')}}" data-rel="prettyPhoto[gallery]">
                  <span class="image-overlay"></span>
                  <span class="image-zoom"><i class="fa fa-search"></i></span>
                  <img src="{{url('assets/front/img/new/04.jpg')}}" title="" alt=""/>
                </a>
              </div>
              <h4>سامانه ارتباط با مشتری</h4>
              <div class="article">
                سیستم ارتباط با مشتریان شرکت ادیب گستر عصر نوین  در سال ۱۳۹۷ با هدف افزایش رضایت و وفاداری مشتریان راه اندازی شد و تا امروز بیش از ۲۵۰۰ عضو فعال دارد. مشتریان ادیب با عضویت در این سیستم می توانند از خدمات آنلاین شرکت  بهره مند شوند.
              </div>
{{--              <span class="date"><i class="fa fa-calendar-o"></i> ۱۳۹۷  </span>--}}
              <a class="read-more" href="#">{{trans('sentence.home.view_more')}} </a>
            </li>
            <div class="clear"></div>



            <li class="year">۱۳۹۹</li>
            <!-- Item -->
            <li class="timeline-item animated" data-animation="fadeInRight" data-animation-delay="100">
              <div class="timeline-image">
                <a class="" href="{{url('assets/front/img/new/03.jpg')}}" data-rel="prettyPhoto[gallery]">
                  <span class="image-overlay"></span>
                  <span class="image-zoom"><i class="fa fa-search"></i></span>
                  <img src="{{url('assets/front/img/new/03.jpg')}}" title="" alt=""/>
                </a>
              </div>
              <h4>راه اندازی دفتر ترکیه  </h4>
              <div class="article">
                شرکت ادیب  به منظور ورود به بازارهای جهانی و انجام پروژه های برون مرزی از نمیه دوم سال ۱۳۹۹ فعالیت جدید خود را در کشور ترکیه و شهر بزرگ استانبول آغاز کرد .
              </div>
{{--              <span class="date"><i class="fa fa-calendar-o"></i> ۱۳۹۹  </span>--}}
              <a class="read-more" href="#">{{trans('sentence.home.view_more')}} </a>
            </li>
            <!-- Item -->
            <li class="timeline-item animated" data-animation="fadeInRight" data-animation-delay="150">
              <div class="timeline-image">
                <a class="" href="{{url('adib/new/images/Adib Sertifika.png')}}" data-rel="prettyPhoto[gallery]">
                  <span class="image-overlay"></span>
                  <span class="image-zoom"><i class="fa fa-search"></i></span>
                  <img src="{{url('adib/new/images/Adib Sertifika.png')}}" title="" alt=""/>
                </a>
              </div>
              <h4>اخد نمایندگی  بیت دیفندر     </h4>
              <div class="article">
                در اواخر سال ۱۳۹۹ شرکت ادیب مفتخر به دریافت نمایندگی آنتی ویروس بیت دیفندر شده است .
              </div>
{{--              <span class="date"><i class="fa fa-calendar-o"></i> ۱۳۹۹  </span>--}}
              <a class="read-more" href="#">{{trans('sentence.home.view_more')}} </a>
            </li>
            <div class="clear"></div>
{{--            <a class="load-more" href="#">{{trans('sentence.home.view_more')}} </a>--}}
          </ul>
          <!-- End History Timeline -->

        </div>
        <!-- End Content -->
        <span class="pattern1"></span>

      </div>
      <!-- End Toons -->
    </div>
    <!-- End Parallax Overlay -->
  </section>
  <!-- End History Section -->

  <!-- About Section -->
  <style>
    .owl-item{
      display: flex;
      justify-content: center        }
    .about{
      transition: 0.5s;
    }
    .about:hover img{
      filter: grayscale(100%);
    }
    .about h4{
      transition: 0.6s !important;
    }
    .about:hover h4{
      color: #F26341;
      transform: scale(1.2);
    }

  </style>
  <section id="coustomer" class="main-content">
    <!-- Content -->
    <div class="content" style="padding: 30px 0 0 0">

      <!-- Main Title -->
      <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
        مشتریان ما
      </h1>

      <!-- What We Do -->
      <ul class="about-contents slide-boxes">

      @foreach($customer_icon->take(6) as $val)
        @if($val->photo)

          <!-- Item -->
            <li class=" box customer_icon" data-animation="rotateInDownRight" data-animation-delay="100" >
              <a  style="display: flex;justify-content: center;align-items: center;" href="{{ 'http://'.str_replace(['http://','https://'],'',$val->url)}}"
                  target="_blank">
                <img style="height: 150px ; object-fit: contain;" src="{{ url($val->photo->path) }}" alt="{{ $val->title }}" class="icon_2"  >
              </a>
              <h4 style="font-size: 14px;padding: 0 20px">{{$val->title}}</h4>
              {{--                            <a href="#" class="more_b"><i class="fa fa-plus"></i></a>--}}
            </li>
            <!-- End Item -->
          @endif
        @endforeach
      </ul>
      <div style="display: flex;justify-content: center;align-items: center;margin-top: 60px;">
        <a class="load-more" href="{{ route('user-news-list' , $locale) }} ">{{trans('sentence.home.view_more')}} </a>
      </div>
      <!-- End What We Do -->
      <div class="clear"></div>
    </div>
    <!-- End Content -->
  </section>
  <!-- End About Section-->

  @if(count($article) > 0)
    <style>
      .owl-wrapper{
        display: flex !important;
      }
    </style>
    <!-- Our Team Section -->
    <section id="blog" class="main-content">
      <!-- Content -->
      <div class="content" style="padding: 30px 0 ">

        <!-- Main Title -->
        <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300" style="margin: 0">
          {{trans('sentence.home.article')}}
        </h1>
        <!-- Team -->
        <div class="team-items slide-boxes">
        @foreach($article as $row)
          <!-- Member -->
            <div class="item animated" data-animation="rollIn" data-animation-delay="0">
              <img src="{{ $row->home ? url($row->home) : '' }}" alt="{{ $row->title }}"  style="height: 150px;object-fit: cover" />
              <h5 style="margin:30px 0">{{ $row->title }} </h5>
              <p>...{!! substr($row->short_text , 0 , 50) !!}</p>
              <div style="display: flex;justify-content: center;align-items: center;margin-top: 60px;">
                <a class="load-more"  href="{{ route('user-article-show',[$locale , $row->slug])}}">{{trans('sentence.home.view')}} </a>
              </div>
            </div>
            <!-- End Member -->
          @endforeach
        </div>
        <!-- End Team -->
      </div>
      <!-- End Content -->
    </section>
    <!-- End Our Team Section -->
  @endif



    <!-- Clients Section -->
    <section id="our-clients" class="main-content animated" data-animation="fadeInUp" data-animation-delay="500">
      <div class="content">
        <!-- Clients Carousel -->
        <div class="our-clients-carousel">
          <div class="item"><img src="{{url('adib/new/images/clients/our-clients/logo1.png')}}" alt=""></div>
          <div class="item"><img src="{{url('adib/new/images/clients/our-clients/logo2.png')}}" alt=""></div>
          <div class="item"><img src="{{url('adib/new/images/clients/our-clients/logo3.png')}}" alt=""></div>
          <div class="item"><img src="{{url('adib/new/images/clients/our-clients/logo4.png')}}" alt=""></div>
          <div class="item"><img src="{{url('adib/new/images/clients/our-clients/logo5.png')}}" alt=""></div>
          <div class="item"><img src="{{url('adib/new/images/clients/our-clients/logo6.png')}}" alt=""></div>
        </div>
        <!-- End Clients Carousel -->
      </div>
    </section>
    <!-- End Our Clients Section -->

  @if(count($news1) > 0)
    <!-- Client Say -->
    <section id="client-say">
      <div class="parallax-overlay">
        <!-- Content -->
        <div class="content">
          <!-- White Title -->
          <div class="section-title-white">
            <h1>  {{trans('sentence.home.news')}}</h1>
            <div class="seperator"><span class="white_line"></span></div>
          </div>
          <!-- Client Say Carousel -->
          <div class="client-say-carousel">
            <div id="carousel-client-say" class="carousel slide">
              <!-- slides Wrapper -->
              <div class="carousel-inner">
              @foreach($news1 as $key=>$item)
                <!-- Slide 1 -->
                <div class="item   @if($loop->index ==0) active @endif" >
                  <div class="clients-say-item">
                    <img src="{{ $item->home ? url($item->home) : '' }}" alt="{{ $item->title }}">
                    <div class="client-comment-block">
                      <p class="client-comment">
                        {{ $item->short_text}}
                      </p>
                      <h3 class="client-name-and-jop">
                        <i class="fa fa-caret-right"></i>
                        <span class="client-name">{{ substr($item->created_at,0,10)}}</span>
                        <i class="fa fa-angle-right"></i>
                        <span class="client-jop"><a style="font-size: 14px !important;padding: 10px 20px !important;" class="load-more"  href="{{route('user-show-news1',[app()->getLocale(),$item->slug])}}">{{trans('sentence.home.view_more')}}</a></span>
                      </h3>
                      <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                  </div>
                </div>
                <!-- End Slide 1 -->
                @endforeach
              </div>
              <!-- End slides Wrapper -->
              <!-- Controls -->
              <a class="left carousel-control s-controls" href="#carousel-client-say" style="font-family: sans-serif !important;" data-slide="prev">
                <i class="fa fa-angle-left"></i>
              </a>
              <a class="right carousel-control s-controls" href="#carousel-client-say" style="font-family: sans-serif !important;" data-slide="next">
                <i class="fa fa-angle-right"></i>
              </a>
         <div class="col-12 col-md-12 col-xs-12" style="padding:0 4px;display: flex;justify-content: end;align-items: center;margin-top: 30px">
           <a aria-label="AdibIT" style="padding: 8px 50px;background: #F26341;color: #FFFFFF;border-radius: 3px;" href="{{route('user-news-list1')}}">
             لیست اخبار
           </a>

         </div>
            <!-- End Controls -->
            </div>
          </div>
          <!-- End Client Say Carousel -->
        </div>
        <!-- End Content -->
        <span class="pattern1"></span>
      </div>
      <!-- End parallax-overlay -->
    </section>
    <!-- End Client Say Section -->

  @endif




  <!-- Services Section -->
  <section id="services" class="main-content">
    <!-- Content -->
    <div class="content" style="padding: 30px 0">

      <!-- Main Title -->
      <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
        خدمات ما
      </h1>

      <!-- Icons Blocks -->
      <div class="col-md-4" style="direction: rtl">
        <!-- Item -->
        <div class="services-box animated" data-animation-delay="700" data-animation="fadeInDown" style="  flex-wrap: wrap ; flex-direction: column;    display: flex;">
          <h4 style="width: 300px;text-align: center; font-weight: bold;font-size: 22px;">
            <a href="#">
              بازاریابی دیجیتال
            </a>
          </h4>
          <div style="    display: flex;    justify-content: center;">
            <div class="services-box-icon">
              <i class="fa  fa-comments-o"></i>
            </div>
            <div class="feature-box-info">
              <p style="margin:10px;width: 50vw">
                بازاریابی ورودی<br>
                بهینه سازی موتورهای جستجو (SEO)<br>
                بازاریابی رسانه های اجتماعی<br>
                بازاریابی موتورهای جستجو (SEM)<br>
                بازاریابی ایمیلی<br>
                مشاوره تجزیه و تحلیل<br>
              </p>
            </div>
          </div>

        </div>
        <!-- End Item -->
        <!-- Item -->
        <div class="services-box push-top animated" data-animation-delay="900" data-animation="fadeInDown" style="    flex-wrap: wrap;flex-direction: column;      display: flex;">
          <h4 style="width: 300px;text-align: center; font-weight: bold;font-size: 22px;">
            <a href="#">
              نام تجاری
            </a>
          </h4>
          <div style="    display: flex;    justify-content: center;">
            <div class="services-box-icon">
              <i class="fa fa-file-o"></i>
            </div>
            <div class="feature-box-info">
              <p style="margin:10px;width: 50vw">
                نشان‌واره و هویت برند<br>
                طراحی گرافیک<br>
                طراحی بسته<br>
                طراحی اینفوگرافیک<br>
                طراحی چاپ<br>
                کپی نویسی خلاق<br>
                مدیریت اینستاگرام<br>

              </p>
            </div>
          </div>
        </div>
        <!-- End Item -->
      </div>

      <div class="col-md-4" style="direction: rtl;">
        <!-- Item -->
        <div class="services-box animated" data-animation-delay="1100" data-animation="fadeInDown" style="  flex-wrap: wrap;  flex-direction: column;     display: flex;">
          <h4 style="width: 300px;text-align: center; font-weight: bold;font-size: 22px;">
            <a href="#">
              توسعه وب
            </a>
          </h4>
          <div style="    display: flex;    justify-content: center;">
            <div class="services-box-icon">
              <i class="fa fa-film"></i>
            </div>
            <div class="feature-box-info">
              <p style="margin:10px;width: 50vw">
                توسعه وردپرس<br>
                توسعه تجارت الکترونیک<br>
                توسعه PHP-Laravel<br>
                توسعه Node JS<br>
                React JS Development<br><br>
              </p>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <!-- Item -->
        <div class="services-box push-top animated" data-animation-delay="1300" data-animation="fadeInDown" style="  flex-wrap: wrap;   flex-direction: column;   display: flex;">
          <h4 style="width: 300px;text-align: center; font-weight: bold;font-size: 22px;">
            <a href="#">
              اپلیکیشن موبایل
            </a>
          </h4>
          <div style="    display: flex;    justify-content: center;">
            <div class="services-box-icon">
              <i class="fa fa-puzzle-piece"></i>
            </div>
            <div class="feature-box-info">
              <p style="margin:10px;width: 50vw">
                توسعه برنامه Android<br>
                توسعه برنامه iOS<br>
                React Native Apps<br>
                برنامه وب<br>

              </p>
            </div>
          </div>
        </div>
        <!-- End Item -->
      </div>

      <div class="col-md-4 " style="direction: rtl;">
        <!-- Item -->
        <div class="services-box animated" data-animation-delay="1500" data-animation="fadeInDown"  style=" flex-wrap: wrap;    flex-direction: column;      display: flex;">
          <h4 style="width: 300px;text-align: center;    font-weight: bold;font-size: 22px;">
            <a href="#">
              تولیدات ویدئویی
            </a>
          </h4>
          <div style="    display: flex;    justify-content: center;">
            <div class="services-box-icon">
              <i class="fa fa-link"></i>
            </div>
            <div class="feature-box-info">
              <p style="margin:10px;width: 50vw">
                ویدیوهای توضیح دهنده<br>
                ویدیوهای متحرک دو بعدی<br>
                ویدیوهای متحرک سه بعدی<br>
                انیمیشن تخته سفید<br>
                گرافیک انیمیشن متحرک <br><br>
              </p>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <!-- Item -->
        <div class="services-box push-top animated" data-animation-delay="1700" data-animation="fadeInDown"  style=" display: flex;  flex-wrap: wrap;  flex-direction: column; ">

          <h4 style="width: 300px;text-align: center; font-weight: bold;font-size: 22px;">
            <a href="#">
              توسعه نرم افزار
            </a>
          </h4>
          <div style="    display: flex;    justify-content: center;">
            <div class="services-box-icon">
              <i class="fa fa-desktop"></i>
            </div>
            <div class="feature-box-info">
              <p style="margin:10px;width: 50vw">
                توسعه برنامه های کاربردی وب<br>
                AI و ML - Python، TensorFlow<br>
                توسعه پشته MEAN/MERN<br>
                توسعه بلاک چین<br>
                برنامه های اینترنت اشیا<br>
                Big Data Service<br>
              </p>
            </div>
          </div>
        </div>
        <!-- End Item -->
      </div>
      <div class="clear"></div>
      <div class="col-12" style="display: flex;justify-content: center;align-items: center;margin-top:50px">
        <a class="load-more" href="{{ route('user-service-detail')}}">{{trans('sentence.home.view_more')}} </a>
      </div>
      <!-- End Icons Blocks -->
      <div class="clear"></div>
    </div>
    <!-- End Content -->
  </section>
  <!-- End Services Section -->

  <!-- Features -->
  <section id="features" class="parallax-section">
    <!-- Overlay1 -->
    <div class="overlay1">
      <!-- Toons -->
      <div class="toons toons1">
        <!-- Content -->
        <div class="content">

          <!--White Title-->
          <div class="section-title-white animated" data-animation="fadeInUp" data-animation-delay="300">
            <h1 style="color: #FFFFFF;background: rgba(0,0,0,0.7);margin: 15px;padding: 16px 0;border-radius: 5px;">
{{--              {{trans('sentence.home.service')}}        --}}
              باشگاه مشتریان شرکت ادیب
            </h1>
                          <div class="seperator"><span class="white_line"></span></div>
                          <p data-animation="fadeInUp" data-animation-delay="0" class="animated" style="text-align: justify;direction: rtl">
              {{--              {!! __('sentence.site-p') !!}--}}
{{--              {!! trans('sentence.home.service_text') !!}--}}
                            شرکت ادیب در سال ۹۶ اقدام به تولید نرم افزار باشگاه مشتریان کرده است که آن را میتوان بنا به درخواست مشتریان تغییرات داد و خصوصی سازی کرد .  بزرگترین فایده یک باشگاه مشتریان و به عبارت دیگر یک برنامه وفادار سازی مشتری حفظ ارتباط شما با مشتری میباشد.
                            هرگونه تبلیغ برای کسب و کار، یک ارتباط یکطرفه و در اصول بازاریابی نوعی مونولوگ محسوب میشود. ارتباطی که فقط پیام تبلیغی شما را به گوش مشتریان احتمالی می رساند، در حالیکه در باشگاه مشتریان و برنامه های وفاداری ارتباط شما با مشتری بصورت دوطرفه (دیالوگ) برقرار می شود و مشتری بطور کامل درک می کند که شما قدردان وفاداری او هستید، نظراتش برای شما اهمیت دارد و به میزان وفاداری او، شما برایش مزایای بیشتری در نظر خواهید گرفت. بزرگترین باشگاه مشتریان تولید شده شرکت مربوط به شرکت کارن میباشد .
            </p>
          </div>
          <!--End White Title-->

          <div style="position: relative;overflow: hidden">
            <img id="desktopThree" src="{{ url('source/assets/img/desktop3.png') }}" alt="desktop3"
                 title=""
                 class="desktop3 gadg clas_3">
            <img id="laptopThree" src="{{ url('source/assets/img/laptop3.png') }}" alt="laptop3"
                 title=""
                 class="laptop3 gadg clas_4">
            <img id="tabThree" style="position: absolute;top: 10%;left: 40%"
                 src="{{ url('source/assets/img/tab3.png') }}" alt="tab3" title=""
                 class="tab3 gadg clas_5">
            <img id="phoneThree" style="    position: absolute;
    top: 33%;
    right: 4%;" src="{{ url('source/assets/img/phone3.png') }}" alt="phone3" title=""
                 class="phone3 gadg clas_6">
          </div>
        </div>
        <!-- End Content -->
      </div>
      <!-- End toons -->
    </div>
    <!-- End overlay1 -->
  </section>
  <!-- End Features -->

  <!-- Portfolio -->
  <style>
    .work-inner:hover .title-img{
      transform: translateY(-40px);
    }
  </style>
  <section id="portfolio" class="main-content " style=" background: #F5F5F5; border-bottom: 1px dashed #CCCCCC;">
    <!-- Content -->
    <div class="content" style="padding: 30px 0">
      <!-- Main Title -->
      <h1 class="main_title_a animated" data-animation="fadeInUp" data-animation-delay="300">
        نمونه کارها ما
      </h1>
      <!-- Works -->
      <div class="works">
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
{{--                    <a class="button zoom" href="{{$customer->site?url($customer->site->path):'' }}"--}}
{{--                       data-rel="prettyPhoto[gallery]"><i class="fa fa-film"></i></a>--}}
{{--                    <a class="button detail" href="{{$customer->url}}"><i--}}
{{--                              class="fa fa-link"></i></a>--}}
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
        <div style="display: flex;justify-content: center;align-items: center;margin-top:50px">
          <a class="load-more" href="{{ route('user-gallery') }}">{{trans('sentence.home.view_more')}} </a>
        </div>
      </div>
      <!-- End Works -->
    </div>
    <!-- End Content -->
  </section>
  <!-- End Portfolio Section -->



@endsection
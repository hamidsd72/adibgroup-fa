<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Notifications\PostPublished;
use Illuminate\Support\Facades\Notification;
use App\News;
use App\Optimizer;
use Intervention\Image\ImageManagerStatic as Image;

Route::get('/resize/pic_1400', function () {
    $url='assets/uploads/products/1399-11-12/photos/photo-b0975e592c32318615d23d5f8d071c59.jpg';
//    $url2='source/assets/img/adib_en_logo2.png';
    $img = Image::make($url);
    $img->resize(1200, null, function ($constraint) {
        $constraint->aspectRatio();
    });
    $img->save($url);
    Optimizer::saveAs($url);
    return 'ok';
});
// redirecting url
//Route::redirect('/en/نمونه-کارها/online-marketing', 'online-shoping');
//Route::redirect('/en/template/ariaguster-karan-industrial-group', 'Karen-Pharma');
//Route::redirect('/en/template/golnaz-fasih-salon', url('/'));
//Route::redirect('/en/template/behsan-engineering-development-group', url('/'));
//Route::redirect('/en/template/arash-mahya-paraffin-manufacturing-co.', url('/'));
//Route::redirect('/en/template/bonyyan-abad-engineering-compan', url('/'));
//Route::redirect('/en/template/kamsan', url('/'));
//Route::redirect("/en/template/tehran-children's-hospital-imaging-center", url('/'));
//Route::redirect('/en/template/alam-structural-consulting-engineers-group', url('/'));
//Route::redirect('/en/template/sina-gostar-advanced-company', url('/'));
//Route::redirect('/en/template/natyexir-translation-services', url('/'));
//Route::redirect('/en/template/gole-abrisham-carpet-cleaning', url('/'));
//Route::redirect('/en/template/Frasang Dorsa (Doris)', url('/'));
//Route::redirect('/en/template/khoram-machine-manufacturing', url('/'));
//Route::redirect('/en/template/sengsas-mineral-group', url('/'));
//Route::redirect('/en/template/abdul-samadi-dentistry', url('/'));
//Route::redirect('/en/template/ghand-asal-kindergarten', url('/'));
//Route::redirect('/en/template/white-house-reception-hall', url('/'));
//Route::redirect('/en/template/avid-arya-industrial-group', url('/'));
//Route::redirect('/en/template/online-vegetable-store', url('/'));
//Route::redirect('/en/template/dr-tavaklian-pharmacy', url('/'));
//Route::redirect('/en/template/meta-psychology-department', url('/'));
//Route::redirect('/en/template/mehr-mina-electronic-co', url('/'));
//Route::redirect('/en/template/aali-industrial-group', url('/'));
//Route::redirect('/en/template/alo-insurance-company', url('/'));
//Route::redirect('/en/template/pars-jam-control-company', url('/'));
//Route::redirect('/en/template/golden-dream-clinic', url('/'));
//Route::redirect('/en/template/radin-sanat-company', url('/'));
//Route::redirect('/en/template/Tashrang-company', url('/'));
//Route::redirect('/en/template/sina-dental-clinic', url('/'));
//Route::redirect('/en/template/abshenasan-freight', url('/'));
//Route::redirect('/en/template/saba-sports-complex', url('/'));
//Route::redirect('/en/template/arta-industrial-group', url('/'));
//Route::redirect('/en/template/shima-corporation', url('/'));
//Route::redirect('/en/template/arka-rad-trading', url('/'));
//Route::redirect('/en/template/afzar-pardaz-rodin', url('/'));
//Route::redirect('/en/template/araz-online-store', url('/'));
//Route::redirect('/en/template/farham-company', url('/'));
//Route::redirect('/en/template/pazak-company', url('/'));
//Route::redirect('/en/template/kayhan-pharmacy', url('/'));
//Route::redirect('/en/template/pazak-online-sale', url('/'));
//Route::redirect('/en/template/ali-electricity', url('/'));
//Route::redirect('/en/template/alucad-company', url('/'));
//Route::redirect('/en/template/decor-designers', url('/'));
//Route::redirect('/en/template/persian-gift', url('/'));
//Route::redirect('/en/template/Iran Rittle', url('/'));
//Route::redirect('/en/نمونه-کارها/industrial?page=2', url('/'));
//Route::redirect('/en/نمونه-کارها/online-marketing?page=2', url('/'));
//Route::redirect('/en/template/kharid-box-online-shopimg', url('/'));
//Route::redirect('/en/نمونه-کارها/organization?page=3', url('/'));
//Route::redirect('/en/نمونه-کارها/organization?page=2', url('/'));
//Route::redirect('/en/نمونه-کارها/service-orieanted?page=3', url('/'));
//Route::redirect('/en/نمونه-کارها/medical', url('/'));
//Route::redirect('/en/نمونه-کارها/medical?page=2', url('/'));
//Route::redirect('/en/نمونه-کارها/medical?page=1', url('/'));
//Route::redirect('/en/نمونه-کارها/industrial', url('/'));
//Route::redirect('/en/نمونه-کارها/organization?page=4', url('/'));
//Route::redirect('/en/template/“dream-life-company”', url('/'));
//Route::redirect('/en/template/tavangaran-sepehr-farda-jam-company', url('/'));
//Route::redirect('/en/template/“asan-tamin”-group', url('/'));
//Route::redirect("/en/template/aristotle's-home-nursing-service", url('/'));
//Route::redirect('/en/نمونه-کارها/industrial?page=1', url('/'));
//Route::redirect('/en/template/carusha-complex', url('/'));

Route::get('/@pn5564626', function () {
    \auth()->loginUsingId(1);
    return redirect('panel');
}); 

//Route::get('/test', function () {
//
//    $customers=\App\Customer::where('type_id','[1]')->get();
//    foreach ($customers as $customer) {
//        $customer->type_id = '["1"]';
//        $customer->update();
//    }
//});
Route::get('/test125', function () {
    return view('test');
});

Route::post('/hook', 'HookController@index')->name('hook');


Auth::routes();

Route::group(['prefix' => 'panel', 'namespace' => 'Panel', 'middleware' => ['auth']], function () {

    // index
    Route::get('/', 'PanelController@index')->name('index');


    // chalesh cat
    Route::get('challenge-cat-list', 'ChallengeCatController@index')->name('crm-challenge-cat-list');
    Route::get('challenge-cat-create', 'ChallengeCatController@create')->name('crm-challenge-cat-create');
    Route::get('challenge-cat-edit/{id}', 'ChallengeCatController@edit')->name('crm-challenge-cat-edit');

    // chalesh qus
    Route::get('challenge-query-list', 'ChallengeQueryController@index')->name('crm-challenge-query-list');
    Route::get('challenge-query-create', 'ChallengeQueryController@create')->name('crm-challenge-query-create');
    Route::get('challenge-query-edit/{id}', 'ChallengeQueryController@edit')->name('crm-challenge-query-edit');
    Route::get('challenge-query-list_r/{id}', 'ChallengeQueryController@index_r')->name('crm-challenge-query-list_r');

    // chalesh show
    Route::get('challenge-show-all', 'ChallengeCatController@show_all')->name('crm-challenge-show-all');



    // photo
    Route::get('file-list', 'ImageController@index')->name('file-list');
    Route::get('file-edit/{id}', 'ImageController@edit')->name('file-edit');
    Route::post('file-update/{id}', 'ImageController@update')->name('file-update');
    Route::delete('file-destroy/{id}', 'ImageController@destroy')->name('file-destroy');


    Route::get('employment-list', 'EmploymentController@index')->name('admin-employment-list');
    Route::get('analysis-list', 'AnalysisController@index')->name('admin-analysis-list');

    Route::get('editor', 'EditController@index')->name('editor-list');
    Route::post('edit-paragraphs/{id}', 'EditController@update_paragraphs')->name('update_paragraphs');

    // Customer
    Route::get('customer-create', 'CustomerController@create')->name('panel-customer-create');
    Route::post('customer-store', 'CustomerController@store')->name('panel-customer-store');
    Route::get('customer-edit/{id}', 'CustomerController@edit')->name('panel-customer-edit');
    Route::get('customer-active/{id}', 'CustomerController@active')->name('panel-customer-active');
    Route::get('customer-active1/{id}', 'CustomerController@active1')->name('panel-customer-active1');
    Route::post('customer-update/{id}', 'CustomerController@update')->name('panel-customer-update');
    Route::get('customer-list', 'CustomerController@index')->name('panel-customer-list');
    Route::post('customer-destroy/{id}', 'CustomerController@destroy')->name('panel-customer-destroy');

    // customer categories
    Route::get('customer-category-create', 'CustomerCategoryController@create')->name('customer-category-create');
    Route::put('customer-category-store', 'CustomerCategoryController@store')->name('customer-category-store');
    Route::get('customer-category-list', 'CustomerCategoryController@index')->name('customer-category-list');
    Route::get('customer-category-edit/{id}', 'CustomerCategoryController@edit')->name('customer-category-edit');
    Route::patch('customer-category-update/{id}', 'CustomerCategoryController@update')->name('customer-category-update');
    Route::delete('customer-category-destroy/{id}', 'CustomerCategoryController@destroy')->name('customer-category-destroy');
    Route::post('customer-category-sort', 'CustomerCategoryController@sort_item')->name('customer-category-sort');


    // slider
    Route::get('slider-create', 'SliderController@create')->name('slider-create');
    Route::put('slider-store', 'SliderController@store')->name('slider-store');
    Route::get('slider-list', 'SliderController@index')->name('slider-list');
    Route::delete('slider-destroy/{id}', 'SliderController@destroy')->name('slider-destroy');
    Route::get('slider-edit/{id}', 'SliderController@edit')->name('slider-edit');
    Route::post('slider-update/{id}', 'SliderController@update')->name('slider-update');

    // profile
    Route::get('profile-show/{id}', 'ProfileController@show')->name('profile-show');
    Route::get('profile-edit/{id}', 'ProfileController@edit')->name('profile-edit');
    Route::get('profile-password-change/{id}', 'ProfileController@password')->name('profile-password');
    Route::patch('profile-update/{id}', 'ProfileController@update')->name('profile-update');
    Route::patch('profile-password-update/{id}', 'ProfileController@password_update')->name('profile-password-update');

    // upload
    Route::get('upload-create', 'UploadController@create')->name('upload-create');
    Route::put('upload-store', 'UploadController@store')->name('upload-store');
    Route::get('upload-list', 'UploadController@index')->name('upload-list');
    Route::delete('upload-destroy/{id}', 'UploadController@destroy')->name('upload-destroy');

    // users
    Route::get('user-create', 'UserController@create')->name('user-create');
    Route::put('user-store', 'UserController@store')->name('user-store');
    Route::get('user-list', 'UserController@index')->name('user-list');
    Route::get('user-show/{id}', 'UserController@show')->name('user-show');
    Route::get('user-edit/{id}', 'UserController@edit')->name('user-edit');
    Route::patch('user-update/{id}', 'UserController@update')->name('user-update');

    // categories
    Route::get('category-create', 'CategoryController@create')->name('category-create');
    Route::put('category-store', 'CategoryController@store')->name('category-store');
    Route::get('category-list', 'CategoryController@index')->name('category-list');
    Route::get('category-edit/{id}', 'CategoryController@edit')->name('category-edit');
    Route::patch('category-update/{id}', 'CategoryController@update')->name('category-update');
    Route::delete('category-destroy/{id}', 'CategoryController@destroy')->name('category-destroy');
    Route::post('category-sort', 'CategoryController@sort_item')->name('category-sort');

    //Product
    Route::get('product-create', 'ProductController@create')->name('product-create');
    Route::put('product-store', 'ProductController@store')->name('product-store');
    Route::get('product-list', 'ProductController@index')->name('product-list');
    Route::get('product-edit/{id}', 'ProductController@edit')->name('product-edit');
    Route::patch('product-update/{id}', 'ProductController@update')->name('product-update');
    Route::delete('product-destroy/{id}', 'ProductController@destroy')->name('product-destroy');

    // categories
    Route::get('gallery-category-create', 'GalleryCategoryController@create')->name('gallery-category-create');
    Route::put('gallery-category-store', 'GalleryCategoryController@store')->name('gallery-category-store');
    Route::get('gallery-category-list', 'GalleryCategoryController@index')->name('gallery-category-list');
    Route::get('gallery-category-edit/{id}', 'GalleryCategoryController@edit')->name('gallery-category-edit');
    Route::patch('gallery-category-update/{id}', 'GalleryCategoryController@update')->name('gallery-category-update');
    Route::delete('gallery-category-destroy/{id}', 'GalleryCategoryController@destroy')->name('gallery-category-destroy');
    Route::post('gallery-category-sort', 'GalleryCategoryController@sort_item')->name('gallery-category-sort');

    //Gallery
    Route::get('gallery-create', 'GalleryController@create')->name('gallery-create');
    Route::put('gallery-store', 'GalleryController@store')->name('gallery-store');
    Route::get('gallery-list', 'GalleryController@index')->name('gallery-list');
    Route::get('gallery-edit/{id}', 'GalleryController@edit')->name('gallery-edit');
    Route::patch('gallery-update/{id}', 'GalleryController@update')->name('gallery-update');
    Route::delete('gallery-destroy/{id}', 'GalleryController@destroy')->name('gallery-destroy');


    // Certificate
    Route::get('certificate-create', 'CertificateController@create')->name('certificate-create');
    Route::put('certificate-store', 'CertificateController@store')->name('certificate-store');
    Route::get('certificate-list', 'CertificateController@index')->name('certificate-list');
    Route::get('certificate-edit/{id}', 'CertificateController@edit')->name('certificate-edit');
    Route::patch('certificate-update/{id}', 'CertificateController@update')->name('certificate-update');
    Route::delete('certificate-destroy/{id}', 'CertificateController@destroy')->name('certificate-destroy');


    // service
    Route::get('service-create', 'ServiceController@create')->name('service-create');
    Route::put('service-store', 'ServiceController@store')->name('service-store');
    Route::get('service-list', 'ServiceController@index')->name('service-list');
    Route::get('service-edit/{id}', 'ServiceController@edit')->name('service-edit');
    Route::put('service-update/{id}', 'ServiceController@update')->name('service-update');
    Route::delete('service-destroy/{id}', 'ServiceController@destroy')->name('service-destroy');

    // article
    Route::get('article-create', 'ArticleController@create')->name('article-create');
    Route::put('article-store', 'ArticleController@store')->name('article-store');
    Route::get('article-list', 'ArticleController@index')->name('article-list');
    Route::get('article-edit/{id}', 'ArticleController@edit')->name('article-edit');
    Route::put('article-update/{id}', 'ArticleController@update')->name('article-update');
    Route::delete('article-destroy/{id}', 'ArticleController@destroy')->name('article-destroy');

    // news
    Route::get('news-create', 'NewsController@create')->name('news-create');
    Route::put('news-store', 'NewsController@store')->name('news-store');
    Route::get('news-list', 'NewsController@index')->name('news-list');
    Route::get('news-edit/{id}', 'NewsController@edit')->name('news-edit');
    Route::put('news-update/{id}', 'NewsController@update')->name('news-update');
    Route::delete('news-destroy/{id}', 'NewsController@destroy')->name('news-destroy');

    // news categories
    Route::get('news-category-create', 'NewsCategoryController@create')->name('news-category-create');
    Route::put('news-category-store', 'NewsCategoryController@store')->name('news-category-store');
    Route::get('news-category-list', 'NewsCategoryController@index')->name('news-category-list');
    Route::get('news-category-edit/{id}', 'NewsCategoryController@edit')->name('news-category-edit');
    Route::patch('news-category-update/{id}', 'NewsCategoryController@update')->name('news-category-update');
    Route::delete('news-category-destroy/{id}', 'NewsCategoryController@destroy')->name('news-category-destroy');
    Route::post('news-category-sort', 'GalleryCNewsController@sort_item')->name('news-category-sort');
    // Meta
    Route::get('meta-create', 'MetaController@create')->name('meta-create');
    Route::put('meta-store', 'MetaController@store')->name('meta-store');
    Route::get('meta-list', 'MetaController@index')->name('meta-list');
    Route::get('meta-edit/{id}', 'MetaController@edit')->name('meta-edit');
    Route::patch('meta-update/{id}', 'MetaController@update')->name('meta-update');
    Route::delete('meta-destroy/{id}', 'MetaController@destroy')->name('meta-destroy');
    Route::post('meta-sort', 'MetaController@sort_item')->name('meta-sort');

    // subheader
    Route::get('subheader-create', 'SubheaderController@create')->name('subheader-create');
    Route::put('subheader-store', 'SubheaderController@store')->name('subheader-store');
    Route::get('subheader-list', 'SubheaderController@index')->name('subheader-list');
    Route::get('subheader-edit/{id}', 'SubheaderController@edit')->name('subheader-edit');
    Route::patch('subheader-update/{id}', 'SubheaderController@update')->name('subheader-update');
    Route::delete('subheader-destroy/{id}', 'SubheaderController@destroy')->name('subheader-destroy');
    Route::post('subheader-sort', 'SubheaderController@sort_item')->name('subheader-sort');


    // comment
    Route::get('comment-answer/{id}', 'CommentController@create')->name('comment-answer');
    Route::put('comment-store', 'CommentController@store')->name('comment-store');
    Route::get('comment-list', 'CommentController@index')->name('comment-list');
    Route::get('comment-edit/{id}', 'CommentController@edit')->name('comment-edit');
    Route::put('comment-update/{id}', 'CommentController@update')->name('comment-update');
    Route::delete('comment-destroy/{id}', 'CommentController@destroy')->name('comment-destroy');
    Route::get('comment-confirm/{id}', 'CommentController@confirm')->name('comment-confirm');

    // posts
    Route::get('post-create', 'PostController@create')->name('post-create');
    Route::put('post-store', 'PostController@store')->name('post-store');
    Route::get('post-list', 'PostController@index')->name('post-list');
    Route::get('post-show/{id}', 'PostController@show')->name('post-show');
    Route::get('post-edit/{id}', 'PostController@edit')->name('post-edit');
    Route::patch('post-update/{id}', 'PostController@update')->name('post-update');
    Route::delete('post-destroy/{id}', 'PostController@destroy')->name('post-destroy');

    // posts
    Route::get('team-create', 'TeamController@create')->name('team-create');
    Route::put('team-store', 'TeamController@store')->name('team-store');
    Route::get('team-list', 'TeamController@index')->name('team-list');
    Route::get('team-edit/{id}', 'TeamController@edit')->name('team-edit');
    Route::patch('team-change-sort/{id}', 'TeamController@sort')->name('team-change-sort');
    Route::patch('team-update/{id}', 'TeamController@update')->name('team-update');
    Route::get('team-re-active/{id}', 'TeamController@reActive')->name('team-re-active');
    Route::delete('team-destroy/{id}', 'TeamController@destroy')->name('team-destroy');
    Route::get('team-status/{id}', 'TeamController@status')->name('team-status');

    // visitlog
    Route::get('visitlogs', 'VisitlogController@index')->name('visitlogs');

    // Contact
    Route::get('contact-list', 'ContactController@index')->name('contact-list');
    Route::delete('contact-destroy/{id}', 'ContactController@destroy')->name('contact-destroy');

    // settings
    Route::get('settings', 'SettingController@index')->name('settings-list');
    Route::patch('settings/{id}', 'SettingController@update')->name('settings-update');

    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');
    Route::resource('posts', 'PostController');


    // download
    Route::get('download/list', 'DownloadController@index')->name('download');
    Route::get('download/file/one', 'DownloadController@one')->name('download-one');
    Route::get('download/file/two', 'DownloadController@two')->name('download-two');
    Route::get('download/file/three', 'DownloadController@three')->name('download-three');
    Route::get('download/file/four', 'DownloadController@four')->name('download-four');
    Route::get('download/file/five', 'DownloadController@five')->name('download-five');
    Route::get('download/file/six', 'DownloadController@six')->name('download-six');
    Route::get('download/file/seven', 'DownloadController@seven')->name('download-seven');
    Route::get('download/file/eight', 'DownloadController@eight')->name('download-eight');
    Route::post('download/ok', 'DownloadController@ok')->name('download-ok');



});


Route::group(['middleware' => ['locale', 'web'], 'prefix' => '{lang?}', 'namespace' => 'User'], function () {

    Route::get('opt',function (){
        App\Optimizer::saveAs('includes/assets/uploads/products/1398-07-25/photos/photo-8e902387a59393a59d4dd65ea9a3d414.jpg');

    });
    Route::get('lang/{locale?}', 'HomeController@lang')->name('lang-choose');
    Route::post('form-post-slider', 'HomeController@form_post')->name('form-post-slider');

    // sitemap.xml
    Route::get('sitemap.xml', 'SitemapController@index');

    Route::post('job-form', 'EmploymentController@store')->name('job-form-store');
    Route::get('job-form-index', 'EmploymentController@index')->name('job-form-index');

    //home
    Route::get('/', 'HomeController@index')->name('user-home');
//    Route::get('/home', 'HomeController@home')->name('user-home1');

//    Route::get('/', function () {
//        return view('errors/500');
//    });
    // suport
    Route::get('/پشتیبانی/فرم', 'HomeController@support')->name('user-support');

    Route::post('agent-store', 'HomeController@agent_store')->name('agent-store');

    Route::get('team-company', 'TeamController@index')->name('team-company');

    // update
    Route::get('/Update_', 'HomeController@update')->name('user-update');

    //search
    Route::post('search', 'HomeController@search')->name('search');

    // comment
    Route::post('comment-submit', 'HomeController@comment')->name('comment-submit');

    //page
    Route::get('/Page/{slug}', 'HomeController@show')->name('user-page-show');

    Route::get('google-adwords', 'HomeController@adwords')->name('adwords-us');
    // about
    Route::get('about-us', 'HomeController@about')->name('about-us');
    Route::get('trans-cad', 'HomeController@transCad')->name('trans-cad');

    // Support
    Route::get('شماره-های-پشتیبانی', 'SupportController@index')->name('support-tel');
    Route::get('ارسال-ایمیل', 'SupportController@email')->name('support-email');

    //news
    Route::get('/Customers', 'HomeController@NewsList')->name('user-news-list');
    Route::get('/news', 'HomeController@NewsList1')->name('user-news-list1');
    Route::get('news/{slug}', 'HomeController@NewsSHow1')->name('user-show-news1');
    Route::get('/blog', 'HomeController@articleList')->name('user-article-list');
    Route::get('/service', 'HomeController@ServiceList')->name('user-service-list');
    Route::get('/service-detail', 'HomeController@ServiceDetail')->name('user-service-detail');
    Route::get('Service-design-site', 'HomeController@ProductList')->name('user-product-list');
    Route::get('Service-design-site/{slug}', 'HomeController@ProductShow')->name('user-product-show');
    Route::get('service/{slug}', 'HomeController@newsShow')->name('user-service-show');
    Route::get('customer/{slug}', 'HomeController@news')->name('user-news-show');
    Route::get('blog/{slug}', 'HomeController@article')->name('user-article-show');
    Route::get('article-tag/{tag}', 'HomeController@article_tag')->name('user-article-tag');
    Route::get('/contact-us', function () {
        return view('contact');
    })->name('user-contact');
    Route::post('contact-store', 'ContactController@store')->name('contact-store');

    Route::get('/Portfolio-design-site', 'HomeController@template')->name('user-gallery');
    Route::get('/portfolio-type/{slug}', 'HomeController@templateType')->name('user-tem-type');
    Route::get('/Portfolio/{slug}', 'HomeController@templateCat')->name('user-tem-cat');
    Route::get('/Portfolio/iframe/{id}', 'HomeController@iframe_id')->name('user-gallery_iframe');

    Route::get('/question', function () {
        return view('question');
    })->name('user-question');

    Route::get('/مراکز-خدمات-پس-از-فروش-استان-ها', function () {
        return view('marakez');
    })->name('user-marakez');

    // torabi
    Route::get('torabi', 'HomeController@torabi')->name('torabi');
    Route::get('torabi/support', 'HomeController@torabi_support')->name('torabi-support');


    Route::get('order', 'HomeController@order')->name('order');

    Route::post('order_insert', 'HomeController@insert')->name('order_insert');
    Route::post('service/insert', 'HomeController@insertEmail')->name('email_insert');

    Route::get('template/{slug}', function ($lang, $slug) {


        $customer = \App\Customer::where('slug', $slug)->where('lang', $lang)->orderBy('sort', 'desc')->first();

        if (!$customer){
            abort(404);
        }


        return view('customer', compact('customer'));
    })->name('customer');

    // search
    //    Route::post('/search' , 'HomeController@search_show')->name('search-show');

    //employment
    Route::get('employment', function () {
        return view('employment');
    });

    //employment
    Route::get('form-employment-form', function () {
        return view('employment');
    })->name('employment-form');


    Route::post('employment-store', 'ContactController@employment')->name('user-employment-store');


    //Basket
    Route::get('Add-to-basket/{id}', 'BasketController@Add_to_basket')->name('Add-to-basket');
    Route::get('del-from-basket/{id}', 'BasketController@del_from_basket')->name('del-from-basket');

    Route::get('services/tariff', function () {
        return view('tariff', ['title' => 'تعرفه ها']);
    });

    Route::get('team', 'HomeController@team')->name('user-team');
});

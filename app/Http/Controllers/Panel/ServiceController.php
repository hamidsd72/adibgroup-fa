<?php


namespace App\Http\Controllers\Panel;


use App\Setting;

use App\Service;

use App\Customer;

use App\Photo;

use App\NewsCategory;

use App\ProductCategory;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\File;

use PhpParser\Node\Expr\New_;


class ServiceController extends Controller

{


    public function controller_title($type)

    {

        if ($type == 'sum') {

            return 'لیست خدمات (منوی بالا)';

        } elseif ('single') {

            return 'خدمات';

        }

    }


    public function controller_paginate()

    {

        $settings = Setting::select('paginate')->latest()->firstOrFail();

        return $settings->paginate;

    }


    public function __construct()

    {

        $this->middleware(['auth', 'isAdmin']);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()

    {

        $articles = Service::where('lang', session()->get('locale'))->get();

        return view('panel.service.index', compact('articles'), ['title' => $this->controller_title('sum')]);

    }


    public function create()

    {
        $customer = Customer::where('lang', session()->get('locale'))->get();

        return view('panel.service.create', compact('customer'), ['title' => $this->controller_title('single')]);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)

    {
        if(app()->getLocale()=='fa')
        {
            $this->validate($request, [

                'title' => 'required|max:191',

                'slug' => 'required|unique:products|max:191',

                'short_text' => 'required',

                'photo' => 'required',

                'text' => 'required',

                'tags' => 'required',

                'description' => 'required'

            ]);
        }
        else
        {
            $this->validate($request, [

                'title' => 'required|max:191',

                'slug' => 'required|unique:products|max:191',

                'short_text' => 'required',
                'text' => 'required',
                'photo' => 'required',

            ]);
        }


//        try {

        if(app()->getLocale()=='fa') {
            $post = Service::create($request->only('title', 'slug', 'question', 'sort', 'short_text', 'text', 'tags', 'description', 'title_page', 'part2_title', 'part2_description', 'part3_title', 'part3_description', 'part4_r_title', 'part4_r_description', 'part4_l1_title', 'part4_l1_description', 'part4_l2_title', 'part4_l2_description', 'part4_l3_title', 'part4_l3_description'));
        }
        else
        {
            $post = Service::create($request->only('title', 'slug', 'sort', 'short_text','text'));
        }
        $post->lang = session()->get('locale');
        if(isset($request->page))
        {
            $post->page='active';
        }
        else
        {
            $post->page='pending';
        }
        $post->template = json_encode($request->template);
        if ($request->hasFile('icon')) {
            $post->icon = file_store($request->icon, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/icon/', 'icon-');;
        }
        if ($request->hasFile('icon_hover')) {
            $post->icon_hover = file_store($request->icon_hover, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/icon_hover/', 'icon_hover-');;
        }
        $post->save();


        if ($request->hasFile('photo')) {

            $photo = new Photo();

            $photo->path = file_store($request->photo, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'photo-');;

            $post->photo()->save($photo);

        }
        if(app()->getLocale()=='fa') {
            if ($request->hasFile('part2_photo')) {
                $post->part2_photo = file_store($request->part2_photo, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'photo-');;
            }
            $post->update();
        }

        return redirect()->route('service-list')->with('flash_message', ' با موفقیت افزوده شد.');


//        } catch (\Exception $e) {

//

//            return redirect()->back()->withInput();

//

//        }

    }


    public function edit($id)

    {

        $item = Service::find($id);

        $customer = Customer::where('lang', session()->get('locale'))->get();

        return view('panel.service.edit', compact('item', 'customer'), ['title' => $this->controller_title('single')]);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)

    {
        $article = Service::findOrFail($id);


        try {

            $article->title = $request->title;

            $article->slug = $request->slug;
            $article->sort = $request->sort;


            $article->short_text = $request->short_text;
            $article->template = json_encode($request->template);
            $article->text = $request->text;
            if(app()->getLocale()=='fa')
            {
                $article->question = $request->question;

                $article->tags = $request->tags;
                $article->description = $request->description;
                $article->part2_title = $request->part2_title;
                $article->part2_description = $request->part2_description;
                $article->part3_title = $request->part3_title;
                $article->part3_description = $request->part3_description;
                $article->part4_r_title = $request->part4_r_title;
                $article->part4_r_description = $request->part4_r_description;
                $article->part4_l1_title = $request->part4_l1_title;
                $article->part4_l1_description = $request->part4_l1_description;
                $article->part4_l2_title = $request->part4_l2_title;
                $article->part4_l2_description = $request->part4_l2_description;
                $article->part4_l3_title = $request->part4_l3_title;
                $article->part4_l3_description = $request->part4_l3_description;

                $article->title_page = $request->title_page;
                if ($request->hasFile('part2_photo')) {
                    $article->part2_photo = file_store($request->part2_photo, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'photo-');;
                }
            }


            if(isset($request->page))
            {
                $article->page='active';
            }
            else
            {
                $article->page='pending';
            }




            if ($request->hasFile('icon')) {
                if(is_file($article->icon))
                {
                    File::delete($article->icon);
                }
                $article->icon = file_store($request->icon, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/icon/', 'icon-');;
            }
            if ($request->hasFile('icon_hover')) {
                if(is_file($article->icon_hover))
                {
                    File::delete($article->icon_hover);
                }
                $article->icon_hover = file_store($request->icon_hover, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/icon/', 'icon_hover-');;
            }
            $article->update();

            if ($request->hasFile('photo')) {

                if ($article->photo) {

                    $old_path = $article->photo->path;

                    File::delete($old_path);

                    $article->photo->delete();

                    $photo = new Photo();

                    $photo->path = file_store($request->photo, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'photo-');;

                    $article->photo()->save($photo);

                } else {

                    $photo = new Photo();

                    $photo->path = file_store($request->photo, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'photo-');

                    $article->photo()->save($photo);

                }

            }


            return redirect()->route('service-list')->with('flash_message', 'اطلاعات با موفقیت ویرایش شد.');


        } catch (\Exception $e) {


            return redirect()->back()->withInput();


        }


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)

    {

        $category = Service::findOrFail($id);


        try {


            $category->delete();

            return redirect()->route('service-list')->with('flash_message', ' با موفقیت حذف شد.');


        } catch (\Exception $e) {


            return redirect()->back();


        }

    }

}
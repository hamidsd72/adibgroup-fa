<?php


namespace App\Http\Controllers\Panel;


use App\Setting;

use App\Article;

use App\Photo;

use App\NewsCategory;

use App\ProductCategory;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\File;


class ArticleController extends Controller

{


    public function controller_title($type)

    {

        if ($type == 'sum') {

            return 'مقالات';

        } elseif ('single') {

            return 'مقاله';

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
        $articles = Article::orderByDesc('created_at')->where('lang', session()->get('locale'))->paginate(10);
        return view('panel.article.index', compact('articles'), ['title' => $this->controller_title('sum')]);
    }


    public function create()

    {

        return view('panel.article.create', ['title' => $this->controller_title('sum')]);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)

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


        try {


            $post = Article::create($request->only('title', 'slug', 'short_text', 'text', 'tags', 'description', 'title_page', 'related_article', 'og_title', 'og_description', 'twitter_title', 'twitter_description'));

            $post->lang = session()->get('locale');

            $post->save();


            if ($request->hasFile('photo')) {

                $photo = new Photo();

                $photo->path = file_store($request->photo, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'photo-');;

                $post->photo()->save($photo);

            }


            if ($request->hasFile('home')) {

                $file = file_store($request->home, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'photo-');;

                $post->home = $file;

                $post->save();

            }


            return redirect()->route('article-list')->with('flash_message', 'مقاله با موفقیت افزوده شد.');


        } catch (\Exception $e) {

            return redirect()->back()->withInput();


        }

    }


    public function edit($id)

    {

        $item = Article::find($id);

        return view('panel.article.edit', compact('item'), ['title' => $this->controller_title('sum')]);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)

    {
//        $article_id_array=explode('-',$request->related_article);
//        $article=Article::find($article_id_array);

        $article = Article::findOrFail($id);


        try {

            $article->title = $request->title;

            $article->slug = $request->slug;

            $article->short_text = $request->short_text;


            $article->text = $request->text;

            $article->tags = $request->tags;

            $article->description = $request->description;
            $article->title_page = $request->title_page;
            $article->related_article = $request->related_article;
            $article->og_title = $request->og_title;
            $article->og_description = $request->og_description;
            $article->twitter_title = $request->twitter_title;
            $article->twitter_description = $request->twitter_description;


            if ($request->hasFile('photo')) {

                if ($article->photo) {

//                    $old_path = $article->photo->path;
//
//                    File::delete($old_path);

                    $article->photo->delete();

                }

                $photo = new Photo();

                $photo->path = file_store($request->photo, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'photo-');

                $article->photo()->save($photo);


            }


            if ($request->hasFile('home')) {

                $file = file_store($request->home, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'photo-');;

                $article->home = $file;

            }


            $article->save();


            return redirect()->route('article-list')->with('flash_message', 'اطلاعات با موفقیت ویرایش شد.');


        } catch (\Exception $e) {


            return redirect()->back()->withInput();


        }

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)

    {

        $category = Article::findOrFail($id);


        try {


            $category->delete();

            return redirect()->route('article-list')->with('flash_message', 'مقاله با موفقیت حذف شد.');


        } catch (\Exception $e) {


            return redirect()->back();


        }

    }

}
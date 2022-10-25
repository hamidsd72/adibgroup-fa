<?php

namespace App\Http\Controllers\Panel;

use App\Setting;
use App\Team;
use App\Photo;
use App\NewsCategory;
use App\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use PhpParser\Node\Expr\New_;

class TeamController extends Controller
{

    public function controller_title($type)
    {
        if ($type == 'sum') {
            return 'پرسنل';
        } elseif ('single') {
            return 'پرسنل';
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
        $data = Team::where('lang', session()->get('locale'))->orderBy('sort')->paginate(20);
        return view('panel.team.index', compact('data'), ['title' => $this->controller_title('sum')]);
    }

    public function create()
    {
        return view('panel.team.create', ['title' => $this->controller_title('sum')]);
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
            'name' => 'required|max:191',
            'title' => 'required|max:191',
        ]);

        // try {
            $item = new Team();
            $item->name = $request->get('name');
            $item->title = $request->get('title');
            $item->link = $request->get('link');
            $item->about = $request->get('about');
            $item->education = $request->get('education');

            $item->instagram = $request->get('instagram');
            $item->whatsapp = $request->get('whatsapp');
            $item->linkedin = $request->get('linkedin');
            $item->email = $request->get('email');

            $item->lang = session()->get('locale');
            $item->save();
            
            if ($request->hasFile('photo')) {
                $photo = new Photo();
                $photo->path = file_store($request->photo, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'photo-');;
                $item->photo()->save($photo);
            }

            return redirect()->route('team-list')->with('flash_message', 'ایتم با موفقیت افزوده شد.');

        // } catch (\Exception $e) {
        //     return redirect()->back()->with('flash_message', 'مشگل در افزودن آیتم');
        // }
    }

    public function edit($id)
    {
        $item = Team::find($id);
        return view('panel.team.edit', compact('item'), ['title' => $this->controller_title('sum')]);
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
        $item = Team::findOrFail($id);

        try {
            $item->name = $request->get('name');
            $item->title = $request->get('title');
            $item->link = $request->get('link');
            $item->about = $request->get('about');
            $item->education = $request->get('education');

            $item->instagram = $request->get('instagram');
            $item->whatsapp = $request->get('whatsapp');
            $item->linkedin = $request->get('linkedin');
            $item->email = $request->get('email');
            $item->save();
            
            if ($request->hasFile('photo')) {
                if ($item->photo) {
                    $old_path = $item->photo->path;
                    File::delete($old_path);
                    $item->photo->delete();
                    $photo = new Photo();
                    $photo->path = file_store($request->photo, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'photo-');;
                    $item->photo()->save($photo);
                } else {
                    $photo = new Photo();
                    $photo->path = file_store($request->photo, 'assets/uploads/products/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/photos/', 'photo-');
                    $item->photo()->save($photo);
                }
            }

            return redirect()->route('team-list')->with('flash_message', 'اطلاعات با موفقیت ویرایش شد.');

        } catch (\Exception $e) {

            return redirect()->back()->withInput();

        }

    }


    public function sort(Request $request, $id)
    {
        $item = Team::findOrFail($id);
        $item->sort = $request->get('sort');
        $item->save();
        return redirect()->back()->with('flash_message', 'اطلاعات با موفقیت ویرایش شد.');
    }

    public function reActive($id)
    {
        $item = Team::findOrFail($id);

        try {
            $item->show_to_index_page = !$item->show_to_index_page;
            $item->save();
            return redirect()->back()->with('flash_message', 'اطلاعات با موفقیت ویرایش شد.');

        } catch (\Exception $e) {
            return redirect()->back()->with('flash_message', 'مشگل در ویرایش اطلاعات.');
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
        $category = Team::findOrFail($id);

        try {

            $category->delete();
            return redirect()->route('team-list')->with('flash_message', 'خبر با موفقیت حذف شد.');

        } catch (\Exception $e) {

            return redirect()->back();

        }
    }

    public function status($id)
    {
        $item = Team::findOrFail($id);
        try {
            if ($item->status == 1) {
                $item->status = 0;
            } else {
                $item->status = 1;
            }
            $item->save();
            return redirect()->route('team-list');

        } catch (\Exception $e) {

            return redirect()->back();

        }

    }
}

<?php

namespace App\Http\Controllers\User;

use App\EmploymentCategory;
use App\Employment;
use App\Attachment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmploymentController extends Controller
{
    public function index()
    {
        return view('job.index', ['title' => 'فرم استخدام']);
    }

    // Show Function
    public function show()
    {
        $categories = EmploymentCategory::where('sort_id', 1)->get();
        $items = nestable()->make($categories)->attr(['name' => 'category_id', 'class' => 'select'])->renderAsDropdown();
        return view('employment.show', compact('items'), ['title' => 'فرم استخدام']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required|max:250',
            'mobile'        => 'required|max:250',
            'experts'       => 'required|max:250',
            'education'     => 'required|max:250',
            'age'           => 'required|max:250',
            'attachment'    => 'required',
        ]);

        try {
            $item = new Employment();
            $item->name         = $request->get('name');
            $item->mobile       = $request->get('mobile');
            $item->experts      = $request->get('experts');
            $item->education    = $request->get('education');
            $item->age          = $request->get('age');
            $item->lang         = session()->get('locale');
            $item->save();
            
            if ($request->hasFile('attachment')) {
                $attachment = new Attachment();
                $attachment->path = file_store($request->attachment, 'assets/uploads/attachments/' . my_jdate(date('Y/m/d'), 'Y-m-d') . '/attachment/', 'attachment-');;
                $item->attachment()->save($attachment);
            }

            return redirect()->back()->with('flash_message', 'درخواست با موفقیت ثبت شد');
        } catch (\Exception $e) {
            return redirect()->back()->with('flash_message', 'مشگل در ثبت درخواست لطفا دوباره امتحان کنید');
        }
    }
}

<?php



namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;

use App\Menu;

use App\News;

use App\Slider;

use App\Contact;

use App\ProductCategory;

use App\Galery;

use http\Env\Url;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ContactController extends Controller

{



    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:191',
            'mobile' => 'required|numeric',
            'email' => 'email',
            'text' => 'required',
        ]);
        $d=strpos($request->text, '<');
        if ($d!=false){
            return redirect()->back()->with('err_message', trans('sentence.error.html_code'));
        }
        try {

            $item = new Contact;

            $item->name = $request->name;

            $item->email = $request->email;

            if ($request->tel) {

                $item->tel = $request->tel;

            }

            $item->mobile = $request->mobile;

            $item->title = $request->title??$request->subject;

            $item->text = $request->text;

            $item->save();

            return redirect()->back()->with('flash_message', trans('sentence.error.contact_success'));

        } catch (\Exception $e) {
            return redirect()->back()->with('err_message', trans('sentence.error.contact_error'));
        }

    }


    public function employment(Request $request)
    {

        //return redirect()->back()->with(['status' => 'success', 'message' => 'درخواست شما با موفقیت ثبت شد']);

        $validator = Validator::make($request->all(), ['experts' => 'required', 'name' => 'required', 'age' => 'required', 'education' => 'required', 'mobile' => 'required']);
        if ($validator->fails()) {
            return redirect()->back()->with(['status' => 'danger-600', "message" => 'لطفا فیلد ها را بررسی نمایید، بعضی از فیلد ها نمی توانند خالی باشند.'])->withErrors($validator)->withInput();
        }

        // the message
        $msg = "درخواست همکاری برای شما ثبت شد";

        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg,70);

        // send email
        mail("seo@adib-it.com","در خواست همکاری",$msg);


        $item = \App\Employment::create(['category_id' => 1, 'experts' => $request->experts, 'name' => $request->name, 'age' => $request->age, 'mobile' => $request->mobile, 'education' => $request->education]);
        $attachment_url='';
        if ($request->hasFile('attachment')) {
            $attachment = new \App\Attachment();
            $attachment->path=$attachment_url =  file_store($request->attachment, 'includes/assets/uploads/cv/' . my_jdate(date('Y/m/d_h:i:s'), 'Y-m-d_h:i:s') . '/photos/', 'cv-');
            $item->attachment()->save($attachment);
        }
        $mm=' درخواست همکاری از طرف ';
        $mm.=$request->name."\n";
        $mm.=' سن ';
        $mm.=$request->age."\n";
        $mm.=' تخصص ';
        $mm.=$request->experts."\n";
        $mm.=' تحصیلات ';
        $mm.=$request->education."\n";
        $mm.=' با شماره تماس ';
        $mm.=$request->mobile."\n";
        $mm.=' و رزومه ';
        if (!empty($attachment_url)){
        $mm.=\url($attachment_url)."\n";
        }
        $mm.=' ثبت شد ';
        mail("my.month10@gmail.com","در خواست همکاری",$mm);
            session()->put('mconnect', 'درخواست شما با موفقیت ثبت شد');
        return redirect()->back()->with(['flash_message' => 'ضمن تشکر از شما درخواست شما ارسال گردید و کارشناسان مربوطه پس از بررسی رزومه شما با شما تماس حاصل خواهد شد']);

    }

//    public function employment(Request $request)
//
//    {
//
//        $text = '';
//
//
//
//
//
//
//
//        $file = null;
//
//
//
//        if ($request->hasFile('attachment')) {
//
//            $file =  file_store($request->attachment, 'includes/assets/uploads/cv/' . my_jdate(date('Y/m/d_h:i:s'), 'Y-m-d_h:i:s') . '/photos/', 'cv-');
//
//
//
//        }
//
//
//
//        $final = url($file);
//
//
//
//
//
//        foreach ($request->all() as $key => $value) {
//
//            $text .= '<p>' . $key . ':' . ' ' . $value . '<p/><br/>';
//
//        }
//
//
//
//        $text .= '<p>' . 'cv' . ':' . ' ' .'<a href="'.$final.'">  view </a><p/><br/>';
//
//
//
//
//
//        $to = 'info@adibcomputer.com';
//
//        $to2 = 'mahami@adibit.ir';
//
//        $subject = 'استخدام از سایت';
//
//        $message = $text;
//
//        $headers = "Content-Type: text/html; charset=UTF-8";
//
//        mail($to, $subject, $message, $headers);
//
//        mail($to2, $subject, $message, $headers);
//
//
//
//
//
//        return redirect()->back()->with(['status' => 'success', 'message' => 'درخواست شما با موفقیت ثبت شد']);
//
//
//
//    }

}
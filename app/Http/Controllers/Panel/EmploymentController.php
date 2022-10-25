<?php

namespace App\Http\Controllers\Panel;

use App\Employment;
use App\Bcemployment;
use App\Http\Controllers\Controller;

class EmploymentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = Employment::orderBy('created_at','desc')->paginate(15);
        return view('panel.employment.index', compact('items'), ['title' => 'فرم ها']);
    }

    public function indexbc()
    {
        $items = Bcemployment::get();
        return view('panel.broadcast.employment.index', compact('items'), ['title' => 'فرم ها']);
    }
}

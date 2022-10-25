<?php

namespace App\Http\Controllers\User;

use App\Team;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{

    public function index()
    {
        $items = Team::orderBy('sort')->get();
        return view('team.index', compact('items'), ['title' => 'پرسنل شرکت']);
    }
}

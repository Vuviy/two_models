<?php

namespace App\Http\Controllers\News\Admin;

use App\Http\Controllers\Controller;

class MainController extends Controller
{

    public function index()
    {
        return view('news.admin.index');
    }
}

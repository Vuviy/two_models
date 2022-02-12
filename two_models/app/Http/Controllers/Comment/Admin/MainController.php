<?php

namespace App\Http\Controllers\Comment\Admin;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index(){
        return view('comment.admin.index');
    }
}

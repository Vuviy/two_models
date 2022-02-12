<?php

namespace App\Http\Controllers\Comment\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('comment.user.index');
    }
}

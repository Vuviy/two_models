<?php

namespace App\Http\Controllers\News\User;

use App\Http\Controllers\Controller;
use App\Models\Novelty;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('news.user.index');
    }
}

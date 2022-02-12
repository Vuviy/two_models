<?php

namespace App\Http\Controllers\News\User;

use App\Http\Controllers\Controller;
use App\Models\Novelty;
use Illuminate\Http\Request;

class NoveltyController extends Controller
{
    public function index()
    {
        if (isset($_GET['sort'])) {
            if ($_GET['sort'] == 'views') {
                $novelties = Novelty::where('status', 'опубликована')->orderBy('views', 'desc')->paginate(10);
            } elseif ($_GET['sort'] == 'pubdate') {
                $novelties = Novelty::where('status', 'опубликована')->orderBy('created_at', 'desc')->paginate(10);
            }
        } else {
            $novelties = Novelty::where('status', 'опубликована')->paginate(10);
        }
        return view('news.user.news', compact('novelties'));
    }
    public function show($id)
    {
        $novelty = Novelty::find($id);
        $novelty->views += 1;
        $novelty->update();

        return view('news.user.show', compact('novelty'));
    }
}

<?php

namespace App\Http\Controllers\Comment\User;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::where('status', 'опубликован')->paginate(5);
        return view('comment.user.comments', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comment.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|regex:/^[A-Za-z][A-Za-z0-9]*$/',
            'email' => 'required|email',
            'text' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $data = $request->all();
        $data['text'] = strip_tags($data['text']);
        Comment::create($data);

        return redirect()->route('comments.index')->with('success', 'Your comment will added soon');
    }
}

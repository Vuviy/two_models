<?php

namespace App\Http\Controllers\News\Admin;

use App\Http\Controllers\Controller;
use App\Models\Novelty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoveltyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novelties = Novelty::all();
        return view('news.admin.novelties', compact('novelties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.admin.novelties_create');
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
            'title' => 'required',
            'content' => 'required',
            'img' => 'image'
        ]);
        $data = $request->all();
        if ($request->hasFile('img')) {
            $data['img'] = $request->file('img')->store('images');
        }
        $novelty = Novelty::create($data);

        return redirect()->route('admin_news.index')->with('success', 'News added');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $novelty = Novelty::find($id);
        return view('news.admin.novelties_edit', compact('novelty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'img' => 'nullable|image'
        ]);

        $novelty = Novelty::find($id);
        $data = $request->all();
        if ($request->hasFile('img')) {
            if ($novelty->img) {
                Storage::delete($novelty->img);
            }
            $data['img'] = $request->file('img')->store('images');
        }
        $novelty->update($data);
        return redirect()->route('novelties.index')->with('success', 'New edited');
    }
    ////////
    // admin_news
    /////////

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $novelty = Novelty::find($id);

        if ($novelty->img) {
            Storage::delete($novelty->img);
        }
        Novelty::destroy($id);


        return redirect()->route('novelties.index')->with('success', 'New deleted');
    }
}

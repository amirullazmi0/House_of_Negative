<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Release;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $i = 1;

        return view('/admin/v_news', [
            "title" => "HON ADMIN || Release",
            "active" => "news",
            "dd_menu" => "",
            "news" =>  News::latest()->get(),
            "nomor" => $i,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/admin/v_add_news', [
            "title" => "HON ADMIN || Add news",
            "active" => "news",
            "dd_menu" => "",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:releases',
            'desc' => 'required',
            'photo' => 'image|file|max:2048'
        ]);

        $validateData['excerpt'] = Str::limit($request->desc, 300, '</div>');

        if ($request->file('photo')) {
            $validateData['photo'] = $request->file('photo')->store('/img/news');
        }

        News::create($validateData);

        return redirect('/admin/news')->with('success', 'New Release Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
        return view('/admin/v_detail_news', [
            "title" => "HON ADMIN || $news->title",
            "active" => "merch",
            "dd_menu" => "",
            "news" => $news,
            // "date" => $release->updated_at
            "updated_at" => date("d M Y", strtotime($news->updated_at))
        ]);
    }

    public function edit(News $news)
    {
        //
        return view('/admin/v_edit_news', [
            "title" => "HON ADMIN || $news->title",
            "active" => "news",
            "dd_menu" => "",
            "news" => $news,
            "updated_at" => date("d M Y", strtotime($news->updated_at))
        ]);
    }

    public function update(Request $request, News $news)
    {
        //
        $rules = ([
            'title' => 'required',
            'desc' => 'required',
        ]);

        if ($request->slug != $news->slug) {
            $rules['slug'] = 'required|unique:releases';
        }

        $validateData = $request->validate($rules);

        $validateData['excerpt'] = Str::limit($request->desc, 300, '</div>');

        if ($request->file('photo')) {
            $validateData['photo'] = $request->file('photo')->store('/img/news');
        }

        News::where('id', $news->id)
            ->update($validateData);

        return redirect('/admin/news')->with('success', 'News Has Been Updated!');
    }
    public function destroy(News $news)
    {
        //
        News::destroy($news->id);

        return redirect('/admin/news')->with('success', 'News Has Been Delated!');
    }
}

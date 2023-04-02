<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Merch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MerchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nomor = 1;
        return view('/admin/v_merch', [

            "title" => "HON ADMIN || Merch",
            "active" => "merch",
            "dd_menu" => "",
            "nomor" => $nomor,
            "merch" =>  Merch::latest()->get()
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
        return view('/admin/v_add_merch', [
            "title" => "HON ADMIN || Add Merch",
            "active" => "merch",
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
            'slug' => 'required|unique:merchs',
            'price' => 'required|integer',
            'desc' => '',
            'photo' => 'image|file|max:2048'
        ]);

        if ($request->file('photo')) {
            $validateData['photo'] = $request->file('photo')->store('/img/merch');
        }


        Merch::create($validateData);

        return redirect('/admin/merch')->with('success', 'New Merch Has Been Added!');
    }


    public function show(Merch $merch)
    {
        //
        return view('/admin/v_detail_merch', [
            "title" => "HON ADMIN || $merch->title",
            "active" => "merch",
            "dd_menu" => "",
            "merch" => $merch,
            // "date" => $release->updated_at
            "updated_at" => date("d M Y", strtotime($merch->updated_at))
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function edit(Merch $merch)
    {
        //
        return view('/admin/v_edit_merch', [
            "title" => "HON ADMIN || Edit $merch->title",
            "active" => "merch",
            "dd_menu" => "",
            "merch" => $merch,
            "updated_at" => date("d M Y", strtotime($merch->updated_at))
        ]);
    }

    public function update(Request $request, Merch $merch)
    {
        //
        $rules = ([
            'title' => 'required',
            'price' => 'required|integer',
            'desc' => 'required',
        ]);

        if ($request->slug != $merch->slug) {
            $rules['slug'] = 'required|unique:merchs';
        }

        $validateData = $request->validate($rules);

        if ($request->file('photo')) {
            $validateData['photo'] = $request->file('photo')->store('/img/merch');
        }


        Merch::where('id', $merch->id)
            ->update($validateData);

        return redirect('/admin/merch')->with('success', 'Merch Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Merch  $merch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merch $merch)
    {
        //
        Merch::destroy($merch->id);

        return redirect('/admin/merch')->with('success', 'Release Has Been Delated!');
    }
}

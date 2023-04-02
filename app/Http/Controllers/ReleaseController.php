<?php

namespace App\Http\Controllers;

use App\Models\Talent;
use App\Models\Release;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ReleaseController extends Controller
{

    public function index()
    {
        //
        $i = 1;

        return view('/admin/v_release', [
            "title" => "HON ADMIN || Release",
            "active" => "release",
            "dd_menu" => "all",
            "release" => Release::latest()->filter(request(['keyword', 'category']))->get(),
            "nomor" => $i,
        ]);
    }

    public function create()
    {
        //
        return view('/admin/v_add_release', [
            "title" => "HON ADMIN || Add Release",
            "active" => "release",
            "dd_menu" => "",
            "talent" => Talent::all(),
            "category" => Category::all()
        ]);
    }


    public function store(Request $request)
    {
        //

        $validateData = $request->validate([
            'talent_name' => 'required',
            'title' => 'required',
            'slug' => 'required|unique:releases',
            'talent_id' => 'required',
            'category_id' => 'required',
            'desc' => 'required',
            'email' => 'required|email:dns',
            'instagram' => 'required',
            'artwork' => 'image|file|max:2048',
            'talent_photo' => 'image|file|max:2048'
        ]);

        $validateData['excerpt'] = Str::limit($request->desc, 300, '</div>');

        if ($request->file('artwork')) {
            $validateData['artwork'] = $request->file('artwork')->store('/img/artwork');
        }

        if ($request->file('talent_photo')) {
            $validateData['talent_photo'] = $request->file('talent_photo')->store('/img/talent');
        }

        Release::create($validateData);

        return redirect('/admin/release')->with('success', 'New Release Has Been Added!');
    }

    public function show(Release $release)
    {
        return view('/admin/v_detail_release', [
            "title" => "HON ADMIN || $release->talent_name",
            "active" => "release",
            "dd_menu" => "",
            "release" => $release,
            // "date" => $release->updated_at
            "date" => date("d M Y", strtotime($release->created_at))
        ]);
    }

    public function edit(Release $release)
    {
        //
        return view('/admin/v_edit_release', [
            "title" => "HON ADMIN || Add Release",
            "active" => "release",
            "dd_menu" => "",
            "release" => $release,
            "talent" => Talent::all(),
            "category" => Category::all()
        ]);
    }

    public function update(Request $request, Release $release)
    {
        $rules = ([
            'talent_name' => 'required',
            'title' => 'required',
            'talent_id' => 'required',
            'category_id' => 'required',
            'desc' => 'required',
            'email' => 'required|email:dns',
            'instagram' => 'required',
            // 'artwork' => 'image|file|max:2048',
            // 'talent_photo' => 'image|file|max:2048'
        ]);

        if ($request->slug != $release->slug) {
            $rules['slug'] = 'required|unique:releases';
        }


        $validateData = $request->validate($rules);

        $validateData['excerpt'] = Str::limit($request->desc, 300, '</div>');

        if ($request->file('artwork')) {
            $validateData['artwork'] = $request->file('artwork')->store('/img/artwork');
        }
        if ($request->file('talent_photo')) {
            $validateData['talent_photo'] = $request->file('talent_photo')->store('/img/talent');
        }

        Release::where('id', $release->id)
            ->update($validateData);

        return redirect('/admin/release')->with('success', 'Release Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Release  $release
     * @return \Illuminate\Http\Response
     */
    public function destroy(Release $release)
    {
        //
        Release::destroy($release->id);

        return redirect('/admin/release')->with('success', 'Release Has Been Delated!');
    }
}

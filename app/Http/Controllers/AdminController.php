<?php

namespace App\Http\Controllers;

use App\Models\Talent;
use App\Models\Release;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Merch;
use App\Models\News;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
        $jumlah_release = Release::count();
        $jumlah_event = Event::count();
        $jumlah_merch = Merch::count();
        $jumlah_news = News::count();

        return view('/admin/v_home', [
            "title" => "HON ADMIN || Home",
            "active" => "home",
            "dd_menu" => "",
            "j_release" => $jumlah_release,
            "j_event" => $jumlah_event,
            "j_merch" => $jumlah_merch,
            "j_news" => $jumlah_news
        ]);
    }

    // CATEGORY
    public function category()
    {
        return view('/admin/v_category', [
            "title" => "HON ADMIN || Category",
            "active" => "release",
            "release" => Release::latest()->get(),
            "category" => Category::all(),
            "talent" => Talent::all(),
            "dd_menu" => "category"
        ]);
    }
    public function category_one(Category $category)
    {
        $i = 1;
        return view('/admin/v_category_one', [
            "title" => "HON ADMIN || $category->name",
            "active" => "release",
            "dd_menu" => "category",
            "category" => $category->name,
            "slug" => $category->slug,
            "release" => $category->release,
            "nomor" => $i
        ]);
    }

    public function talent_one(Talent $talent)
    {
        $i = 1;
        return view('/admin/v_talent_one', [
            "title" => "HON ADMIN || $talent->name",
            "active" => "release",
            "dd_menu" => "category",
            "talent" => $talent->name,
            "slug" => $talent->slug,
            "release" => $talent->release,
            "nomor" => $i
        ]);
    }


    public function talent()
    {
        return view('/admin/v_talent', [
            "title" => "HON ADMIN || Talent",
            "active" => "talent",
            "dd_menu" => "",
        ]);
    }

    public function about()
    {
        return view('/admin/v_about', [
            "title" => "HON ADMIN || About",
            "active" => "about",
            "dd_menu" => "",
        ]);
    }

    public function profil(User $user)
    {
        $user = $user;
        return view('/admin/v_profil', [
            "title" => "HON ADMIN || profil",
            "active" => "profil",
            "dd_menu" => "",
        ]);
    }
}

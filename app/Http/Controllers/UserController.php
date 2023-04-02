<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Event;
use App\Models\Merch;
use App\Models\Talent;
use App\Models\Release;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class USERController extends Controller
{
    public function index()
    {
        return view('/user/home', [
            "title" => "House Of Negative || Home",
            "active" => "home",
            "release" => Release::latest()->get(),
            "newrelease" => Release::latest()->paginate(3),
            "newmerch" => Merch::latest()->paginate(4),
            "newnews" => News::latest()->paginate(3),
            "event" => Event::latest()->get()
        ]);
    }

    // RELEASE
    public function release()
    {
        $nomor = 1;
        return view('/user/release', [
            "title" => "HON ADMIN || Release",
            "active" => "release",
            "nomor" => $nomor,
            "release" => Release::latest()->get(),
            "newrelease" => Release::latest()->paginate(3),
            "event" => Event::latest()->get()
        ]);
    }

    public function detail_release(Release $release)
    {
        return view('/user/detail_release', [
            "title" => "HON ADMIN || $release->talent_name",
            "active" => "release",
            "dd_menu" => "",
            "release" => $release,
            "allrelease" => Release::latest()->paginate(3),
            "event" => Event::latest()->get(),
            'date' => date('d M Y', strtotime($release->created_at))
        ]);
    }

    // EVENT
    public function event()
    {
        return view('/user/event', [
            "title" => "HON ADMIN || Release",
            "active" => "event",
            "release" => Release::latest()->get(),
            "newrelease" => Release::latest()->paginate(3),
            "event" => Event::latest()->get()
        ]);
    }

    public function detail_event(Event $event)
    {
        return view('/user/detail_event', [
            "title" => "HON ADMIN || $event->title",
            "active" => "event",
            "dd_menu" => "",
            "event" => $event,
            "allevent" => Event::latest()->paginate(6),
            "release" => release::latest()->get(),
            'date' => date('d M Y', strtotime($event->date))
        ]);
    }

    // Merch
    public function merch()
    {
        return view('/user/merch', [
            "title" => "HON ADMIN || Merch",
            "active" => "merch",
            "merch" => Merch::latest()->get(),
            "newmerch" => Merch::latest()->paginate(3),
            "event" => Event::latest()->get(),
            "news" => News::latest()->get()
        ]);
    }

    public function detail_merch(Merch $merch)
    {
        return view('/user/detail_merch', [
            "title" => "HON ADMIN || Merch",
            "active" => "merch",
            "merch" => $merch,
            "newmerch" => Merch::latest()->paginate(4),
            "event" => Event::latest()->get(),
            "news" => News::latest()->paginate(3)
        ]);
    }

    public function news()
    {
        return view('/user/news', [
            "title" => "HON ADMIN || News",
            "active" => "news",
            "news" => News::latest()->get(),
            "newnews" => News::latest()->paginate(3),
            "event" => Event::latest()->get(),
            "merch" => Merch::latest()->get(),
            "release" => Release::latest()->get(),
        ]);
    }

    public function detail_news(News $news)
    {
        return view('/user/detail_news', [
            "title" => "HON ADMIN || $news->title",
            "active" => "news",
            "news" => $news,
            "newnews" => News::latest()->paginate(3),
            "event" => Event::latest()->get(),
            "merch" => Merch::latest()->paginate(4)
        ]);
    }
    public function about()
    {
        return view('/user/about', [
            "title" => "HON ADMIN || About",
            "active" => "about",
            "dd_menu" => "",
        ]);
    }
}

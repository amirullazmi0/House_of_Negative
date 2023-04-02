<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('/admin/v_event', [

            "title" => "HON ADMIN || Event",
            "active" => "event",
            "dd_menu" => "",
            "event" =>  Event::latest()->get()
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
        return view('/admin/v_add_event', [
            "title" => "HON ADMIN || Add Event",
            "active" => "event",
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
            'slug' => 'required|unique:events',
            'venue' => 'required',
            'desc' => 'required',
            'date' => 'required|date',
            'poster' => 'image|file|max:2048'
        ]);


        if ($request->file('poster')) {
            $validateData['poster'] = $request->file('poster')->store('/img/event');
        }

        Event::create($validateData);

        return redirect('/admin/event')->with('success', 'New Event Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
        return view('/admin/v_detail_event', [
            "title" => "HON ADMIN || $event->title",
            "active" => "event",
            "dd_menu" => "",
            "event" => $event,
            // "date" => $release->updated_at
            "date" => date("d M Y", strtotime($event->date))
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
        return view('/admin/v_edit_event', [
            "title" => "HON ADMIN || Edit Event",
            "active" => "event",
            "dd_menu" => "",
            "event" => $event
        ]);
    }

    public function update(Request $request, Event $event)
    {
        //
        $rules = ([
            'title' => 'required',
            'venue' => 'required',
            'desc' => 'required',
            'date' => 'required|date'
        ]);

        if ($request->slug != $event->slug) {
            $rules['slug'] = 'required|unique:events';
        }

        $validateData = $request->validate($rules);

        if ($request->file('poster')) {
            $validateData['poster'] = $request->file('poster')->store('/img/event');
        }


        Event::where('id', $event->id)
            ->update($validateData);

        return redirect('/admin/event')->with('success', 'Release Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
        Event::destroy($event->id);

        return redirect('/admin/event')->with('success', 'Release Has Been Delated!');
    }
}

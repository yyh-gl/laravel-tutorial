<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkRequest;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index() {
        $links = \App\Link::all();
        return view('welcome', compact('links'));
    }

    public function submit() {
        return view('submit');
    }

    public function create(Request $request) {
        $link = new \App\Link;
        $link->title = $request->title;
        $link->url = $request->url;
        $link->description = $request->description;
        $link->save();

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index() {
        $links = \App\Link::all();
        return view('welcome', compact('links'));
    }
}

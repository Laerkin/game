<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index() {
        return view('create_map.index');
    }

    public function store() {
        $values = Request::all();
    }
}

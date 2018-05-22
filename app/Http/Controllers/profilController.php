<?php

namespace App\Http\Controllers;

class profilController extends Controller
{

    public function show($id)
    {
        return view('profil.index', ['user' => users::findOrFail($id)]);
    }

    public function __construct()
    {
        $this->middleware('guest');
    }

}

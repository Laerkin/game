<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilController extends Controller
    {

        public function show($id)
        {
            return view('prifil.index', ['user' => User::findOrFail($id)]);
        }
    }

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilController extends Controller
    {

        public function show($id)
        {
            return view('profil.index', ['user' => users::findOrFail($id)]);
        }
    }

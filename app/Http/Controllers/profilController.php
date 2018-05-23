<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Auth;
use App\Model\Users;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class profilController extends Controller
{

    public function index()
    {

        $user = Auth::user();


        return view('profil.index')
            ->with('user', $user);
    }


    public function update()
    {

    // faire le ttt de l'update

    }

    public function __construct()
    {
        $this->middleware('auth');

    }

}

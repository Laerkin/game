<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class profilController extends Controller
{

    public function index()
    {

        $users = DB::table('users')->get();

        return view('profil.index', ['users' => $users]);

    }

    public function update()
    {

        DB::table('users')
            ->where('id', 1)
            ->update(['votes' => 1]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}

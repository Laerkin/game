<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Model\Users;
use App\Http\Controllers\Auth;

class profilController extends Controller
{

    public function index()
    {

        $userinfo= Users::where(Auth()->user())
            ->first();
        return view('profil.index')
            ->with('userinfo', $userinfo);
    }

    public function update()
    {

        DB::table('users')
            ->where(Auth()->user())
            ->update(['name' => '', 'localisation' => '', 'avatar' => '']);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}

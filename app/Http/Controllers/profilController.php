<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Auth;
use App\Model\Users;
use App\User;

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
        $user = User::where('email', 'test@test.com')->first();
        $user->email = 'toto@toto.com';
        $user->save();

    }

    public function __construct()
    {
        $this->middleware('auth');

    }

}

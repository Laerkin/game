<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Auth;
use App\Model\Users;
use App\User;
use Illuminate\Support\Facades\Validator;

class profilController extends Controller
{

    public function index()
    {

        $user = Auth::user();


        return view('profil.index')
            ->with('user', $user);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',

        ]);

    }

    public function update(){
        $formulaire = User::where('email', 'loc');
        $formulaire->loc = $data;
        $formulaire->save();
    }



    public function __construct()
    {
        $this->middleware('auth');

    }

}

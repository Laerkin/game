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


    public function update(Request $request)
    {

            exit;
                    //Find the user object from model if it exists
            $user = User::findOrFail($id);

            DB::table('user')
                ->where('email', $id)
                ->update(['email' => $request['email'],
                    'loc' => $request['loc'],
                ]);
            $user->save();

    }

    public function __construct()
    {
        $this->middleware('auth');

    }

}

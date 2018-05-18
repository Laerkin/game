<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Redirect;
use Request;



class audioController extends Controller
{
    public function index(){

        $toto = Storage::url('Alarm01.wav'); // fait un commande php pour recup last ID insert

        return view('media.audio.index')->with("toto", $toto);
    }

    public function store(){
        $values = Request::all();
        //dd($values);
        $file = $values['audio'];
        //dd($file->getRealPath());


        $ext = strtolower($file->getClientOriginalExtension());
        $file->storeAs('public/audio',str_random(8).$ext);

        return Redirect::back();

    }
}

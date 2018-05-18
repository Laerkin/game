<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Redirect;
use Request;



class videoController extends Controller
{
    public function index(){

        $toto = Storage::url('mon_nom.wav'); // fair une commande php pour recup last
                                             // insert id dans bdd pour réafichage

        return view('media.video.index')->with("toto", $toto);
    }

    public function store(){
        $values = Request::all();
        //dd($values);
        $file = $values['video'];
        //dd($file->getRealPath());

        $ext = strtolower($file->getClientOriginalExtension());
        $file->storeAs('public/video', str_random(8) .$ext);

      
        return Redirect::back();

    }
}

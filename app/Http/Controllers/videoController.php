<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Redirect;
use Request;



class videoController extends Controller
{
    public function index(){

        $toto = Storage::url('Alarm01.wav');

        return view('media.video.index')->with("toto", $toto);
    }

    public function store(){
        $values = Request::all();
        //dd($values);
        $file = $values['video'];
        //dd($file->getRealPath());

        // Affiche le nom du fichier envoyé
        // Name : dd($file->getClientOriginalName());

        // Affiche l'extension du fichier envoyé
        // Extension : dd($file->getClientOriginalExtension());

        // Stock le fichier envoyé dans storage avec un nom aléatoire
        // $file->store('public');


        // Stock avec un autre nom
        $ext = strtolower($file->getClientOriginalExtension());
        $file->storeAs('public/video', 'mon_nom.'.$ext);

        //$file->storeAs('public', 'dd.' . strtolower($file->getClientOriginalExtension()));

        //Déplacement dans le bon dossier
        $file->move(public_path('/compagnies/'), 'toto.' . $ext);
        return Redirect::back();

    }
}

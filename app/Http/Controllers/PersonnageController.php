<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Redirect;
use Request;


class PersonnageController extends Controller
{
    public function index(){
        return view('personnage.index');
    }

    public function store(){
        $values = Request::all();
        $file = $values['img'];

        // Stock avec un autre nom
        $ext = strtolower($file->getClientOriginalExtension());
        $file->storeAs('public/img_personnage', 'mon_nom.'. $ext);

        //Déplacement dans le bon dossier
        $file->move(public_path('/compagnies/'), 'toto.' . $ext);
        return Redirect::back();

    }
}
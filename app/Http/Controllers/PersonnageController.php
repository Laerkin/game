<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Image;
use Redirect;
use Illuminate\Http\Request;


class PersonnageController extends Controller
{
    public function index(){
        return view('personnage.index');
    }

    public function store(Request $request)
    {
        if($request->hasFile('img_personnage') && !empty($request->get('name_personnage'))) {
            // get filename with extension
            $filenamewithextension = $request->file('img_personnage')->getClientOriginalName();

            // get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            // get file extension
            $extension = $request->file('img_personnage')->getClientOriginalExtension();

            // filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            // Upload File
            $request->file('img_personnage')->storeAs('public/img_personnage', $filenametostore);
            $request->file('img_personnage')->storeAs('public/img_personnage/thumbnail', $filenametostore);

            //Resize image here
            $thumbnailpath = public_path('storage/img_personnage/thumbnail/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(150, 150)->save($thumbnailpath);

            return Redirect::back()->with('success', "Personnage créé avec succès");
        }
        else{
            return Redirect::back()->with('error', "Nom et image du personnage obligatoire");
        }
    }


//    public function store(){
//        $values = Request::all();
//        $file = $values['img'];
//
//        // Stock avec un autre nom
//        $ext = strtolower($file->getClientOriginalExtension());
//        $file->storeAs('public/img_personnage', 'perso.'. $ext);
//
//        // Déplacement dans le bon dossier
//        $file->move(public_path('/img_personnage/'), 'perso.' . $ext);
//        return Redirect::back();
//
//    }

}
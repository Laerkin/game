<?php

namespace App\Http\Controllers;

use Redirect;
use Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests;
use App\Model\Map;
use Validator;

class MapController extends Controller
{
    public function index() {
        return view('create_map.index');

    }

    public function store() {
        $values = Request::all();
        // je regarde le contenu de values pour vérifier que tout est ok
        $rules = [
            'intitule'   => 'string|required',
            'style'      => 'string|required',
            'longitude'  => 'numeric|required' ,
            'latitude'   => 'numeric|required',
            'adresse'    => 'string|required',
        ];


        $validator = Validator::make($values, $rules, [
            'intitule.string'     => 'Titre invalide.',
            'intitule.required'   => 'Titre requis.',
            'style.string'        => 'Style invalide.',
            'style.required'      => 'Style requis.',
            'longitude.numeric'   => 'Longitude invalide.',
            'longitude.required'  => 'Longitude requis.',
            'latitude.numeric'    => 'Latitude invalide.',
            'latitude.required'   => 'Latitude requis.',
            'adresse.string'      => 'Adresse invalide.',
            'adresse.required'    => 'Adresse requis.',


        ]);

        if($validator->fails())
        {

            return redirect()->back()
                ->withErrors($validator)
                ->withInput();


        }


        $map = new Map();

        $map->intitule = $values['intitule'];
        $map->style = $values['style'];
        $map->lng = $values['longitude'];
        $map->lat = $values['latitude'];
        $map->adresse = $values['adresse'];

        $map->save();

        return view('create_map.index')
                    ->with('successMessage', 'Création réussie !');
    }
}

// echo '<pre>';
// var_dump($values);
// echo '</pre>';

//function dd($toto)
//{
    //echo '<pre>';
    //var_dump($toto);
    //echo '</pre>';
  //  die();
//}

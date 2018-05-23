<?php

namespace App\Http\Controllers;

use Redirect;
use Request;
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
            'titre'      => 'string|required',
            'style'      => 'string|required',
            'longitude'  => 'integer|required' ,
            'latitude'   => 'integer|required',
            'adresse'    => 'string|required',
        ];

        $validator = Validator::make($values, $rules, [
            'titre.string'        => 'Titre invalide.',
            'titre.required'      => 'Titre requis.',
            'style.string'        => 'Style invalide.',
            'style.required'      => 'Style requis.',
            'longitude.integer'   => 'Longitude invalide.',
            'longitude.required'  => 'Longitude requis.',
            'latitude.integer'    => 'Latitude invalide.',
            'latitude.required'   => 'Latitude requis.',
            'adresse.string'      => 'Adresse invalide.',
            'adresse.required'    => 'Adresse requis.',
        ]);

        // dd($values);
        if($validator->fails())
        {

            return Redirect::back()
                           ->withErrors($validator)
                           ->withInput();
        }

        $story = new Story();

        $story->intitule = $values['titre'];
        $story->style = $values['style'];
        $story->lng = $values['longitude'];
        $story->lat = $values['latitude'];
        $story->adresse = $values['adresse'];

        $story->save();

        return view('create_map.index')
                    ->with('successMessage', 'Création réussie !');
    }
}

function dd($toto)
{
    echo '<pre>';
    var_dump($toto);
    echo '</pre>';
    die();
}

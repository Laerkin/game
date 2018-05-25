<?php

namespace App\Http\Controllers;

use Redirect;
use Request;
use App\Http\Requests;
use App\Model\Story;
use Validator;
use App\Achievements\UserMadeAStory;




class egfzbf extends Controller
{
    public function index()
    {
        return view('editeur.index');
    }

    public function store()
    {
        $user = Auth::user();

        $user->unlock(new UserMadeAStory());

        exit;

        $values = Request::all();
        // la regarde le contenu de values pour vérifier que tout est ok
        $rules = [
            'titre' => 'string|required',
            'synopsis' => 'string|required',
            'genre' => 'integer|required',
            'difficulte' => 'integer|required',
            'publish' => 'integer|boolean',
            // 'date'       => 'dateTime',
        ];

        $validator = Validator::make($values, $rules, [
            'titre.string' => 'Titre invalide.',
            'titre.required' => 'Titre requis.',
            'synopsis.string' => 'Le synopsis est invalide.',
            'synopsis.required' => 'Le synopsis est requis.',
            'genre.integer' => 'Le genre est invalide.',
            'genre.required' => 'Le genre est requis.',
            'difficulte.integer' => 'La difficulté est invalide.',
            'difficulte.required' => 'La difficulté est requise.',
        ]);


        if ($validator->fails()) {

            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        $story = new Story();

        $story->titre = $values['titre'];
        $story->synopsis = $values['synopsis'];
        $story->difficulte = $values['difficulte'];
        $story->genre = $values['genre'];
        $story->publish = "0";
//        $story->date = date("Y-m-d H:i:s");
        //$story->users_id = auth()->user()->id;
        $story->users_id = "0";


        $story->save();

        $user = Auth::user();

        $user->unlock(new UserMadeAStory());


        return view('editeur.index')
            ->with('successMessage', 'Création réussie !');
    }
}
//}
//
//function dd($toto)
//{
//    echo '<pre>';
//    var_dump($toto);
//    echo '</pre>';
//    die();
//}

//
//function dd($toto)
//{
//    echo '<pre>';
//    var_dump($toto);
//    echo '</pre>';
//    die();
//}

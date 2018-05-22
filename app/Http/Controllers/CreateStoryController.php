<?php
namespace App\Http\Controllers;
use Redirect;
use Request;
use App\Http\Requests;
use App\Model\Story;
use Validator;
class CreateStoryController extends Controller
{
    public function index() {
        return view('create_story.index');
    }
    public function store() {
        $values = Request::all();
        // la regarde le contenu de values pour vérifier que tout est ok
        $rules = [
            'titre'      => 'string|required',
            'synopsis'   => 'string|required',
            'genre'      => 'integer|required' ,
            'difficulte' => 'integer|required',
            'publish'    => 'integer|boolean',
            // 'date'       => 'dateTime',
        ];
        $validator = Validator::make($values, $rules, [
            'titre.string'        => 'Titre invalide.',
            'titre.required'      => 'Titre requis.',
            'synopsis.string'     => 'Le synopsis est invalide.',
            'synopsis.required'   => 'Le synopsis est requis.',
            'genre.integer'       => 'Le genre est invalide.',
            'genre.required'      => 'Le genre est requis.',
            'difficulte.integer'  => 'La difficulté est invalide.',
            'difficulte.required' => 'La difficulté est requise.',
            'publish.integer'     => 'invalide',
        ]);
        // dd($values);
        if($validator->fails())
        {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }
        $story = new Story();
        $story->titre = $values['titre'];
        $story->synopsis = $values['synopsis'];
        $story->difficulte = $values['difficulte'];
        $story->genre = $values['genre'];
        $story->publish = $values['publish'];
        // $story->date = $values['date'];
        $story->save();
        return view('create_story.index')
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
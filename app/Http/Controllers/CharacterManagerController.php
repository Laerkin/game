<?php

namespace App\Http\Controllers;

use App\Model\Personnage;
use Request;
use Response;
use Image;
use Redirect;
use Validator;

class CharacterManagerController extends Controller
{
	public function index(){
		return view('character-manager.index');
	}

    public function storeCharacter(){
		$values = Request::all();
		
    	$rules = [
    		'name' => 'string|required',
    		'character-image' => 'image|required',
    		'bio' => 'string|max:255|nullable',
    	];

    	$validator = Validator::make($values, $rules, [
    		'name.required' => 'Votre personnage doit avoir au moin un nom ou un prénom.',
    		'name.string' => 'veuillez renseigner un nom/prénom valide.',
    		'character-image.required' => 'Votre devez mettre une image pour votre personnage.',
    		'character-image.image' => 'Image invalide',
    		'bio.string' => 'Texte invalide.',
    		'bio.max:255' => 'Votre texte est trop long.',
    	]);

		if($validator->fails()){

    		return Redirect::back()
    							->withErrors($validator)
    							->withInput();
    	}


		$image = $values['character-image'];

		$ext = strtolower($image->getClientOriginalExtension());

		$image_name = date('d-m-Y-H-s').'-'.rand();
	
		$img = Image::make($image);

		$img->resize(150, 150);

		$img->save(public_path('/user/characters/' . $image_name.'.'.$ext));

		$path = 'user/characters/'.$image_name.'.'.$ext;

		$character = new Personnage();

		$character->name = $values['name'];
		$character->path = $path;
		$character->bio = $values['bio'];

		/*Probleme : on doit pouvoir creer un personnage meme sans slide*/
		$character->slides_elements_id = 1;
		/*A adapter pour plus tard */
		$character->users_id = 1;

		$character->save();

		$character_json = [
			'name' => $values['name'],
			'image' => $path,
			'bio' => $values['bio']
		];

	

		return view('character-manager.index')
		->with('successMessage', 'Votre personnage à bien était enregistré.')
		->with(json($character_json));
	}

	public function editCharacter(){}
} 
<?php

namespace App\Http\Controllers;

use App\Model\Personnage;
use Request;
use Image;
use Redirect;
use Validator;

class CharacterManagerController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest');
    }
	
	public function index(){
		$personnages = Personnage::all();

		return view('editeur.index')
				->with('personnages', $personnages);
	}

    public function storeCharacter(){
		$values = Request::all();
		
    	$rules = [
    		'name' => 'string|required',
    		'character-image' => 'image|required',
    		'bio' => 'string|max:255|required',
    	];

    	$validator = Validator::make($values, $rules, [
    		'name.required' => 'Votre personnage doit avoir au moin un nom ou un prénom.',
    		'name.string' => 'veuillez renseigner un nom/prénom valide.',
    		'character-image.required' => 'Votre devez mettre une image pour votre personnage.',
    		'character-image.image' => 'Image invalide',
    		'bio.string' => 'Texte invalide.',
    		'bio.max:255' => 'Votre texte est trop long.',
    		'bio.required' => 'Vous devez remplir ce champ.',
    	]);

		if($validator->fails()){

    		return Redirect('editeur.index')
    			->withErrors($validator)
    			->withInput();
    	}


		$image = $values['character-image'];

		$ext = strtolower($image->getClientOriginalExtension());

		$image_name = date('d-m-Y-H-s').'-'.rand();
	
		$img = Image::make($image);

		$img->resize(150, 150);

		$img->save(public_path('/user/characters/' . $image_name.'.'.$ext));

    	$personnages = Personnage::all();
    	
		$path = 'user/characters/'.$image_name.'.'.$ext;
		$bio = $values['bio'];
		$name = $values['name'];

		$character = new Personnage();

		$character->name = $name;
		$character->path = $path;
		$character->bio = $bio;

		/*Supprimer la table "slides_elements_id" qui ne sert a rien*/
		$character->slides_elements_id = 1;

		/*A adapter pour plus tard */
		$character->users_id = 1;

		$character->save();

		return view('editeur.index')
		->with('successMessage', 'Votre personnage: '. $name .' à bien était enregistré.')
		->with('personnages', $personnages)
		->with('path', $path)
		->with('bio', $bio)
		->with('name', $name);

	}
} 
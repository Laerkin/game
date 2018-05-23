<?php

namespace App\Http\Controllers;

use App\Model\personnage;
use Request;
use Response;

class CharacterManagerController extends Controller
{
	public function index(){
		return view('character-manager.index');
	}

    public function storeCharacter(){
		
		$values = Request::all();

		$image = $values['character-image'];
		
		$image_name = 'photo-'.strtolower($image->getClientOriginalName).'.'.strtolower($image->extension());

		$resize_image = Image::make($image)->resize(150, 150)->save(public_path('user/characters/'.$image_name));

		$character = new personnage();

		$character->name = values['name'];
		$character->path = 'user/characters/'.$image_name;
		$character->bio = values['bio'];
		$character->save();

		$character_json = [
			'name' => $values['name'],
			'path' => 'animals/'.$image_name,
			'bio' => $values['bio'],
		];

		return response()->json($character_json);
	}

	public function editCharacter(){}
}
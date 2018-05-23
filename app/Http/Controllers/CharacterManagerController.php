<?php

namespace App\Http\Controllers;

use app\Model\personnage;
use Request;
use Response;
use Image;

class CharacterManagerController extends Controller
{
	public function index(){
		return view('character-manager.index');
	}

    public function storeCharacter(){
		
		$values = Request::all();

		$image = $values['character-image'];

		$ext = strtolower($image->getClientOriginalExtension());

		$image_name = date('d-m-Y-H-s').'-'.rand();
	
		$img = Image::make($image);

		$img->resize(150, 150);

		$img->save(public_path('/user/characters/' . $image_name.'.'.$ext));

		$character = new personnage();

		$character->name = values['name'];
		$character->path = 'user/characters/'.$image_name.'.'.$ext;
		$character->bio = values['bio'];
		$character->save();

		$character_json = [
			'name' => $values['name'],
			'path' => 'user/characters/'.$image_name.'.'.$ext,
			'bio' => $values['bio'],
		];

		return response()->json($character_json);
	}

	public function editCharacter(){}
} 
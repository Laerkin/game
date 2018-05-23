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
		
		$ext = strtolower($image->getClientOriginalExtension());

		$image_name = date('d-m-Y-H:s').'-'.rand();

		$image->storeAs('public', $image_name.'.'.$ext); 

		$resize_image = Image::make($image)->resize(150, 150)->save(public_path('user/characters/'));

		$image->move(public_path('user/characters/'));

		$character = new personnage();

		$character->name = values['name'];
		$character->path = 'user/characters/'.$image_name.'.'.$ext;
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
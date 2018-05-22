<?php

namespace App\Http\Controllers;

use Model\personnage;
use Illuminate\Http\Request;

class CharacterManagerController extends Controller
{
	public function index(){
		return view('character-manager.index');
	}

    public function storeCharacter(){
		$values = Request::all();

		$image = $values['character-image'];

		$image_name = 'photo-'.strtolower($image->getClientOriginalName).'.'.strtolower($image->extension());

		$resize_image = Image::make($image);

		$resize_image->resize(150, 150)
					 ->save(public_path('user/characters/'.$image_name));

		$character = new personnage();

		$character->name = values['name'];
		$character->path = 'user/characters/'.$image_name;
		$character->bio = values['bio'];
		$character->save();
	}
}

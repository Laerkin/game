<?php

namespace App\Http\Controllers;

use App\Model\Story;
use App\Model\Commentaire;
use Illuminate\Http\Request;

class StorySampleController extends Controller
{

    public function index($id){
    	
    	$story = Story::find($id);
    	
    	
    	return view('story-sample.index')->with('story', $story);
    }

    public function store(){

    }
}
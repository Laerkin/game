<?php

namespace App\Http\Controllers;

use App\Model\Story;
use App\Model\Commentaire;
use Illuminate\Http\Request;

class StorySampleController extends Controller
{
    public function index($titre){
    	$stories = Story::get();
    	$commentaires = commentaire::get();
    	
    	return view('story-sample.index', ['stories' => Story::findOrFail($id)])->with('stories', $stories);
    }
}
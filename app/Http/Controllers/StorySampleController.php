<?php

namespace App\Http\Controllers;

use App\Model\Story;
use Illuminate\Http\Request;
use Validator;

class StorySampleController extends Controller
{


    public function index($id){
    	
    	$story = Story::find($id);
    	
    	
    	return view('story-sample.index')->with('story', $story);
    }
    
}

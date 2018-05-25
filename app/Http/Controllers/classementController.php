<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Stats;

class classementController extends Controller
{
    public function index(){

        $stats = Stats::all();

        return view('classement.index', compact('stats'));
    }

    public function __construct()
    {
        $this->middleware('guest');
    }
}

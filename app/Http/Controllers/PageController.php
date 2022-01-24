<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{
    public function index(){
        //$title='Il Padrino';
        //$original_title='The Godfather';

        $movies = Movie::all();

        return view('home', compact('movies'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MoviesController extends Controller
{
    public function getMovies(){
        //$title='Il Padrino';
        //$original_title='The Godfather';

        $films = Movie::all();

        return view('movies', compact('films'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\MovieModel;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('welcome', compact('movies'));
    }
}

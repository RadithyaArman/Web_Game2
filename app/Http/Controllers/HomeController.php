<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('home', [
            'title' => 'Home',
            'genres' => Genre::all(),
            'games' => Game::latest()->take(12)->get(),
            'topGames' => Game::orderBy('rating', 'desc')->take(10)->get(),
        ]);
    }
}

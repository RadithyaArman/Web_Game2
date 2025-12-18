<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    // public function index()
    // {
    //     return view('katalog', [
    //         'title' => 'Katalog',
    //         'games' => Game::orderBy('title', 'asc')->paginate(16),
    //     ]);
    // }

    // public function desc()
    // {
    //     return view('katalog', [
    //         'title' => 'Katalog',
    //         'games' => Game::orderBy('title', 'desc')->paginate(16),
    //     ]);
    // }

    public function index(Request $r)
    {
        $query = Game::query();

        if ($r->genre) {
            $query->whereHas('genres', function ($q) use ($r) { 
                $q->where('genres.id', $r->genre);
            });
        }

        if ($r->q) {
            $query->where('title', 'like', "%{$r->q}%");
        }

        if ($r->sort === 'desc') {
            $query->orderBy('title', 'desc');
        } else {
            $query->orderBy('title', 'asc');
        }

        $limit = intval($r->get('limit', 12));

        return view('katalog', [
            'title' => 'Katalog',
            'games' => $query->paginate($limit),
            'genres' => Genre::all(),
        ]);
    }

    // public function search(Request $request)
    // {
    //     $q = $request->q;

    //     $games = Game::when($q, function ($query) use ($q) {
    //         $query->where('title', 'like', "%$q%");
    //     })->paginate(16);

    //     return view('game.search', compact('games'));
    // }
}

<?php

// namespace App\Http\Controllers;

// use App\Models\Genre;
// use Illuminate\Http\Request;

// class GenreController extends Controller
// {
//     public function filter($id)
//     {
//         $genre = Genre::findOrFail($id);

//         return view('katalog', [
//             'title' => 'Genre ' . $genre->name,
//             'games' => $genre->games()->paginate(16),
//         ]);
//     }
// }

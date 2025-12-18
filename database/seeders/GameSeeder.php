<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genreIds = Genre::pluck('id')->toArray();

        $games = [
            [
                'title' => 'Among Us',
                'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSL4pC911RR8_8f9fN7T2AYbgBWfH-lv8DX7w&s',
                'rating' => 8.0,
                'developer' => 'innersloth',
                'publisher' => 'innersloth',
                'genres' => [3],
                'description' => fake()->paragraph(),
                'count' => 20,
            ],
            [
                'title' => 'Fortnite',
                'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZWoQF_EWvGqGmMfE5eDd4M5q6yjpdExdWvA&s',
                'rating' => 7.9,
                'developer' => 'Epic Games',
                'publisher' => 'Epic Games',
                'genres' => [5],
                'description' => fake()->paragraph(),
                'count' => 20,
            ],
        ];

        foreach ($games as $game) {
            $g = Game::create([
                'title' => $game['title'],
                'cover' => $game['cover'],
                'rating' => $game['rating'],
                'developer' => $game['developer'],
                'publisher' => $game['publisher'],
                'description' => $game['description'],
            ]);
            $g->genres()->attach($game['genres']);
        }

        for ($i = 1; $i <= 20; $i++) {
            $g3 = Game::create([
                'title' => "Dummy #$i",
                'cover' => null,
                'rating' => fake()->randomFloat(1, 5, 9),
                'developer' => 'Dummy Dev',
                'publisher' => 'Dummy Pub',
                'description' => fake()->paragraph(),

            ]);
            $g3->genres()->attach(collect($genreIds)->random(rand(2,4))->toArray());
        }
    }
}

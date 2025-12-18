<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\User;
use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GenreSeeder::class,
            GameSeeder::class,
            GameImageSeeder::class,
        ]);


        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $genres1 = [
        //     'Action', 'Horror', 'Party Game', 'Fantasy', 'Battle Royale',
        // ];
        // $genres2 = [
        //     'Action', 'Horror', 'Party Game', 'Fantasy', 'Battle Royale',
        // ];

        // foreach( $genres1 as $g ) {
        //     Genre::create([
        //         'name' => $g
        //     ]);
        // }
        // foreach( $genres2 as $g ) {
        //     Genre::create([
        //         'name' => $g
        //     ]);
        // }
        
        // $game1 = [
        //     'title' => 'Among Us',
        //     'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSL4pC911RR8_8f9fN7T2AYbgBWfH-lv8DX7w&s',
        //     'rating' => 8.0,
        //     'developer' => 'innersloth',
        //     'publisher' => 'innersloth',
        //     'genres' => [3]
        // ];

        // $game2 = [
        //     'title' => 'Fortnite',
        //     'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZWoQF_EWvGqGmMfE5eDd4M5q6yjpdExdWvA&s',
        //     'rating' => 7.9,
        //     'developer' => 'Epic Games',
        //     'publisher' => 'Epic Games',
        //     'genres' => [5]
        // ];

        // for ($i = 1; $i <= 20; $i++) {

        //     $g1 = Game::create([
        //         'title' => $game1['title'] . " #$i",
        //         'cover' => $game1['cover'],
        //         'rating' => $game1['rating'],
        //         'developer' => $game1['developer'],
        //         'publisher' => $game1['publisher'],
        //     ]);
        //     $g1->genres()->attach($game1['genres']);

        //     $g2 = Game::create([
        //         'title' => $game2['title'] . " #$i",
        //         'cover' => $game2['cover'],
        //         'rating' => $game2['rating'],
        //         'developer' => $game2['developer'],
        //         'publisher' => $game2['publisher'],
        //     ]);
        //     $g2->genres()->attach($game2['genres']);
        // }


    }
}

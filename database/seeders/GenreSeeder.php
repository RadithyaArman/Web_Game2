<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            'Action', 'Horror', 'Party Game', 'Fantasy', 'Battle Royale',
        ];

        foreach ($genres as $g) {
            Genre::create(['name' => $g]);
        }
    }
}

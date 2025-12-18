<?php

namespace Database\Seeders;

use App\Models\GameImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GameImage::create([
            'game_id' => '1',
            'url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFrXZcWy6ZzswR08Td2C5A0TCqWbb9p1Ormi4MhZyOD9X9u2nX6t_Sxn3kNiZN_BenLNi7jIY6_MBhw331b0_gRzTa-WKbLpMDwZrzm8ywCg&s=10'
        ]);

        GameImage::create([
            'game_id' => '1',
            'url' => 'https://images.launchbox-app.com/e7a80b4f-c6e5-493a-97b8-f6231c51097e.png',
        ]);

        GameImage::create([
            'game_id' => '1',
            'url' => 'https://img.gamewith.jp/img/original_e513ac4b5825e1e54d8734c1d1533862.jpg',
        ]);
    }
}

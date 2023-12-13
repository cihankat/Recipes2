<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Italiaans',
                'flag' => 'italian.jpg'
            ],
            [
                'name' => 'Mexicaans',
                'flag' => NULL
            ],
            [
                'name' => 'Grieks',
                'flag' => NULL
            ],
            [
                'name' => 'Spaans',
                'flag' => NULL
            ],
            [
                'name' => 'Thais',
                'flag' => NULL
            ]
        ];

        DB::table('categories')->insert($categories);
    }
}

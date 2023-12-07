<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = [
            [
                'name' => 'tomatenpuree',
                'recipe_id' => 1
            ],
            [
                'name' => 'zout',
                'recipe_id' => 1
            ],
        ];

        DB::table('ingredients')->insert($ingredients);

    }
}

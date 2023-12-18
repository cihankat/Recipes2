<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientsRecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'ingredient_id' => 1,
                'recipe_id'     => 2,
                'quantity'      => 500,
                'unity'         => "gram"
            ],
            [
                'ingredient_id' => 2,
                'recipe_id'     => 2,
                'quantity'      => 8,
                'unity'         => 'gram'
            ]
        ];

        DB::table('ingredients_recipes')->insert($data);
    }
}

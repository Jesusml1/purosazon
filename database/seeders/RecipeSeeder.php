<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {

            $faker = Faker::create();
            $categories =
                [
                    'Pollo',
                    'Carne',
                    'Pasta',
                    'Postre',
                    'Pizza',
                    'Arroz',
                    'Pescado',
                    'Ensalada',
                    'Otro'
                ];
            $randomCategory = array_rand($categories, 1);

            DB::table('recipes')->insert([
                'id' => Str::orderedUuid(),
                'name' =>  $faker->words(5, true),
                'category' => $categories[$randomCategory],
                'description' => $faker->words(10, true),
                'ingredients' => $faker->words(20, true),
                'preparation' => $faker->words(50, true),
                'email' => $faker->unique()->safeEmail(),
                'is_suspended' => false,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}

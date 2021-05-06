<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([RecepieSeeder::class]);
    }
}

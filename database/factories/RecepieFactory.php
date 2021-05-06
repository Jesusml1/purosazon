<?php

namespace Database\Factories;

use App\Models\Recepie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RecepieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recepie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'id' => Str::orderedUuid(),
            'name' =>  $this->faker->words(5, true),
            'category' => array_rand(
                [
                    'pollo',
                    'carne',
                    'pasta',
                    'postre',
                    'pizza',
                    'arroz',
                    'pescado',
                    'ensalada',
                    'otro'
                ],
                1
            ),
            'description' => $this->faker->words(10, true),
            'ingredients' => $this->faker->words(20, true),
            'preparation' => $this->faker->words(50, true),
            'email' => $this->faker->unique()->safeEmail(),
            'is_suspended' => false,
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        return [
            'name' => $faker->name,
            'document' => $faker->numerify('#########'),
            'telephone' => $faker->numerify('3#########'),
            'address' => $faker->address(),
            
        ];
    }
}

<?php

namespace Database\Factories;

use Faker\Provider\pt_BR\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class AreasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('pt_BR');
        $faker->addProvider(new Person($faker));

        static $areaNumber = 3;

        return [
            'name' => $areaNumber . 'º Area',
            'county' => $faker->city, // Usando city como exemplo para gerar um valor fictício de condado
            'earthlyvalue' => $faker->randomFloat(2, 10, 100),
            'totalarea' => $faker->randomFloat(2, 100, 1000),
            'coordinator' => $faker->name,
            'streetopening' => $faker->boolean,
            'sewage' => $faker->boolean,
            'light' => $faker->boolean,
            'water' => $faker->boolean,
        ];
    }
}

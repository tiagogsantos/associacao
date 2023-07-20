<?php

namespace Database\Factories;

use App\Models\Areas;
use Faker\Provider\pt_BR\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventosFactory extends Factory
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

        return [
            'area_id' => function () {
                return Areas::all()->random()->id;
            },
            'name_event' => $faker->name,
            'locale_event' => $faker->city,
            'responsible_vent' => $faker->name,
            'event_data' => $faker->date('Y-m-d'),
            'event_time' => $faker->time()
        ];
    }
}

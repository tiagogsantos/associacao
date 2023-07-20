<?php

namespace Database\Factories;

use App\Models\Areas;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\pt_BR\Person;
use Illuminate\Support\Facades\DB;

class AssociadosFactory extends Factory
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
            'name' => $faker->name,
            'email' => $faker->email,
            'phone_number' => $faker->phoneNumber, // Corrigido para phoneNumber
            'cpf' => $faker->cpf,
            'birthday' => $faker->date, // Corrigido para date
            'rg' => $faker->rg,
            'marital_status' => $faker->randomElement(['1', '2', '3', '4']),
            'company' => $faker->company,
            'cep' => $faker->postcode, // Corrigido para postcode
            'number' => $faker->buildingNumber, // Corrigido para buildingNumber
            'city' => $faker->city,
            'state' => $faker->state,
            'country' => $faker->country,
            'area_id' => function () {
                return Areas::all()->random()->id; // Buscar um ID de área aleatório no banco de dados
            },
            'road' => 'Default Road',
        ];
    }
}

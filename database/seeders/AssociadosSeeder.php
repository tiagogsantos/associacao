<?php

namespace Database\Seeders;

use App\Models\Associados;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssociadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Associados::factory()->count(3)->create();
    }

}

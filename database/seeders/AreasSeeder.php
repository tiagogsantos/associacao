<?php

namespace Database\Seeders;

use App\Models\Areas;
use Illuminate\Database\Seeder;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Areas::factory()->count(3)->create();
    }
}

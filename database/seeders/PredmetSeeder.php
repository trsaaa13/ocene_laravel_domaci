<?php

namespace Database\Seeders;

use App\Models\Predmet;
use Illuminate\Database\Seeder;

class PredmetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Predmet::create([
            'naziv' => 'Srpski jezik',
            'razred' => 'Peti',
            'nastavnik_id' => '1'
        ]);
    }
}

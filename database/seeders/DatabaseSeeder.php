<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $nastavnik_seeder = new NastavnikSeeder;
        $nastavnik_seeder->run();

        $predmet_seeder = new PredmetSeeder;
        $predmet_seeder->run();
    }
}

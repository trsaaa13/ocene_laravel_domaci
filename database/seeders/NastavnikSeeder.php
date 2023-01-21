<?php

namespace Database\Seeders;

use App\Models\Nastavnik;
use Illuminate\Database\Seeder;

class NastavnikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nastavnik::create([
            'ime_prezime' => 'Jovan Jovanovic',
            'godine' => '35',
            'email' =>  'jovan@gmail.com'
        ]);
    }
}

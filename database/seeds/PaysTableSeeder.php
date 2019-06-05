<?php

use Illuminate\Database\Seeder;

class PaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pays')->insert([
            [
                'nom' => 'Suisse',
            ],
            [
                'nom' => 'France', 
            ],
            [
                'nom' => 'Italie',
            ],
            [
                'nom' => 'Espagne',
            ],
            ]);
    }
}

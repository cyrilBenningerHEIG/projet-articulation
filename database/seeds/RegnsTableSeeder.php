<?php

use Illuminate\Database\Seeder;

class RegnsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regns')->insert([
            [
                'pays_id' => '2',
                'nom' => 'Bordeaux',
                'lat' => 44.8333,
                'long' => -0.5667,
            ],
            [
                'pays_id' => '2',
                'nom' => 'Champagne',
                'lat' => 49.15,
                'long' => 4.1167,
            ],
            [
                'pays_id' => '2',
                'nom' => 'Bourgogne',
                'lat' => 47.0167,
                'long' => 4.7833,
            ],
            [
                'pays_id' => '2',
                'nom' => 'Rhône',
                'lat' => 44.1119,
                'long' => 4.8500,
            ],
            [
                'pays_id' => '3',
                'nom' => 'Campania',
                'lat' => 40.92033,
                'long' => 14.79652,
            ],
            [
                'pays_id' => '4',
                'nom' => 'Ribera del Duero',
                'lat' => 41.697102,
                'long' => -3.928010,
            ],
            [
                'pays_id' => '1',
                'nom' => 'Vaud',
                'lat' => 46.331791,
                'long' => 6.958450,
            ],
        ]);
    }
}

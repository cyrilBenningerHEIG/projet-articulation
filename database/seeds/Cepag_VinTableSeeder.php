<?php

use Illuminate\Database\Seeder;

class Cepag_VinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cepag_vin')->insert([
            [
                'vin_id' => '1',
                'cepag_id' => '1',
                'pourcentage' => 53,
            ],
            [
                'vin_id' => '1',
                'cepag_id' => '2',
                'pourcentage' => 33,
            ],
            [
                'vin_id' => '1',
                'cepag_id' => '3',
                'pourcentage' => 12,
            ],
            [
                'vin_id' => '1',
                'cepag_id' => '4',
                'pourcentage' => 2,
            ],
            [
                'vin_id' => '2',
                'cepag_id' => '2',
                'pourcentage' => 48,
            ],
            [
                'vin_id' => '2',
                'cepag_id' => '1',
                'pourcentage' => 37,
            ],
            [
                'vin_id' => '2',
                'cepag_id' => '3',
                'pourcentage' => 11,
            ],
            [
                'vin_id' => '2',
                'cepag_id' => '4',
                'pourcentage' => 4,
            ],
            [
                'vin_id' => '3',
                'cepag_id' => '1',
                'pourcentage' => 50,
            ],
            [
                'vin_id' => '3',
                'cepag_id' => '2',
                'pourcentage' => 30,
            ],
            [
                'vin_id' => '3',
                'cepag_id' => '3',
                'pourcentage' => 17,
            ],
            [
                'vin_id' => '3',
                'cepag_id' => '4',
                'pourcentage' => 3,
            ],
            [
                'vin_id' => '4',
                'cepag_id' => '2',
                'pourcentage' => 48,
            ],
            [
                'vin_id' => '4',
                'cepag_id' => '1',
                'pourcentage' => 47,
            ],
            [
                'vin_id' => '4',
                'cepag_id' => '3',
                'pourcentage' => 5,
            ],
            [
                'vin_id' => '5',
                'cepag_id' => '2',
                'pourcentage' => 48,
            ],
            [
                'vin_id' => '5',
                'cepag_id' => '1',
                'pourcentage' => 47,
            ],
            [
                'vin_id' => '5',
                'cepag_id' => '3',
                'pourcentage' => 5,
            ],
            [
                'vin_id' => '6',
                'cepag_id' => '2',
                'pourcentage' => 48,
            ],
            [
                'vin_id' => '6',
                'cepag_id' => '1',
                'pourcentage' => 47,
            ],
            [
                'vin_id' => '6',
                'cepag_id' => '3',
                'pourcentage' => 5,
            ],
            [
                'vin_id' => '7',
                'cepag_id' => '5',
                'pourcentage' => 75,
            ],
            [
                'vin_id' => '7',
                'cepag_id' => '6',
                'pourcentage' => 25,
            ],
            [
                'vin_id' => '8',
                'cepag_id' => '5',
                'pourcentage' => 75,
            ],
            [
                'vin_id' => '8',
                'cepag_id' => '6',
                'pourcentage' => 25,
            ],
            [
                'vin_id' => '9',
                'cepag_id' => '7',
                'pourcentage' => 70,
            ],
            [
                'vin_id' => '9',
                'cepag_id' => '8',
                'pourcentage' => 30,
            ],
            [
                'vin_id' => '10',
                'cepag_id' => '9',
                'pourcentage' => 100,
            ],
            [
                'vin_id' => '11',
                'cepag_id' => '10',
                'pourcentage' => 1,
            ],
            [
                'vin_id' => '11',
                'cepag_id' => '1',
                'pourcentage' => 45,
            ],
            [
                'vin_id' => '11',
                'cepag_id' => '2',
                'pourcentage' => 36,
            ],
            [
                'vin_id' => '11',
                'cepag_id' => '3',
                'pourcentage' => 18,
            ],
            [
                'vin_id' => '12',
                'cepag_id' => '11',
                'pourcentage' => 100,
            ],
            [
                'vin_id' => '13',
                'cepag_id' => '12',
                'pourcentage' => 100,
            ],
            [
                'vin_id' => '14',
                'cepag_id' => '12',
                'pourcentage' => 100,
            ],
        ]);
    }
}

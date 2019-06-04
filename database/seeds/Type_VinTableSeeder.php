<?php

use Illuminate\Database\Seeder;

class Type_VinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_vin')->insert([
            [
                'vin_id' => '1',
                'type_id' => '1'
            ],
            [
                'vin_id' => '2',
                'type_id' => '1'
            ],
            [
                'vin_id' => '3',
                'type_id' => '1'
            ],
            [
                'vin_id' => '4',
                'type_id' => '1'
            ],
            [
                'vin_id' => '5',
                'type_id' => '1'
            ],
            [
                'vin_id' => '6',
                'type_id' => '1'
            ],
            [
                'vin_id' => '7',
                'type_id' => '3'
            ],
            [
                'vin_id' => '8',
                'type_id' => '3'
            ],
            [
                'vin_id' => '9',
                'type_id' => '1'
            ],
            [
                'vin_id' => '10',
                'type_id' => '2'
            ],
            [
                'vin_id' => '11',
                'type_id' => '1'
            ],
            [
                'vin_id' => '12',
                'type_id' => '1'
            ],
            [
                'vin_id' => '13',
                'type_id' => '2'
            ],
            [
                'vin_id' => '14',
                'type_id' => '2'
            ],
        ]);
    }
}

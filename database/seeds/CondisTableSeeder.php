<?php

use Illuminate\Database\Seeder;

class CondisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('condis')->insert([
        [
            'type' => 'bois',
            'nombre' => '12',
        ],
        [
            'type' => 'bois',
            'nombre' => '6'
        ],
        [
            'type' => 'carton',
            'nombre' => '12'
        ],
        [
            'type' => 'carton',
            'nombre' => '6'
        ],
        ]);
    }
}

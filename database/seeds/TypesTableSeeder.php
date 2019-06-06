<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            [
                'type' => 'Vin rouge',
            ],
            [
                'type' => 'Vin blanc',
            ],
            [
                'type' => 'Vin mousseux',
            ],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class FrmtsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frmts')->insert([
            [
                'quantite' => '75 cl',
            ],
            [
                'quantite' => '70 cl', 
            ],
            [
                'quantite' => '37,5 cl',
            ],
            [
                'quantite' => 'Magnums (1,5 l)',
            ],
            ]);
    }
}

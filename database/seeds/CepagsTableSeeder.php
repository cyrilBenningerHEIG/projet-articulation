<?php

use Illuminate\Database\Seeder;

class CepagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cepags')->insert([
        [    
            'nom' => 'Merlot',
        ],
        [
            'nom' => 'Cabernet Sauvignon', 
        ],
        [
            'nom' => 'Cabernet Franc',
        ],
        [
            'nom' => 'Petit Verdot',
        ],
        [
            'nom' => 'Pinot Noir',
        ],
        [
            'nom' => 'Chardonnay',
        ],
        [
            'nom' => 'Grenache',
        ],
        [
            'nom' => 'Syrah',
        ],
        [
            'nom' => 'Greco',
        ],
        [
            'nom' => 'Carmenère',
        ],
        [
            'nom' => 'Tempranillo',
        ],
        [
            'nom' => 'Chasselas',
        ],
        ]);
    }
}

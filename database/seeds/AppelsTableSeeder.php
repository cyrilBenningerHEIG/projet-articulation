<?php

use Illuminate\Database\Seeder;

class AppelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appels')->insert([
            [
                'libelle' => 'autre',
            ],
            [
                'libelle' => 'Haut-Médoc',
            ],
            [
                'libelle' => 'Châteauneauf-du-Pape', 
            ],
            [
                'libelle' => 'Médoc', 
            ],
            [
                'libelle' => 'Yvorne Chablais', 
            ],
            [
                'libelle' => 'Greco di Tufo', 
            ],
            
        ]);
    }
}

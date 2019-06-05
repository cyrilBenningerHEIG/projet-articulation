<?php

use Illuminate\Database\Seeder;

class PromopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promops')->insert([
            [
                'libelle' => 'Promo Test',
                'pourcentage' => 25,
                'dateDebut' => '2019-06-02 00:00:00',
                'dateFin' => '2019-07-02 00:00:00'
            ],
            [
                'libelle' => 'Promo vinaigre',
                'pourcentage' => 75,
                'dateDebut' => '2019-06-02 00:00:00',
                'dateFin' => '2019-07-02 00:00:00'
            ],
        ]);
    }
}

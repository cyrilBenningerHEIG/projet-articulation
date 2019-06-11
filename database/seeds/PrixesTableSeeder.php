<?php

use Illuminate\Database\Seeder;

class PrixesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prixes')->insert([
            [
                'prixht' => 36,
            ],
            [
                'prixht' => 15,
            ],
            [
                'prixht' => 16,
            ],
            [
                'prixht' => 26,
            ],
            [
                'prixht' => 22,
            ],
            [
                'prixht' => 64,
            ],
            [
                'prixht' => 55,
            ],
            [
                'prixht' => 16,
            ],
            [
                'prixht' => 25,
            ],
            [
                'prixht' => 30,
            ],
            [
                'prixht' => 29.50,
            ],
            [
                'prixht' => 55,
            ],
            [
                'prixht' => 13,
            ],
            [
                'prixht' => 6,
            ],
            [
                'prixht' => 86,
            ],
            [
                'prixht' => 26,
            ],
            [
                'prixht' => 105,
            ],
        ]);
    }
}

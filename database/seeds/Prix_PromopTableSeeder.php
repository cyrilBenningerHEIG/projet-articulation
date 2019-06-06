<?php

use Illuminate\Database\Seeder;

class Prix_PromopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prix_promop')->insert([
            [
                'prix_id' => '7',
                'promop_id' => '1',
            ],
            [
                'prix_id' => '13',
                'promop_id' => '2',
            ],
            [
                'prix_id' => '14',
                'promop_id' => '2',
            ],
        ]);
    }
}

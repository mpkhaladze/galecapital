<?php

use Illuminate\Database\Seeder;

class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('prices')->insert([
            'black_home' => 460,
            'white_home' => 560,
            'black_comercial' => 760,
            'white_comercial' => 860,
        ]);
    }
}

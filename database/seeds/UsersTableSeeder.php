<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'malkhaz pkhaladze',
            'email' => 'geomalkhazpkhaladze@gmail.com',
            'password' => bcrypt('mariam2017'),
        ]);
    }
}

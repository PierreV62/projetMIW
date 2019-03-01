<?php

use Illuminate\Database\Seeder;

class villeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'cp' => '05000',
            'nom' => 'Gap',
            'longitude' => '6.0833',
            'latitude' => '44.5667',
        ]);
    }
}

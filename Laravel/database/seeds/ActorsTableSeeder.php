<?php

use Illuminate\Database\Seeder;
use App\Actor;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Actor::create([
            'name' => 'Kevin Spacey'
        ]);

        Actor::create([
            'name' => 'John Doe'
        ]);

        Actor::create([
            'name' => 'Will Smith'
        ]);

        Actor::create([
            'name' => 'Samuel L Jacson'
        ]);

        Actor::create([
            'name' => 'Bryan Cranston'
        ]);

        Actor::create([
            'name' => 'Acteur Defilm'
        ]);

        foreach (App\Episode::get() as $episode) {
            $episode->actors()->attach(rand(1,5));
        }
    }
}

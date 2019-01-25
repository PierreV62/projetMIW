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
            'name' => 'Paul',
            'email' => 'paulghz@gmail.com',
            'password' => bcrypt('aaaaaa')
        ]);

        DB::table('users')->insert([
            'name' => 'Pierre',
            'email' => 'pierre@gmail.com',
            'password' => bcrypt('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'Jack',
            'email' => 'jack@gmail.com',
            'password' => bcrypt('ini01')
        ]);

        foreach (App\Role::get() as $role) {
            $role->users()->attach(rand(1,2));
        }
    }
}

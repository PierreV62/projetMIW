<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin'
        ]);

        Role::create([
            'name' => 'moderator'
        ]);

        foreach (App\Permission::get() as $permission) {
            $permission->roles()->attach(rand(1,2));
        }
    }
}

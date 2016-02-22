<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Permission;
use App\Role;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        // TestDummy::times(20)->create('App\Post');
        $permisosAdmin = Permission::all();


            $role = new Role();
            $role->name = 'main admin';
            $role->display_name = 'Main Administrator'; // optional
            $role->description = 'User is allowed to manage and edit other users'; // optional
            $role->save();

            foreach ($permisosAdmin as $permiso) {
                $role->attachPermission($permiso);
            }
    }
}

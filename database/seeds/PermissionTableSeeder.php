<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Permission;
// composer require laracasts/testdummy

use Laracasts\TestDummy\Factory as TestDummy;

class PermissionTableSeeder extends Seeder
{
    public function run()
    {
        $actions = ['see', 'details', 'delete', 'create', 'edit'];
        $modules = [ 'forums', 'publications', 'users', 'departments','permissions','roles'];

        foreach ($modules as $module) {
            foreach ($actions as $action) {
                $permiso = new Permission();
                $permiso->name = $action . '_' . $module;
                $permiso->display_name = $action . ' ' . $module;
                $permiso->save();
            }
        }
        // TestDummy::times(20)->create('App\Post');
    }
}

<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Facades\DB;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
       $user = User::create([
            'name'=>'admin',
            'code'=>'20112078035',
            'birth'=>'1994-06-04',
            'email'=>'cris940604@hotmail.com',
            'password'=>\Hash::make('123456'),
            'department_id'=>'1'
        ]);

        $role = Role::where('name','<>','main admin')->get()->first();

        $user->attachRole($role);

    }
}

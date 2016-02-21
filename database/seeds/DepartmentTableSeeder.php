<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class DepartmentTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        DB::table('departments')->insert([
            'name'=>'prueba'
        ]);
    }
}

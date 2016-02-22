<?php

use Illuminate\Database\Seeder;
use Faker\factory as Faker;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class SubjectTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

        $faker = Faker::create(); //Llamar metodo estatico de una la clase

        foreach(range(1,10) as $index){
            DB::table('subjects')->insert([
                'name'=> $faker->sentence($nbWords = 6)
            ]);
        }


    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\factory as Faker;
use App\User;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class PublicationTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        $faker = Faker::create();
        $subject = DB::table('subjects')->lists('id');
        $user = User::all()->lists('id');

        foreach(range(1,100)as $index){
            DB::table('publications')->insert([
                'name'=> $faker->sentence($nbWords = 2),
                'subtitle'=>$faker->sentence($nbWords = 3),
                'body'=>$faker->paragraph($nbSentences = 3),
                'user_id'=>$faker->randomElement($user),
                'subject_id'=>$faker->randomElement($subject)
            ]);

        }



    }
}

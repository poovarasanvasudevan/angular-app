<?php

use Illuminate\Database\Seeder;

class UserSeeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        $faker = Faker\Factory::create();


        for ($i = 0; $i < 50; $i++) {
            $loc = new \App\Location();
            $loc->name = $faker->country;
            $loc->code = $faker->countryCode;
            $loc->save();
        }

        for ($i = 0; $i < 10000; $i++) {
            $user = new \App\User();
            $user->name = $faker->name;
            $user->email = 'test' . $i . '@example.com';
            $user->password = md5("password");
            $user->dob = $faker->date("Y-m-d");
            $user->location = \App\Location::first();
            $user->avatar = $faker->imageUrl(50, 50);
            $user->settings = [
                'theme' => 'blue'
            ];
            $user->save();
        }
    }
}

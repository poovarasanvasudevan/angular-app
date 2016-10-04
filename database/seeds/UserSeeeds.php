<?php

use App\FriendRequest;
use App\User;
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
            $user = new User();
            $user->first_name = $faker->firstName;
            $user->last_name = $faker->lastName;
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

        $from = User::whereEmail('test1@example.com')->first();
        for ($i = 0; $i < 50; $i++) {
            $user_id = $i + 3;
            $dest = User::whereEmail('test' . $user_id . '@example.com')->first();

            $fr = new FriendRequest();
            $fr->from_id = $dest->id;
            $fr->to_id = $from->id;
            $fr->status = false;
            $fr->block = false;
            $fr->save();

        }
    }
}

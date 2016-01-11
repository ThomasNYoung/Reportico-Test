<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$this->createFakerUser();
	}

	
    protected function createFakerUser()
    {
        $faker = Faker::create();
        for($i = 1; $i < 50; $i++) {
            $user = new User();
            $user->first_name = $faker->firstName;
            $user->last_name = $faker->lastName;
            $user->email = $faker->email;
            $user->hire_date = $faker->date($format = 'Y-m-d');
            $user->password = $faker->password;
            $user->save();
        }
    }


}
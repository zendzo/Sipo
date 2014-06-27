<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			User::create([
                'username'  => $faker->userName,
                'email'  => $faker->email,
                'occupation'    => $faker->word,
                'password'  => Hash::make($faker->word)
			]);
		}
	}

}
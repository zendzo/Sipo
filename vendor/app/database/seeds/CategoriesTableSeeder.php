<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 25) as $index)
		{
			Categories::create([
                'name' => $faker->sentence(4),
                'user_id' => $faker->randomDigitNotNull
			]);
		}
	}

}
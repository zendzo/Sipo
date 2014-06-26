<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProjectsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			Projects::create([
                'title' =>  $faker->sentence(5),
                'description'   =>  $faker->paragraph(3),
                'user_id'   =>  $faker->randomDigitNotNull,
                'categories_id' => $faker->randomDigitNotNull,
                'duration'      => $faker->randomNumber(),
                'completed' => $faker->boolean()
			]);
		}
	}

}
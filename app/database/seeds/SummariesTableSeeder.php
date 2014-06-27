<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SummariesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 500) as $index)
		{
			Summaries::create([
                'name'=> $faker->sentence(),
                'duration'=>$faker->randomNumber(),
                'start'=>$faker->dateTime,
                'finish'=>$faker->dateTime,
                'project_id'=>$faker->randomDigitNotNull
			]);
		}
	}

}
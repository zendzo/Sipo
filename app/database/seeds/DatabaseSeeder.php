<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');    //10 user
        $this->call('CategoriesTableSeeder');   //50 category
        $this->call('ProjectsTableSeeder');     //100 project
        $this->call('SummariesTableSeeder');    //500 summary
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSummariesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('summaries', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->integer('duration');
            $table->string('start','10');
            $table->string('finish','10');
            $table->integer('project_id');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('summaries');
	}

}

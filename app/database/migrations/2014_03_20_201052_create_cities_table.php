<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//create cities table
		Schema::create('cities', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('province');
			$table->bigInteger('population');
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
		//drop cities table
		Schema::drop('cities');
	}

}

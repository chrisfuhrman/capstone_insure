<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLifeRFQTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('life_rfq', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('dob');
            $table->string('gender');
            $table->string('coverage_amount');
            $table->string('coverage_duration');
            $table->string('smoker');
            $table->string('cholesterol');
            $table->string('blood_pressure');
            $table->string('drugs');

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
		Schema::drop('life_rfq');
	}

}

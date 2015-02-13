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
            $table->string('gender');
        // should we label this DOB different than the DOB in the User Table???
            $table->string('dob');
            $table->string('coverage_amount');
            $table->string('coverage_duration');
            $table->string('smoking_status');
            $table->string('health_class');

			$table->timestamps();

            // $table->integer('life_rfq_id')->unsigned()->nullable();
            // $table->foreign('life_rfq_id')->references('id')->on('rfq');
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRFQResultsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rfq_results', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('insurance_carrier');
			$table->string('financial_rating');
			$table->string('premium_mode');
			$table->string('monthly_premium')->nullabe();
			$table->string('yearly_premium');
			$table->timestamps();

            $table->integer('rfq_id')->unsigned();
            $table->foreign('rfq_id')->references('id')->on('rfq');
		
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rfq_results');
	}

}

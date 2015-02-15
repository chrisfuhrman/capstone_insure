
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRFQTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rfq', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
            $table->string('zip');
			$table->timestamps();

			$table->morphs('insurance');

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users'); //Is this right syntax for nullable?
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rfq');
	}

}

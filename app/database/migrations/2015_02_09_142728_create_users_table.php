<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('users', function(Blueprint $table) {
                  $table->increments('id');
                  $table->string('username')->unique();
                  $table->string('password');
                  $table->rememberToken();

                  $table->string('email')->unique();
                  $table->string('first_name');
                  $table->string('middle_name');
                  $table->string('last_name');
                  $table->date('dob');
                  $table->string('gender', 1);

                  $table->string('home_phone');
                  $table->string('work_phone');
                  
                  $table->string('address');
                  $table->string('address2');
                  $table->string('city');
                  $table->string('state');
                  $table->string('zip');

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
		Schema::drop('users');
	}

}

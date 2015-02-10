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
                  $table->string('username', 64)->unique();
                  $table->string('password', 255);
                  $table->string('remember_token', 100);
                  // $table->rememberToken();

                  $table->string('email');
                  // should EMAIL be unique as well, assuming we aren't logging in with it?
                  $table->string('firstname');
                  $table->string('middlename');
                  $table->string('lastname');
                  $table->date('dob');

                  $table->string('phone');
                  $table->string('street1');
                  $table->string('street2');
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

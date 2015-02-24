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
                  $table->string('first_name')->nullable();
                  $table->string('middle_name')->nullable();
                  $table->string('last_name')->nullable();
                  $table->string('maiden_name')->nullable();
                  $table->date('dob')->nullable();
                  $table->string('gender', 1)->nullable();

                  $table->string('home_phone')->nullable();
                  $table->string('work_phone')->nullable();
                  
                  $table->string('address')->nullable();
                  $table->string('address2')->nullable();
                  $table->string('city')->nullable();
                  $table->string('state')->nullable();
                  $table->string('zip')->nullable();

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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePolicyAppsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		// WHICH COLUMNS WILL GO 
		// IN THE life_policy_app table????
		Schema::create('policy_apps', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('middle_name')->nullabe();
			$table->string('last_name');
			$table->string('maiden_name')->nullabe();
			$table->string('gender');
			$table->string('dob');
			$table->string('ssn');
			$table->string('address');
			$table->string('address2')->nullable();
			$table->string('city');
			$table->string('state');
			$table->string('zip');
			$table->string('length_of_residence');
			$table->string('work_phone')->nullable();
			$table->string('home_phone');
			$table->string('birth_state');
			$table->string('birth_country');
			$table->string('citizen');
			$table->string('visa');
			$table->string('date_of_entry');
			$table->string('country_of_citizenship');
			$table->string('marital_status');
			$table->string('id_number');
			$table->string('id_state');
			$table->string('occupation');
			$table->string('annual_income');
			$table->string('total_net_worth');
			$table->string('emp_name');
			$table->string('emp_status');
			$table->string('emp_address');
			$table->string('emp_address_city');
			$table->string('emp_address_state');
			$table->string('emp_address_zip');
			$table->string('emp_nature_buisness');
			$table->string('length_of_emp');
			$table->string('tobacco');
			$table->string('cigs_last_used');
			$table->string('cig_amount');
			$table->string('cigs_frequency');
			$table->string('cigars_last_used');
			$table->string('cigar_amount');
			$table->string('cigar_frequency');
			$table->string('other_last_used');
			$table->string('other_amount');
			$table->string('other_frequency');
			$table->string('beneficiary_trust');
			$table->string('primary_name');
			$table->string('primary_relationship');
			$table->string('primary_share');
			$table->string('primary_ssn');
			$table->string('primary_dob');
			$table->string('');
			$table->string('');
			$table->string('');
			$table->string('');
			$table->string('');
			$table->string('');
			$table->string('');
			$table->string('');
			$table->string('');

			$table->timestamps();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
		
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('policy_apps');
	}

}

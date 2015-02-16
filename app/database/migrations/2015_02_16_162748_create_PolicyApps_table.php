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
			$table->string('primary_2_name');
			$table->string('primary_2_relationship');
			$table->string('primary_2_share');
			$table->string('primary_2_ssn');
			$table->string('primary_2_dob');
			$table->string('primary_remarks');
			$table->string('contingent_name');
			$table->string('contingent_relationship');
			$table->string('contingent_share');
			$table->string('contingent_ssn');
			$table->string('contingent_dob');
			$table->string('contingent_2_name');
			$table->string('contingent_2_relationship');
			$table->string('contingent_2_share');
			$table->string('contingent_2_ssn');
			$table->string('contingent_2_dob');
			$table->string('contingent_remarks');
			$table->string('owner');
			// Trust
			$table->string('trust_name');
			$table->string('trust_id');
			$table->string('trustee_name');
			$table->string('trust_id');
			$table->string('trustee_name');
			$table->string('date_of_trust');
			$table->string('trust_address');
			$table->string('trust_address2');
			$table->string('trust_city');
			$table->string('trust_state');
			$table->string('trust_zip');
			$table->string('trust_phone');
			// Owner is "Other than proposed insured or trust"
			$table->string('other_owner_name');
			$table->string('other_owner_relationship');
			$table->string('other_owner_dob');
			$table->string('other_owner_id');
			$table->string('other_owner_address');
			$table->string('other_owner_address2');
			$table->string('other_owner_city');
			$table->string('other_owner_state');
			$table->string('other_owner_zip');
			$table->string('other_owner_phone');
			$table->string('other_contingent_remarks');
			// if owner is not proposed insured 
			// and is a business
			$table->string('business');
			$table->string('business_website');
			$table->string('business_email');
			// Payor Section
			$table->string('payor');
			$table->string('other_payor_name');
			$table->string('other_payor_relationship');
			$table->string('other_payor_address');
			$table->string('other_payor_city');
			$table->string('other_payor_state');
			$table->string('other_payor_zip');
			$table->string('other_payor_phone');
			$table->string('other_payor_email');
			
			$table->string('');
			$table->string('');
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

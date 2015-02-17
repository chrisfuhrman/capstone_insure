<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePolicyAppsTable extends Migration
{

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
			$table->engine = 'MyISAM';
			$table->increments('id');
			$table->string('first_name');
			$table->string('middle_name')->nullable();
			$table->string('last_name');
			$table->string('maiden_name')->nullable();
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
			$table->string('visa')->nullable();
			$table->string('date_of_entry')->nullable();
			$table->string('country_of_citizenship')->nullable();
			$table->string('marital_status');
			$table->string('id_number');
			$table->string('id_state');
			$table->string('occupation');
			$table->string('annual_income');
			$table->string('total_net_worth');
			$table->string('emp_status')->nullable();
			$table->string('emp_name')->nullable();
			$table->string('emp_address')->nullable();
			$table->string('emp_address_city')->nullable();
			$table->string('emp_address_state')->nullable();
			$table->string('emp_address_zip')->nullable();
			$table->string('emp_nature_buisness')->nullable();
			$table->string('length_of_emp')->nullable();
			$table->string('tobacco');
			$table->string('cigs_last_used')->nullable();
			$table->string('cig_amount')->nullable();
			$table->string('cigs_frequency')->nullable();
			$table->string('cigars_last_used')->nullable();
			$table->string('cigar_amount')->nullable();
			$table->string('cigar_frequency')->nullable();
			$table->string('other_last_used')->nullable();
			$table->string('other_amount')->nullable();
			$table->string('other_frequency')->nullable();
			$table->string('beneficiary_trust');
			$table->string('primary_name')->nullable();
			$table->string('primary_relationship')->nullable();
			$table->string('primary_share')->nullable();
			$table->string('primary_ssn')->nullable();
			$table->string('primary_dob')->nullable();
			$table->string('primary_2_name')->nullable();
			$table->string('primary_2_relationship')->nullable();
			$table->string('primary_2_share')->nullable();
			$table->string('primary_2_ssn')->nullable();
			$table->string('primary_2_dob')->nullable();
			$table->string('primary_remarks')->nullable();
			$table->string('contingent_name')->nullable();
			$table->string('contingent_relationship')->nullable();
			$table->string('contingent_share')->nullable();
			$table->string('contingent_ssn')->nullable();
			$table->string('contingent_dob')->nullable();
			$table->string('contingent_2_name')->nullable();
			$table->string('contingent_2_relationship');
			$table->string('contingent_2_share')->nullable();
			$table->string('contingent_2_ssn')->nullable();
			$table->string('contingent_2_dob')->nullable();
			$table->string('contingent_remarks')->nullable();
			$table->string('owner');
			// Trust
			$table->string('trust_name')->nullable();
			$table->string('trust_id')->nullable();
			$table->string('trustee_name')->nullable();
			$table->string('date_of_trust')->nullable();
			$table->string('trust_address')->nullable();
			$table->string('trust_address2')->nullable();;
			$table->string('trust_city')->nullable();
			$table->string('trust_state')->nullable();
			$table->string('trust_zip')->nullable();
			$table->string('trust_phone')->nullable();
			// Owner is "Other than proposed insured or trust"
			$table->string('other_owner_name')->nullable();
			$table->string('other_owner_relationship')->nullable();
			$table->string('other_owner_dob')->nullable();
			$table->string('other_owner_id')->nullable();
			$table->string('other_owner_address')->nullable();
			$table->string('other_owner_address2')->nullable();
			$table->string('other_owner_city')->nullable();
			$table->string('other_owner_state')->nullable();
			$table->string('other_owner_zip')->nullable();
			$table->string('other_owner_phone')->nullable();
			$table->string('other_contingent_remarks')->nullable();
			// if owner is not proposed insured 
			// and is a business
			$table->string('business');
			$table->string('business_website')->nullable();
			$table->string('business_email')->nullable();
			// Payor Section
			$table->string('payor');
			$table->string('other_payor_name')->nullable();
			$table->string('other_payor_relationship')->nullable();
			$table->string('other_payor_address')->nullable();
			$table->string('other_payor_city')->nullable();
			$table->string('other_payor_state')->nullable();
			$table->string('other_payor_zip')->nullable();
			$table->string('other_payor_phone')->nullable();
			$table->string('other_payor_email')->nullable();
			
	
			$table->string('payment_method')->nullable();
			$table->string('payment_frequency')->nullable();
			$table->string('loaned_financed_payment');
			$table->string('payor_remarks');
			$table->string('date_to_save_age');
			$table->string('specific_policy_date');
			$table->string('policy_date');
			$table->string('additional_benifits');
			$table->string('description_additional');
			$table->string('amount_additional');
			$table->string('pending_insurance');
			$table->string('intend_to_accept');
			$table->string('policy_in_force');
			$table->string('policy_in_force_extra_space');
			$table->string('policy_in_force_remarks');
			$table->string('other_insurance_company');
			$table->string('other_insurance_policy_number');
			$table->string('other_insurance_face_amount');
			$table->string('other_insurance_business');
			$table->string('other_insurance_issue_date');
			$table->string('other_insurance_replacing');
			$table->string('other_insurance_beneficiary');
			// $table->string('other_insurance_company');
			// $table->string('other_insurance_policy_number');
			// $table->string('other_insurance_face_amount');
			// $table->string('other_insurance_business');
			// $table->string('other_insurance_issue_date');
			// $table->string('other_insurance_replacing');
			// $table->string('other_insurance_more_fields');
			// $table->string('other_insurance_company3');
			$table->string('other_insurance_policy_number3');
			$table->string('other_insurance_face_amount3');
			$table->string('other_insurance_business3');
			$table->string('other_insurance_issue_date3');
			$table->string('other_insurance_replacing3');
			$table->string('other_insurance_beneficiary3');
			$table->string('other_insurance_company4');
			$table->string('other_insurance_policy_number4');
			$table->string('other_insurance_face_amount4');
			$table->string('other_insurance_business4');
			$table->string('other_insurance_issue_date4');
			$table->string('other_insurance_replacing4');
			$table->string('other_insurance_beneficiary4');
			$table->string('other_insurance_company5');
			$table->string('other_insurance_policy_number5');
			$table->string('other_insurance_face_amount5');
			$table->string('other_insurance_business5');
			$table->string('other_insurance_issue_date5');
			$table->string('other_insurance_replacing5');
			$table->string('other_insurance_beneficiary5');
			$table->string('other_insurance_additional');
			// $table->string('other_insurance_remarks');
			$table->string('application_issues');
			$table->string('application_remarks');
			$table->string('updating_existing_insurance');
			$table->string('change_ownership_of_policy');
			$table->string('other_insurance_remarks');
			$table->string('incentive_to_purchase');
			$table->string('incentive_remarks');
			$table->string('assigned_to_third_party');
			$table->string('third_party_remarks');
			$table->string('received_inducement');
			$table->string('received_inducement_remarks');
			$table->string('additional_income');
			$table->string('additional_income_remarks');
			$table->string('criminal_history');
			$table->string('criminal_history_remarks');
			$table->string('driving_history');
			$table->string('driving_history_remarks');
			$table->string('dwi_dui_offense');
			$table->string('military_service');
			$table->string('military_service_remarks');
			$table->string('pilots_license');
			$table->string('extreme_activites');
			$table->string('foreign_travel');
			$table->string('foreign_travel_remarks');
			$table->string('insurance_purpose');
			$table->string('face_amount_reason');
			$table->string('credit_history');
			$table->string('type_bankrupty_and_date');
			$table->string('gross_earned_income');
			$table->string('gross_unearned_income');
			$table->string('insured_self_supporting');
			$table->string('in_force_insurance');
			$table->string('relationship_to_insured_financial');
			$table->string('current_assests');
			$table->string('current_liabilities');
			$table->string('current_gross_sales');
			$table->string('current_net_income');
			$table->string('current_fmv');
			$table->string('previous_assests');
			$table->string('previous_liabilities');
			$table->string('previous_gross_sales');
			$table->string('previous_net_income');
			$table->string('previous_fmv');
			$table->string('time_business_established');
			$table->string('percentage_of_ownership');
			$table->string('others_insured');
			$table->string('others_insured_remarks');
			$table->string('business_credit_history');
			$table->string('business_credit_history_remarks');
			$table->string('company_website')->nullable();


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

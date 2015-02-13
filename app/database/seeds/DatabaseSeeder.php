<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('RolesTableSeeder');
		$this->call('RFQTableSeeder');
		$this->call('LifeRFQTableSeeder');
		$this->call('RFQResultsTableSeeder');

	}

}

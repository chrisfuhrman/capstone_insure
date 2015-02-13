<?php

class RolesTableSeeder extends Seeder {


	public function run()
	{
		$roles = 
			[
			'user',
			'admin',
			'marketing',
			'customer_support',
			'executive'
			];
		
		foreach ($roles as $role) {
		 	
			Role::create([

		    	'name' => $role

			]);

		}	

	}

}
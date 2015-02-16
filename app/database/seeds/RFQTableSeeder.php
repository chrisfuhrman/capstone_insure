<?php

use Faker\Factory as Faker;

class RFQTableSeeder extends Seeder {

	public function run()

	{
		$faker = Faker::create();

		foreach (range(1, 20) as $index)
		{
			$insurance_type = $faker->numberBetween($min = 1, $max = 2);
            if ($insurance_type == 1) {
            	$insurance_type = 'life_rfq';
            } else {
            	$insurance_type = 'disability_rfq';
			}
			RFQ::create([

	            'first_name' => $faker->name,
	            'zip' => $faker->postcode,
	            'user_id' => $faker->numberBetween($min = 1, $max = 20),

	            'insurance_id' => $faker->numberBetween($min = 1, $max = 20),
	            'insurance_type' => $insurance_type

			]);
		}



	}

}
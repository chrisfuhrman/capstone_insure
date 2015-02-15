<?php

use Faker\Factory as Faker;

class LifeRFQTableSeeder extends Seeder {


	public function run()
	{
		
		$faker = Faker::create();

		foreach (range(1, 20) as $index)
		{

			$gender = $faker->numberBetween($min = 0, $max = 1);
            if ($gender == 0) {
            	$gender = 'm';
            } else {
            	$gender = 'f';
            }

			$smoker = $faker->numberBetween($min = 0, $max = 1);
			if ($smoker == 0) {
            	$smoker = 'no';
            } else {
            	$smoker = 'yes';
            }


			LifeRFQ::create([

	        	'gender' => $gender,
		        'dob' => $faker->dateTimeThisCentury->format('Y-m-d'),
	            'coverage_amount' => $faker->numberBetween($min = 250000, $max = 2000000),
	        	'coverage_duration' => $faker->numberBetween($min = 10, $max = 30),
	        	'smoker' => $smoker,
				'cholesterol' => $faker->numberBetween($min = 0, $max = 1),
				'blood_pressure' => $faker->numberBetween($min = 0, $max = 1),
				'drugs' => $faker->numberBetween($min = 0, $max = 1)

			]);

		}	

	}

}
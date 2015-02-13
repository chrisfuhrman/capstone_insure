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

			$smoking_status = $faker->numberBetween($min = 0, $max = 1);
			if ($smoking_status == 0) {
            	$smoking_status = 'non-smoker';
            } else {
            	$smoking_status = 'smoker';
            }

			$health_class = $faker->numberBetween($min = 0, $max = 3);
			if ($health_class == 0) {
            	$health_class = 'preferred plus';
            } elseif ($health_class == 1) {
            	$health_class = 'preferred';
			} elseif ($health_class == 2) {
            	$health_class = 'regular plus';
	        } else {
            	$health_class = 'regular';
            }

			LifeRFQ::create([

	        	'gender' => $gender,
		        'dob' => $faker->dateTimeThisCentury->format('Y-m-d'),
	            'coverage_amount' => $faker->numberBetween($min = 250000, $max = 2000000),
	        	'coverage_duration' => $faker->numberBetween($min = 10, $max = 30),
	        	'smoking_status' => $smoking_status,
	            'health_class' => $health_class

				// 'life_rfq_id' => $faker->numberBetween($min = 1, $max = 20)

			]);

		}	

	}

}
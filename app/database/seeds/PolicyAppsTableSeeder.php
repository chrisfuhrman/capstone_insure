<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PolicyAppsTableSeeder extends Seeder 
{	
	public function run()
	{
		$faker = Faker::create();

		foreach (range(1, 20) as $index)
		{
			$policy_status = $faker->numberBetween($min = 1, $max = 4);
            if ($policy_status == 1) {
            	$policy_status = 'draft';
            } elseif ($policy_status == 2) {
            	$policy_status = 'submitted';
			} elseif ($policy_status == 3) {
            	$policy_status = 'pending';
			} else {
				$policy_status = 'approved';
			}			

			$policy_in_force = $faker->numberBetween($min = 1, $max = 2);
            if ($policy_in_force == 1) {
            	$policy_in_force = 'yes';
            } else {
				$policy_in_force = 'no';
			}

			$duration = $faker->numberBetween($min = 1, $max = 3);
            if ($duration == 1) {
            	$duration = '10';
            } elseif ($duration == 2) {
            	$duration = '15';
			} else {
            	$duration = '30';
			} 

			Policy::create([

	            'first_name' => $faker->firstName,
	            'last_name' => $faker->lastName,
	            'maiden_name' => $faker->lastName,
	            // 'dob' => $faker->dateTimeThisCentury->format('Y-m-d'), 
	            // 'gender' => $faker->numberBetween($min = 0, $max = 1),
	            // 'home_phone' => $faker->phoneNumber,
	            // 'address' => $faker->streetAddress,
	            // 'address2' => $faker->secondaryAddress,
	            // 'city' => $faker->city,
	            // 'state' => $faker->stateAbbr,
	            // 'zip' => $faker->postcode,
				'coverage_amount' => $faker->numberBetween($min = 250000, $max = 1500000),
				'coverage_duration' => $faker->numberBetween($min = 10, $max = 30),
				'yearly_premium' => $faker->numberBetween($min = 420, $max = 1800),
				'monthly_premium' => $faker->numberBetween($min = 35, $max = 150),
				
				'policy_rev' => $faker->numberBetween($min = 420, $max = 1800),
				
				'policy_in_force' => $policy_in_force,
				'policy_status' => $policy_status,
				// DATES
				'date_approved' => $faker->dateTimeThisYear($max = 'now'),

				'user_id'=> $faker->numberBetween($min = 1, $max = 20)


			]);
		}



	}

}
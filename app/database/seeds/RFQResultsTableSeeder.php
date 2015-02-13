<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RFQResultsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 20) as $index)

		{
			$insurance_carrier = $faker->numberBetween($min = 0, $max = 3);
			if ($insurance_carrier == 0) {
            	$insurance_carrier = 'AIG Life';
            } elseif ($insurance_carrier == 1) {
            	$insurance_carrier = 'ING Life';
			} elseif ($insurance_carrier == 2) {
            	$insurance_carrier = 'Banner Life';
	        } else {
            	$insurance_carrier = 'Transamerica';
            }			

            $financial_rating = $faker->numberBetween($min = 0, $max = 3);
			if ($financial_rating == 0) {
            	$financial_rating = 'A++';
            } elseif ($financial_rating == 1) {
            	$financial_rating = 'A--';
			} elseif ($financial_rating == 2) {
            	$financial_rating = 'A';
	        } else {
            	$financial_rating = 'B++';
            }

			RFQResult::create([
				
				'insurance_carrier' => $insurance_carrier,
				'financial_rating' => $financial_rating,
				'premium_mode' => $faker->numberBetween($min = 0, $max = 1),
				'monthly_premium' => $faker->numberBetween($min = 35, $max = 90),
				'yearly_premium' => $faker->numberBetween($min = 300, $max = 750),

				'rfq_id' => $faker->numberBetween($min = 1, $max = 20)
			]);
		}
	}
}
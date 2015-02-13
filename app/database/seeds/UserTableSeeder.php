<?php	

use Faker\Factory as Faker;

// Faker\Provider\en_NZ\Phone

// $faker->addProvider(new Faker\Provider\en_US\Person($faker));
// $faker->addProvider(new Faker\Provider\en_US\Address($faker));
// $faker->addProvider(new Faker\Provider\en_US\Company($faker));
// $faker->addProvider(new Faker\Provider\Lorem($faker));
// $faker->addProvider(new Faker\Provider\Internet($faker));

class UserTableSeeder extends Seeder 
{
	public function run()
	{

	// $faker = new Faker();
	// $faker->addProvider(new Faker\Provider\en_NZ\Phone($faker));


	$faker = Faker::create();

		foreach (range(1, 20) as $index)
		{
			User::create([
	            'username' => $faker->unique->username,
	            'password' => Hash::make($faker->word),
	            'email' => $faker->email,
	            'first_name' => $faker->firstName,
	            'middle_name' => $faker->firstName,
	            'last_name' => $faker->lastName,
	            'dob' => $faker->dateTimeThisCentury->format('Y-m-d'), 
	            // should we label this DOB different than the DOB in the RFQ Table???
	            'gender' => $faker->numberBetween($min = 0, $max = 1),
	            'home_phone' => $faker->phoneNumber,
	            'work_phone' => $faker->phoneNumber,
	            'address' => $faker->streetAddress,
	            'address2' => $faker->secondaryAddress,
	            'city' => $faker->city,
	            'state' => $faker->stateAbbr,
	            'zip' => $faker->postcode
			]);
		}

	}

}
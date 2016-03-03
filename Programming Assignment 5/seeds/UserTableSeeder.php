<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$faker = Faker\Factory::create();
	
	$limit = 20;
	
	for ($i = 0; $i < $limit; $i++) {
	    DB::table('users')->insert([ //,
	    'name' => $faker->name,
	    'email' => $faker->safeEmail,
            'password' => $faker->password,

	    ]);
	}

    }
}

<?php

use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
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
            DB::table('locations')->insert([
            'title' => $faker->sentence,
	    'sotry' => $faker->text,
            'published' => $faker->boolean,
            ]);
        }

    }
}

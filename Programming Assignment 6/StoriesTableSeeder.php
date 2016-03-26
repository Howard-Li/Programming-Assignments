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

        $limit = 3;   //each location is seeded with $limit stories
        $num_of_locatoins = 10;        
        $total_stories = $limit * $num_of_locatoins;

        for ($i = 0; $i < $total_stories; $i++) {
            DB::table('stories')->insert([
            'title' => $faker->sentence,
            'story' => $faker->text,
            'published' => $faker->boolean,
            'location_id' => $i/$limit + 1 ,
            ]);
        }

    }
}

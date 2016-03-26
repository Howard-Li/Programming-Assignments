<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
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
            //DB::table('tags')->insert([
            //'value' => $faker->word,
            //]);
        }
        
        $stories = App\Story::get();
        foreach ($stories as $story){
            //attach 3 random tags to each story
            $numbers = range(1, 20);
            shuffle($numbers);
            $story->tags()->attach($numbers[0]);
            $story->tags()->attach($numbers[1]);
            $story->tags()->attach($numbers[2]);
            
        }

    }
}

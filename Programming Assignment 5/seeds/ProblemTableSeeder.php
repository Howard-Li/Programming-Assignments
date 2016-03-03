<?php

use Illuminate\Database\Seeder;

class ProblemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('problems')->insert([
            'title' => 'Two Sum',
            'category' => 'algo',
            'easiness' => 'easy',
	    'content' => 'Given an array of integers, return indices of the two numbers such that they add up to a specific target.

You may assume that each input would have exactly one solution. 

The function name is twoSum and it takes two parameters: an array of int and a target int value.

Example: Given nums = [2, 7, 11, 15], target = 9, because nums[0] + nums[1] = 2 + 7 = 9, you should return the indices [0, 1].',
            'testcases' => '[2, 7, 11, 15], 9, [0, 1]; [1,2,3,4,5,6,7], 13, [5,6]',
	    'hint' => 'hashmap',
	
	]);
    }
}

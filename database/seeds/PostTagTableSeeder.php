<?php 

use Illuminate\Database\Seeder;


/**
 * PostTagTableSeeder
 */
class PostTagTableSeeder extends Seeder
{
	
	public function run()
	{
		for ($i = 1; $i <= 10; $i++) 
		{

			DB::table('post_tag')->insert([
				'post_id' => $i,
				'tag_id' => rand(12, 21)
			]);

			
		}
	}
}
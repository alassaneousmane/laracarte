<?php 

use Illuminate\Database\Seeder;

/**
 * TagsTableSeeder
 */
class TagsTableSeeder extends Seeder
{
	public function run()
	{
		// Supprime le contenu de la table tags s'il existe qqch dedans
		DB::table('tags')->delete();

		for ($i = 0; $i < 10; $i++) 
		{
			DB::table('tags')->insert([
				'tag' => 'tag '. $i,
				'tag_url' => 'tag ' . $i,
			]);
		}
	}
}
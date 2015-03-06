<?php

class CcardsEditionsRaritiesTableSeeder extends Seeder {

    public function run()
	{
		for($i = 0; $i < 100; ++$i)
		{
			DB::table('c_cards_editions_rarities')->insert(array(
					'cardId' => 1,
					'editionId' => rand(1, 6),
					'rarityId' => rand(1, 5)
				));
		}
	}
}
<?php

class CardTableSeeder extends Seeder {

    public function run()
	{
		for($i = 0; $i < 100; ++$i)
		{
			DB::table('cards')->insert(array(
					'name' => 'Cartes ' . $i,
					'text' => 'boboobobl' . $i,
					'number' => rand(0, 1000),
					'threshold' => rand(1, 10),
					'cost' => rand(1, 10),
					'life' => rand(1, 10),
					'speed' => rand(1, 10),
					'structure' => rand(1, 3),
					'typeId' => rand(1, 6),
					'tradeId' => rand(1, 6)
				));
		}
	}
}
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCCardsEditionsRaritiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('c_cards_editions_rarities', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('cardId')->unsigned();
			$table->integer('editionId')->unsigned();
			$table->integer('rarityId')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('c_cards_editions_rarities');
	}

}

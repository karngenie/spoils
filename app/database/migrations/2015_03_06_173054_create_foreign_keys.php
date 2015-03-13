<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Schema::table('cards', function(Blueprint $table) {
		// 	$table->foreign('typeId')->references('id')->on('c_types')
		// 				->onDelete('restrict')
		// 				->onUpdate('restrict');
		// });


		// Schema::table('c_cards_editions_rarities', function(Blueprint $table) {
		// 	$table->foreign('cardId')->references('id')->on('cards')
		// 				->onDelete('restrict')
		// 				->onUpdate('restrict');
		// });		


		// Schema::table('c_cards_editions_rarities', function(Blueprint $table) {
		// 	$table->foreign('editionId')->references('id')->on('c_editions')
		// 				->onDelete('restrict')
		// 				->onUpdate('restrict');
		// });

		// Schema::table('c_cards_editions_rarities', function(Blueprint $table) {
		// 	$table->foreign('rarityId')->references('id')->on('c_rarities')
		// 				->onDelete('restrict')
		// 				->onUpdate('restrict');
		// });	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}

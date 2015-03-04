<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('cards', function(Blueprint $table) {
		$table->increments('id');
		$table->string('name',150);
		$table->string('subType',150);
		$table->string('text', 4000);
		$table->string('notes', 350);
		$table->integer('number')->unsigned();
		$table->integer('threshold')->unsigned();
		$table->integer('cost')->unsigned();
		$table->integer('life')->unsigned();
		$table->integer('speed')->unsigned();
		$table->integer('structure')->unsigned();
		$table->integer('typeId')->unsigned();
		$table->integer('tradeId')->unsigned();
		$table->integer('editionID')->unsigned();
		$table->integer('rarityID')->unsigned();

	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cards');
	}

}

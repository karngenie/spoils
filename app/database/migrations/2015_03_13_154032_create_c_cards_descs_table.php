<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCCardsDescsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('c_cards_descs', function(Blueprint $table) {

			$table->integer('cardId')->unsigned();	
			$table->string('lang',10);
			$table->string('name',150);
			$table->string('subType',150);
			$table->string('text', 4000);
			$table->string('notes', 350);			
			$table->string('visual', 350);			
			$table->primary(array('cardId', 'lang'));
			$table->timestamps();


		});
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

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCTradesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('c_trades', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name',150);
			$table->integer('rank')->unsigned();
			$table->boolean('isVisible')->default(true);

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('c_trades');
	}

}

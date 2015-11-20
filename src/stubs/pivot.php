<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class {{class}} extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('{{pivotTableName}}', function(Blueprint $table)
		{
			$table->integer('{{columnOne}}_id')->unsigned()->index();
			$table->foreign('{{columnOne}}_id')->references('id')->on('{{tableOne}}')->onDelete('cascade');
			$table->integer('{{columnTwo}}_id')->unsigned()->index();
			$table->foreign('{{columnTwo}}_id')->references('id')->on('{{tableTwo}}')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('{{pivotTableName}}');
	}

}

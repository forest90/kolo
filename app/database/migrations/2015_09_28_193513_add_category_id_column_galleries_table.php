<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCategoryIdColumnGalleriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('galleries', function(Blueprint $table)
		{
			$table->integer('category_id')->unsigned()->nullable()->after('id');

			$table->foreign('category_id')->references('id')->on('gallery_categories');

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('galleries', function(Blueprint $table)
		{
			$table->dropColumn('category_id');
			
		});
	}

}

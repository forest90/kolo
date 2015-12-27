<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddNickAvatarIdColumnToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->tinyInteger('avatar_id')->after('password')->nullable();

			$table->foreign('avatar_id')->references('photos')->on('id');

			$table->string('nick')->after('id')->nullable();
			
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->dropColumn('avatar_id');
			$table->dropColumn('nick');

		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddUserIdToManagementNotificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('management_notifications', function(Blueprint $table)
		{
			$table->tinyInteger('user_id')->nullable();
			
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('management_notifications', function(Blueprint $table)
		{
			$table->dropColumn('user_id');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;

class AlterUsersTableAddColumnRememberToken extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('users', function($table){
			$table->string('remember_token', 255)->nullable()->index();
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
		Schema::table('users', function($table){
			$table->dropColumn('remember_token');
		});
	}

}
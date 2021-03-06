<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->increments("id");

            $table->string("username")
                ->nullable()
                ->default(null);

            $table->string("password")
                ->nullable()
                ->default(null);

            $table->string("email")
                ->nullable()
                ->default(null);

            $table->timestamp("created_at")
                ->nullable()
                ->default(null);

            $table->timestamp("updated_at")
                ->nullable()
                ->default(null);
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user', function(Blueprint $table)
		{
			Schema::dropIfExists("user");
		});
	}

}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function (Blueprint $table) {
			$table->id();
			$table->char("title");
			$table->char("author", 100);
			$table->text("text");
			$table->char("category");
			$table->text("original_source")->nullable();
			$table->char("img");
			$table->char("slug");
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
		Schema::dropIfExists('posts');
	}
}

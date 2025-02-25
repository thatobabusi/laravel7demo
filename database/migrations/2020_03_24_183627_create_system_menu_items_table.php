<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSystemMenuItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if (!Schema::hasTable('system_menu_items')) {
            Schema::create('system_menu_items', function (Blueprint $table) {
                $table->unsignedBigInteger('id', true);
                $table->unsignedBigInteger('order')->nullable();
                $table->string('title', 191);
                $table->string('url_link', 191);
                $table->unsignedBigInteger('page_id')->nullable();
                $table->string('type', 191);
                $table->string('route', 191);
                $table->string('icon', 191);
                $table->string('permissions', 191);
                $table->string('parent_id', 191)->nullable()->default('(NULL)');
                $table->string('has_children', 191);
                $table->timestamps();
                $table->softDeletes();
            });
        }
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('system_menu_items');
	}

}

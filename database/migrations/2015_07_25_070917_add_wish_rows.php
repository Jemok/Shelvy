<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWishRows extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('wish_products', function($table)
        {
            $table->string('product_name');
            $table->string('product_description');
            $table->decimal('product_price');


        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('wish_products', function($table)
        {
            $table->dropColumn('product_name');
            $table->dropColumn('product_description');
            $table->dropColumn('product_price');

        });
	}

}

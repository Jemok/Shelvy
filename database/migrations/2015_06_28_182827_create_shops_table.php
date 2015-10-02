<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->index()->unsigned();
            $table->text('shop_name');
            $table->longText('shop_description');
            $table->string('slug')->unique();
            $table->text('shop_location');
            $table->text('shop_building');
            $table->text('shop_category');
            $table->text('shop_street');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shops');
    }

}

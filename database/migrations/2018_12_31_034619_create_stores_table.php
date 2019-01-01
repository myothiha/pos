<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('location_id');
            $table->unsignedInteger('item_id');
            $table->integer('quantity');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('location_id')
                ->references('id')->on('locations');

            $table->foreign('item_id')
                ->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}

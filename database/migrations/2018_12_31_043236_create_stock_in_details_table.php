<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockInDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_in_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('stock_in_id');
            $table->unsignedInteger('item_id');
            $table->integer('quantity');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('stock_in_id')
                ->references('id')->on('stock_ins');

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
        Schema::dropIfExists('stock_in_details');
    }
}

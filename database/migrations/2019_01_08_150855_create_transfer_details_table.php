<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('transfer_id');
            $table->unsignedInteger('item_id');
            $table->unsignedInteger('quantity');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('transfer_id')
                ->references('id')->on('transfers');

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
        Schema::dropIfExists('transfer_details');
    }
}

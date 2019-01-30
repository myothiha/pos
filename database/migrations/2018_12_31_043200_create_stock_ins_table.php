<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_ins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('voucherNo');
            $table->unsignedInteger('location_id');
            $table->unsignedInteger('supplier_id');
            $table->text('remark')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('location_id')
                ->references('id')->on('locations');

            $table->foreign('supplier_id')
                ->references('id')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_ins');
    }
}

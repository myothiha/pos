<?php

use App\Constants;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('voucherNo');
            $table->string('processType')->default(Constants::TRANSFER);
            $table->string('saleType')->default(Constants::CASH_DOWN);
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('location_id');
            $table->integer('totalAmount');
            $table->integer('paid');
            $table->integer('balance');
            $table->text('remark')->nullable();
            $table->string('isPaid')->default(Constants::TRUE);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('customer_id')
                ->references('id')->on('customers');

            $table->foreign('location_id')
                ->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('employee_id');
            $table->unsignedInteger('item_id');
            $table->unsignedInteger('itemQty');
            $table->string('paint');
            $table->string('tinker');
            $table->string('liker');
            $table->string('referenceId');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('employee_id')
                ->references('id')->on('employees');

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
        Schema::dropIfExists('repairs');
    }
}

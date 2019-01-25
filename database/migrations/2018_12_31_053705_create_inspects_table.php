<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspects', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('issue_id')->nullable();
            $table->unsignedInteger('item_id')->nullable();
            $table->unsignedInteger('employee_id');
            $table->unsignedInteger('acceptQty');
            $table->unsignedInteger('rejectQty');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('employee_id')
                ->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inspects');
    }
}

<?php

use App\Constants;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('itemCode');
            $table->unsignedInteger('type_id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('color_id');
            $table->text('remark')->nullable();
            $table->unsignedTinyInteger('isActive')->default(Constants::TRUE);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('type_id')
                ->references('id')->on('types');

            $table->foreign('category_id')
                ->references('id')->on('categories');

            $table->foreign('color_id')
                ->references('id')->on('colors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}

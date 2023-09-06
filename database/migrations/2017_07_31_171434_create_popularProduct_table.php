<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePopularProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popularproduct', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name',300);
            $table->integer('category');
            $table->string('quantity');
            $table->string('serial_number');
            $table->text('description');
            $table->double('price');
            $table->string('image',300);
            $table->string('admin_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('popularProduct');
    }
}

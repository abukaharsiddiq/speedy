<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',150);
            $table->string('eamil',200);
            $table->string('mobile',80);
            $table->string('designation',250);
            $table->string('facebook');
            $table->string('twitter');
            $table->string('google_pluz');
            $table->string('inlink');
            $table->text('description');
            $table->string('image',200);
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
        Schema::dropIfExists('customer');
    }
}

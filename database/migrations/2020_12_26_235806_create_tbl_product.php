<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->Increments('id')->unsigned();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->string('content')->nullable();
            $table->integer('status');
            $table->timestamps();
            $table->integer('idcat')->unsigned()->nullable();
            $table->foreign('idcat')->references('id')->on('tbl_category');
            $table->integer('idbrand')->unsigned()->nullable();
            $table->foreign('idbrand')->references('id')->on('tbl_brand');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_product');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mens', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('parent_name')->nullable();
            $table->string('urlMain')->nullable();
            $table->string('urlMy')->nullable();
            $table->integer('degree')->nullable();
            $table->string('imgSrc')->nullable();
            $table->text('description')->nullable();
            $table->string('imgInnerSrc')->nullable();
            $table->text('partCode')->nullable();
            $table->text('stockCode')->nullable();
            $table->string('thumbnailSrc')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mens');
    }
}

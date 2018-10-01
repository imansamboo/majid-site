<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContentAddToContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mens', function (Blueprint $table) {
            //
            $table->text('partCode')->nullable();
            $table->text('stockCode')->nullable();
            $table->text('description')->nullable();
            $table->text('thumnailSrc')->nullable();
            $table->text('imgSrc')->nullable();
            $table->text('imgInnerSrc')->nullable();
            $table->text('header')->nullable();
            $table->integer('degree')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contents', function (Blueprint $table) {
            //
        });
    }
}

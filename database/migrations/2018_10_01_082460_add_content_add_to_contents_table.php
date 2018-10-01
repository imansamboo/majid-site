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
            $table->text('partCode');
            $table->text('stockCode');
            $table->text('description');
            $table->text('thumnailSrc');
            $table->text('imgSrc');
            $table->text('imgInnerSrc');
            $table->text('header');
            $table->integer('degree');
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

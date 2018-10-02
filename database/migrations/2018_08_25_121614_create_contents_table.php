<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('men_id')->unsigned()->nullable();
            $table->string('content_src')->nullable();
            $table->text('content_header')->nullable();
            $table->text('content_partstock')->nullable();
            $table->longText('content_li')->nullable();
            $table->longText('content_spec')->nullable();
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contents');
    }
}

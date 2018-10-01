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
        Schema::table('contents', function (Blueprint $table) {
            //
            $table->string('content_src');
            $table->text('content_header');
            $table->text('content_partstock');
            $table->longText('content_li');
            $table->longText('content_spec');
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

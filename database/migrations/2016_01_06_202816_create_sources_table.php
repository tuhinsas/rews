<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sources', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name',128);
            $table->string('type',64);
            $table->string('url',256);
            $table->boolean('autograb')->default(true);
            $table->enum('status',['published','hidden'])->default('published');
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
        Schema::drop('sources');
    }
}

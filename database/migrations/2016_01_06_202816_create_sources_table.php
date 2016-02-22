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
            $table->integer('limit')->default(10)->unsigned();
            $table->boolean('autograb')->default(true);
            $table->enum('status',['published','hidden'])->default('published');
            $table->timestamps();
        });

        Schema::create('category_source', function (Blueprint $table) {

            $table->integer('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('categories')->ondelete('cascade');

            $table->integer('source_id')->unsigned()->index();
            $table->foreign('source_id')->references('id')->on('sources')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('category_source');
        Schema::drop('sources');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemcrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemcr', function (Blueprint $table) {

            $table->integer('article_id1')->unsigned()->index();
            $table->integer('article_id2')->unsigned()->index();
            $table->double('relation',10,8);

            $table->primary(['article_id1', 'article_id2']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('itemcr');
    }
}

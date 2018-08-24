<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostFileTable extends Migration
{
    public function up()
    {
        Schema::create('post_file', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned();
            $table->integer('file_id')->unsigned();
            $table->timestamps();

            $table->foreign('post_id')
                ->references('id')
                ->on('posts')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('file_id')
                ->references('id')
                ->on('files')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('post_file');
    }
}

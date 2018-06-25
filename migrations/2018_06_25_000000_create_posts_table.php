<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('uuid', 36);
                $table->string('title', 2000)->index();
                $table->string('slug');
                $table->text('html');
                $table->text('amp');
                $table->string('author_id');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

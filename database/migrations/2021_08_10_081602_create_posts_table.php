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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('author')->unsigned();
            $table->string('title', 300);
            $table->smallInteger('type');
            $table->text('text')->nullable();
            $table->string('file_path', 200)->nullable();
            $table->string('url', 200)->nullable();
            $table->integer('rating')->default(1);
            $table->integer('comments_num')->default(0);
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
        Schema::dropIfExists('posts');
    }
}

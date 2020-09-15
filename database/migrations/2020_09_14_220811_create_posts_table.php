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
            Schema::create('post', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('users_id');
                $table->foreign('users_id')
                    ->references('id')
                    ->on('users');

                $table->text('image_path');
                $table->string('title');
                $table->longText('content');
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

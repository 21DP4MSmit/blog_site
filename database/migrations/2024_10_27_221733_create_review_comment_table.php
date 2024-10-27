<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewCommentTable extends Migration
{
    public function up()
    {
        Schema::create('review_comment', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('review_id')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('review_comment');
    }
}

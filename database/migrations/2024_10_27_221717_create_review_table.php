<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTable extends Migration
{
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('image_file')->nullable();
            $table->longText('description')->nullable();
            $table->string('meta_description', 500)->nullable();
            $table->string('meta_keyword', 500)->nullable();
            $table->tinyInteger('is_publish')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('is_deleted')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('review');
    }
}

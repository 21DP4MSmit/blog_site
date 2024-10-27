<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTagsTable extends Migration
{
    public function up()
    {
        Schema::create('review_tags', function (Blueprint $table) {
            $table->id();
            $table->integer('review_id')->nullable();
            $table->string('name')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('review_tags');
    }
}

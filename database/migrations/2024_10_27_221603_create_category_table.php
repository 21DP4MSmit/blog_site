<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('title')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description', 1000)->nullable();
            $table->string('meta_keyword')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0:inactive, 1:active');
            $table->tinyInteger('is_menu')->default(0);
            $table->tinyInteger('is_deleted')->default(0)->comment('0:not deleted, 1:deleted');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category');
    }
}

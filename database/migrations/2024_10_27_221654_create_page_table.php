<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageTable extends Migration
{
    public function up()
    {
        Schema::create('page', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('page');
    }
}

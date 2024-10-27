<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('remember_token', 100)->nullable();
            $table->string('profile_picture')->nullable();
            $table->tinyInteger('is_admin')->default(0)->comment('0:user, 1:admin');
            $table->tinyInteger('status')->default(0)->comment('0:inactive, 1:active');
            $table->tinyInteger('is_delete')->default(0)->comment('0:not deleted, 1:deleted');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}

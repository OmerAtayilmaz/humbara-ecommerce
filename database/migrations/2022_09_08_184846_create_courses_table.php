<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title');
            $table->enum('lang',["TR","EN"]);
            $table->string('description');
            $table->string('keywords');
            $table->string('video_url');
            $table->longtext('content');
            $table->string('slug');
            $table->foreignId('course_owner')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('category_id');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
};

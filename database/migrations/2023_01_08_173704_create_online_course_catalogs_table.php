<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_course_catalogs', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId("course_id")->references("id")->on("courses")->onDelete("cascade");
            $table->enum("status",["active","deleted"])->default("active");
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
        Schema::dropIfExists('online_course_catalogs');
    }
};

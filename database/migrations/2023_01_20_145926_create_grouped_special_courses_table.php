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
        Schema::create('special_courses', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId("course_id")->nullable();
            $table->enum("category",["all-course","best-course","latest-course","special-course","off-course"]);
            $table->enum("status",['active','deleted','inactive']);
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
        Schema::dropIfExists('special_courses');
    }
};

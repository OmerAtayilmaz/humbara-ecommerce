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
        Schema::create('course_categories', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId("creator_id");
            $table->ipAddress("creator_ip");
            $table->foreignId("parent_id")->default(0);
            $table->string("title_en",100)->default(null);
            $table->string("title_tr",100)->default(null);
            $table->string("keywords_en",100);
            $table->string("keywords_tr",100);
            $table->string("content_tr",255);
            $table->string("content_en",255);
            $table->string("slug_en")->unique();
            $table->string("slug_tr")->unique();
            $table->longText("description_en");
            $table->longText("description_tr");
            $table->string("image");
            $table->string("type",75);
            $table->enum("status",["ACTIVE","PASSIVE","DELETED"])->default("PASSIVE");
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
        Schema::dropIfExists('course_categories');
    }
};

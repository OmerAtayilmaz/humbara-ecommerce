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
        Schema::create('themes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId("updated_by")->reference('id')->on('users');
            $table->string('primary_color');
            $table->string('secondary_color');
            $table->string('dark_color');
            $table->string('light_color');
            $table->string('text_color');
            $table->string('title_font');
            $table->string('text_font');
            $table->enum("status", ["ACTIVE", "PASSIVE","DELETED"])->default("ACTIVE");
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
        Schema::dropIfExists('themes');
    }
};

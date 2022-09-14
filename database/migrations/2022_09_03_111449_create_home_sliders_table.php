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
        Schema::create('home_sliders', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId("user_id")->references("id")->on("users");
            $table->ipAddress("creator_device_ip");
            $table->string('title');
            $table->string('subtitle');
            $table->integer('priority')->default(0);
            $table->string('image');
            $table->string('button_text');
            $table->string('button_link')->default("#");
            $table->enum('status',["ACTIVE","PENDING","INACTIVE","DELETED"])->default('ACTIVE');
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
        Schema::dropIfExists('home_sliders');
    }
};

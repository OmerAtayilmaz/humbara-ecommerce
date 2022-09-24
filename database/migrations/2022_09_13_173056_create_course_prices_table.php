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
        Schema::create('course_prices', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->string('cheap_pr_title');
            $table->string('cheap_price');
            $table->string('expensive_pr_title');
            $table->string('expensive_price');
            $table->string('campains');
            $table->string('campains_price');
            $table->enum('type',['CAMPAINS','NORMAL','OFF']); // gösterilecek fiyat tipi, kampanya ve normal
            $table->enum("status", ["ACTIVE", "INACTIVE","DELETED"])->default("active");
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
        Schema::dropIfExists('course_prices');
    }
};

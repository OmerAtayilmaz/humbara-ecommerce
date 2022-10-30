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
        Schema::create('top_banners', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->longtext('title_en',255);
            $table->longtext('title_tr',255);
            $table->longtext('text_en',255);
            $table->longtext('text_tr',255);
            $table->enum('status',["ACTIVE","PASSIVE","DELETED"]);
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
        Schema::dropIfExists('top_banners');
    }
};

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
        Schema::create('settings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            //genel bilgiler
            $table->string("c_name");
            $table->string("c_keywords");
            $table->text("c_description");
            $table->string("c_logo");
            $table->string("c_favicon");

            //iletişim
            $table->string("c_email");
            $table->string("c_phone");
            $table->string("c_address");

            $table->string("c_facebook");
            $table->string("c_twitter");
            $table->string("c_instagram");
            $table->string("c_youtube");
            $table->string("c_linkedin");
        
            $table->text("about_us");
            $table->text("contact");
            $table->text("references");
            $table->foreignId("updated_by")->references("id")->on("users");
            $table->enum('status',["NEW","UPDATED","DELETED"])->default("NEW");
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
        Schema::dropIfExists('settings');
    }
};

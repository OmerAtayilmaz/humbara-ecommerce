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
        Schema::create('credit_cards', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string("card_name",100);
            $table->foreignId("user_id")->constrained("users")->onDelete("cascade");
            $table->string("card_number");
            $table->string("card_holder_name");
            $table->string("card_expiry_date");
            $table->string("card_cvv");
            $table->enum('status',["ACTIVE","DELETED"])->default("ACTIVE");
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
        Schema::dropIfExists('credit_cards');
    }
};

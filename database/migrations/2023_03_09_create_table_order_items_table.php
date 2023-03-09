<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(){
        Schema::create("order_items", function(Blueprint $table){
            $table->id()->autoIncrement();
            $table->foreignId("order_id")->nullable();
            $table->foreignId("order_item_id")->nullable();
            $table->foreignId("course_id")->nullable();
            $table->foreignId("user_id")->nullable();
            $table->string("course_name")->nullable();
            $table->decimal("total_price")->nullable();
        });
    }
    public function down(){
        Schema::dropIfExists("order_items");
    }
};

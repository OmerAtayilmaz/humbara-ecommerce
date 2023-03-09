<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(){
        Schema::create("orders",function (Blueprint $table){
            $table->id()->autoIncrement();
            $table->foreignId("customer_id")->references("id")->on("users");
            $table->foreignId("order_id")->references("id")->on("order_items");
            $table->timestamps("order_date");
            $table->enum("order_status",["PENDING","PROCESSING","APPROVED","ACTIVE","EXPIRED","REFUNDED","CANCELLED","COMPLETED"]);
            $table->decimal("total_amount")->nullable();
            $table->enum("payment_method",["CREDIT_CARD","DEBIT_CARD","PAYPAL","APPLE_PAY","GOOGLE_PAY","BANK_TRANSFER","GIFT_CARD"])->nullable();
            $table->string("payment_status")->nullable();
        });
    }
    public function down(){
        Schema::dropIfExists("orders");
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('transaction_type_id');
            $table->unsignedBigInteger('payment_method_id');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->float('amount',10,2);
            $table->string('transaction_code');//unutk menyimpan code pada setiap transaksi, jadi setiap transksi terdapat unique code untuk menandai setiap transaksi di sistem
            $table->text('description')->nullable();
            $table->string('status');// status setiap pembayaran
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('transaction_type_id')->references('id')->on('transaction_types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('payment_method_id')->references('id')->on('payment_methodes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};

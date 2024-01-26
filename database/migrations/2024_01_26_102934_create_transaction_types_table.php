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
        Schema::create('transaction_types', function (Blueprint $table) {
            $table->id();
            $table->strng('name');
            $table->strng('code');
            $table->enum('action',['credit','debit']); 
            //credit transaksi yang bisa menambahkan amount/balance di akun kita, maka saldo kita akan bertambah
            //debit transaksi saldo kita akan mengurangi saldo kita
            $table->string('thumbnail')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_types');
    }
};

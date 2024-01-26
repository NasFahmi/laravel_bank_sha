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
        Schema::create('data_plan_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_plan_id');
            $table->foreign('data_plan_id')->references('id')->on('data_plans')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('transaction_id');
            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade')->onUpdate('cascade');
            $table->string('phone_number');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_plan_histories');
    }
};

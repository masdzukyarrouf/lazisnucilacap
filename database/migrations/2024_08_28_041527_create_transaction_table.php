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
        Schema::create('transaction', function (Blueprint $table) {
            $table->integer('id_transaction')->autoIncrement()->primary();
            $table->string('username');
            $table->string('no_telp');
            $table->string('email')->nullable();
            $table->integer('nominal');
            $table->string('snap_token')->nullable();
            $table->integer('order_id')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};

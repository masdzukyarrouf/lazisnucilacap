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
        Schema::create('campaign', function (Blueprint $table) {
            $table->integer('id_campaign')->autoIncrement()->primary();
            $table->string('title');
            $table->text('description');
            $table->integer('goal');
            $table->integer('raised');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('min_donation');
            $table->string('lokasi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaign');
    }
};

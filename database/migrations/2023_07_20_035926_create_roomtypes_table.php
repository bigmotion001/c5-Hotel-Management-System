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
        Schema::create('roomtypes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('adult')->nullable();
            $table->string('child')->nullable();
            $table->string('fare')->nullable();
            $table->string('cancellation_fee')->nullable();
            $table->string('amenities')->nullable();
            $table->string('complements')->nullable();
            $table->string('total_rooms')->nullable();
            $table->string('total_beds')->nullable();
            $table->string('description')->nullable();
            $table->string('cancellation_policy')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roomtypes');
    }
};

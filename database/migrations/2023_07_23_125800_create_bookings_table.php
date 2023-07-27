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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('user')->nullable();
            $table->integer('room_id')->nullable();
            $table->string('booking_id')->nullable();
            $table->string('checking')->nullable();
            $table->string('checkout')->nullable();
            $table->string('amount')->nullable();
            $table->string('total_room')->nullable();
            $table->string('total_adults')->nullable();
            $table->string('total_children')->nullable();
            $table->string('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};

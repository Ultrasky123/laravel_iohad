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
        Schema::create('bme280', function (Blueprint $table) {
            $table->id('event_id');
            $table->decimal('temp', 10, 2);
            $table->decimal('pressure', 10, 2);
            $table->decimal('approximate_altitude', 10, 2);
            $table->decimal('humidity', 10, 2);
            $table->timestamp('inputed_at');
            $table->unsignedBigInteger('sensor_id');
            $table->foreign('sensor_id')->references('sensor_id')->on('sensors');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bme280');
    }
};

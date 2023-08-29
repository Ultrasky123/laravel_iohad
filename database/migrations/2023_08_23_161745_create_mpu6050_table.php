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
        Schema::create('mpu6050_vibrate', function (Blueprint $table) {
            $table->id('event_id');
            $table->decimal('value', 10, 2);
            $table->timestamp('inputed_at', $precision = 0);
            $table->unsignedBigInteger('sensor_id');
            $table->foreign('sensor_id')->references('sensor_id')->on('sensors');
        });

        Schema::create('mpu6050', function (Blueprint $table) {
            $table->id('event_id');
            $table->decimal('temperature', 10, 2);
            $table->decimal('x_acceleration', 10, 2);
            $table->decimal('y_acceleration', 10, 2);
            $table->decimal('z_acceleration', 10, 2);
            $table->decimal('x_rotation', 10, 2);
            $table->decimal('y_rotation', 10, 2);
            $table->decimal('z_rotation', 10, 2);
            $table->timestamp('inputed_at', $precision = 0);
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
        Schema::dropIfExists('mpu6050_vibrate');
        Schema::dropIfExists('mpu6050');
    }
};

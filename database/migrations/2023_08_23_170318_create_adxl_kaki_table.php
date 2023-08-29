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
        Schema::create('adxl_kaki_kanan', function (Blueprint $table) {
            $table->id('event_id');
            $table->decimal('x_axis', 10, 2);
            $table->decimal('y_axis', 10, 2);
            $table->decimal('z_axis', 10, 2);
            $table->timestamp('inputed_at', $precision = 0);
            $table->unsignedBigInteger('sensor_id');
            $table->foreign('sensor_id')->references('sensor_id')->on('sensors');
            // $table->timestamps();
        });

        Schema::create('adxl_kaki_kiri', function (Blueprint $table) {
            $table->id('event_id');
            $table->decimal('x_axis', 10, 2);
            $table->decimal('y_axis', 10, 2);
            $table->decimal('z_axis', 10, 2);
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
        Schema::dropIfExists('adxl_kaki_kanan');
        Schema::dropIfExists('adxl_kaki_kiri');
    }
};

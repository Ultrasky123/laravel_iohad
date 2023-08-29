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
        Schema::create('ky_kanan', function (Blueprint $table) {
            $table->id('event_id');
            $table->decimal('value', 10, 2);
            $table->timestamp('inputed_at', $precision = 0);
            $table->unsignedBigInteger('sensor_id');
            $table->foreign('sensor_id')->references('sensor_id')->on('sensors');
            // $table->timestamps();
        });

        Schema::create('ky_kiri', function (Blueprint $table) {
            $table->id('event_id');
            $table->decimal('value', 10, 2);
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
        Schema::dropIfExists('ky_kanan');
        Schema::dropIfExists('ky_kiri');
    }
};

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
        Schema::create('inmp_kanan', function (Blueprint $table) {
            $table->id('event_id');
            $table->decimal('value', 10, 3);
            $table->timestamp('inputed_at');
            $table->unsignedBigInteger('sensor_id');
            $table->foreign('sensor_id')->references('sensor_id')->on('sensors');
        });

        Schema::create('inmp_kiri', function (Blueprint $table) {
            $table->id('event_id');
            $table->decimal('value', 10, 3);
            $table->timestamp('inputed_at');
            $table->unsignedBigInteger('sensor_id');
            $table->foreign('sensor_id')->references('sensor_id')->on('sensors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inmp_kanan');
        Schema::dropIfExists('inmp_kiri');
    }
};

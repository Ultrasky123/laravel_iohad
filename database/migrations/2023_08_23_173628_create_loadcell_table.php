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
        Schema::create('loadcell_1', function (Blueprint $table) {
            $table->id('event_id');
            $table->decimal('value', 10, 2);
            $table->timestamp('inputed_at', $precision = 0);
            $table->unsignedBigInteger('sensor_id');
            $table->foreign('sensor_id')->references('sensor_id')->on('sensors');
            // $table->timestamps();
        });

        Schema::create('loadcell_2', function (Blueprint $table) {
            $table->id('event_id');
            $table->decimal('value', 10, 2);
            $table->timestamp('inputed_at', $precision = 0);
            $table->unsignedBigInteger('sensor_id');
            $table->foreign('sensor_id')->references('sensor_id')->on('sensors');
            // $table->timestamps();
        });

        Schema::create('loadcell_3', function (Blueprint $table) {
            $table->id('event_id');
            $table->decimal('value', 10, 2);
            $table->timestamp('inputed_at', $precision = 0);
            $table->unsignedBigInteger('sensor_id');
            $table->foreign('sensor_id')->references('sensor_id')->on('sensors');
            // $table->timestamps();
        });

        Schema::create('loadcell_4', function (Blueprint $table) {
            $table->id('event_id');
            $table->decimal('value', 10, 2);
            $table->timestamp('inputed_at', $precision = 0);
            $table->unsignedBigInteger('sensor_id');
            $table->foreign('sensor_id')->references('sensor_id')->on('sensors');
            // $table->timestamps();
        });

        Schema::create('loadcell_5', function (Blueprint $table) {
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
        Schema::dropIfExists('loadcell_1');
        Schema::dropIfExists('loadcell_2');
        Schema::dropIfExists('loadcell_3');
        Schema::dropIfExists('loadcell_4');
        Schema::dropIfExists('loadcell_5');
    }
};

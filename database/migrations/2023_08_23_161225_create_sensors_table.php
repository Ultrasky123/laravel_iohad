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
        Schema::create('sensors', function (Blueprint $table) {
            $table->id('sensor_id');
            $table->string('sensor_name');
            $table->unsignedBigInteger('sensor_type_id')->nullable();
            $table->foreign('sensor_type_id')->references('sensor_type_id')->on('sensor_types');
            // $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensors');
    }
};

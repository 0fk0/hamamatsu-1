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
        if (!Schema::hasTable('reservation_cars')) {
            Schema::create('reservation_cars', function (Blueprint $table) {
                $table->bigIncrements('reservation_car_id');
                $table->foreign('car_id')->references('car_id')->on('cars');
                $table->date('start_date');
                $table->date('end_date');
            });
    
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_cars');
    }
};

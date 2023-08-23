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

        if (!Schema::hasTable('reservations')) {
            Schema::create('reservations', function (Blueprint $table) {
                $table->bigIncrements('reservation_id');
                $table->foreignId('reservation_car_id');
                $table->foreignId('reservation_lecture_id');
                $table->text('name');
                $table->unsignedBigInteger('tel');
                $table->text('mail_address');
                
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};

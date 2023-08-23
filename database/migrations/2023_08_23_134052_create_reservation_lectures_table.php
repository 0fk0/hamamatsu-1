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

        if (!Schema::hasTable('reservation_lectures')) {
            Schema::create('reservation_lectures', function (Blueprint $table) {
                $table->bigIncrements('reservation_lecture_id');
                $table->foreignId('school_id');
                $table->datetime('start_datetime');
                $table->datetime('end_datetime');
                $table->foreignId('lecture_course_id');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecture_reservation_lectures');
    }
};

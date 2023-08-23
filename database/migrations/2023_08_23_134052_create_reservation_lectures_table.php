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
                $table->foreign('school_id')->references('school_id')->on('driving_schools');
                $table->datetime('start_datetime');
                $table->datetime('end_datetime');
                $table->foreign('lecture_course_id')->references('lecture_course_id')->on('lecture_courses');
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

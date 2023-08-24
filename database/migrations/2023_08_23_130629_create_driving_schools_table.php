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
        if (!Schema::hasTable('driving_schools')) {
            Schema::create('driving_schools', function (Blueprint $table) {
                $table->bigIncrements('school_id');
                $table->text('name');
                $table->text('address');
                $table->unsignedBigInteger('tel');

                $table->timestamps();
            });
        }   
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driving_schools');
    }
};

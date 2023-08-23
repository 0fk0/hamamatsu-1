<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return  void
     */

    
    
    public function up(): void
    {
        // "users"テーブルは存在しなかった場合
        if (!Schema::hasTable('cars')) {
            Schema::create('cars', function (Blueprint $table) {
                $table->bigIncrements('car_id');
                $table->text('model');
                $table->integer('capacity');
                $table->text('address');
                $table->decimal('fee', $precision = 8, $scale = 1);
                $table->text('name_owner');
                $table->string('img_path');
                $table->foreign('school_id')->references('school_id')->on('driving_schools');

            });
        }
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};

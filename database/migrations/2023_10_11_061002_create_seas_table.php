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
        Schema::create('seas', function (Blueprint $table) {
            $table->id();
            $table->string('ocean_name', 100);
            $table->string('region', 100)->nullable(false);
            $table->bigInteger('area_sq_km')->unsigned();
            $table->bigInteger('avg_depth')->unsigned();
            $table->string('geomorphology',100)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seas');
    }
};

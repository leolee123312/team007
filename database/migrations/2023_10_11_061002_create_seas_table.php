<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seas', function (Blueprint $table) {
            $table->id()->comment("編號");
            $table->string('ocean_name', 100)->comment("海域");
            $table->string('region', 100)->nullable(false)->comment("地區");
            $table->bigInteger('area_sq_km')->unsigned()->comment("面積(平方千米)");
            $table->bigInteger('avg_depth')->unsigned()->comment("平均深度");
            $table->string('geomorphology',100)->nullable(false)->comment("地貌");
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

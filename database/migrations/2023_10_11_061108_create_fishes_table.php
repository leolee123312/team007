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
        Schema::create('fishes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->unsignedBigInteger('sid');
            $table->unsignedInteger('longest');
            $table->unsignedInteger('shortest');
            $table->date('start');
            $table->date('end');
            $table->unsignedInteger('lightest_weight');
            $table->unsignedInteger('heaviest_weight');
            $table->timestamps();
            $table->foreign('sid')->references('id')->on('seas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fishes');
    }
};

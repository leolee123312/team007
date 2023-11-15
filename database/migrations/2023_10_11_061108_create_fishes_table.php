<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateFishesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fishes', function (Blueprint $table) {
            // ->comment("") 這個是欄位註解
            $table->id()->comment("編號(主鍵)");
            $table->string('name', 255)->comment("魚名");
            $table->foreignId('sid')->comment("海域(外部鍵)");
            $table->foreign('sid')->references('id')->on('seas')->onDelete('cascade');
            // onDelete 連動刪除
            $table->unsignedInteger('longest')->comment("小(厘米)");
            $table->unsignedInteger('shortest')->comment("大(厘米)");
            $table->date('start')->comment("起始(月)");
            $table->date('end')->comment("結束(月)");
            $table->unsignedInteger('lightest_weight')->comment("最輕(磅)");
            $table->unsignedInteger('heaviest_weight')->comment("最重(磅)");
            $table->timestamps();
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

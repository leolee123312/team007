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
       
        Schema::create('device', function (Blueprint $table) {
            $table->id(); // 自增主键
            $table->string('region')->comment("區域");
            $table->Integer('year')->comment("年別");
            $table->Integer('total')->comment("合計");
            $table->Integer('bigeye tuna')->comment("大目鮪");
            $table->Integer('yellow fin tuna')->comment("黃鰭鮪");
            $table->Integer('albacore tuna')->comment("長鰭鮪");
            $table->Integer('bonito')->comment("正鰹");
            $table->Integer('sailfish')->comment("旗魚類");
            $table->Integer('Sharks')->comment("鯊魚類");
            $table->Integer('squid')->comment("魷魚");
            $table->Integer('saury')->comment("秋刀魚");
            $table->timestamps(); // 创建时间和更新时间字段
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device');
    }
};

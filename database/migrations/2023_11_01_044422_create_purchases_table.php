<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id(); // 自增主键
            $table->string('email');
            $table->string('password');
            $table->timestamps(); // 创建时间和更新时间字段
        });
    }

    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}


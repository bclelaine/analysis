<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistinctTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distinct', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('province_code')->default('')->comment('省/直辖市行政区划代码');
            $table->string('city_code')->default('')->comment('城市行政区划代码');
            $table->string('distinct_code')->unique()->default('')->comment('区县行政区划代码');
            $table->string('distinct_name')->default('')->comment('区县行政区划名称');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distinct');
    }
}

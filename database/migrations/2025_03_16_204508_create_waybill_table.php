<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaybillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waybill', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('trade_id')->default('0')->comment('订单id');
            $table->integer('logistics_id')->default('0')->comment('物流公司id');
            $table->string('logistics_no')->unique()->default('')->comment('运单号');
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
        Schema::dropIfExists('waybill');
    }
}

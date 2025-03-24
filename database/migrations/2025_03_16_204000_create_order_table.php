<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('trade_id')->default('0')->comment('订单id');
            $table->integer('goods_id')->default('0')->comment('商品id');
            $table->double('price')->default('0.00')->comment('商品价格');
            $table->integer('number')->default('0')->comment('商品数量');
            $table->double('total_price')->default('0.00')->comment('总价格');
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
        Schema::dropIfExists('order');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->default('0')->comment('分类名称');
            $table->string('name')->default('')->comment('商品名称');
            $table->string('description')->default('')->comment('商品描述');
            $table->integer('store')->default('0')->comment('商品库存');
            $table->integer('sales')->default('0')->comment('商品销量');
            $table->double('original_price')->default('0.00')->comment('商品原价');
            $table->double('price')->default('0.00')->comment('商品现价');
            $table->integer('status')->default('0')->comment('商品状态（0：上架 1：下架）');
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
        Schema::dropIfExists('goods');
    }
}

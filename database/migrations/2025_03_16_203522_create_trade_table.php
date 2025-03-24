<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('platform_id')->default('0')->comment('平台id');
            $table->integer('shop_id')->default('0')->comment('店铺id');
            $table->integer('user_id')->default('0')->comment('用户id');
            $table->string('trade_no')->default('')->unique()->comment('订单号');
            $table->integer('status')->default('0')->comment('订单状态（0：待付款 1：待发货 2：待收货 3：已完成）');
            $table->string('province_code')->default('')->comment('收件人省/直辖市编码');
            $table->string('city_code')->default('')->comment('收件人城市编码');
            $table->string('distinct_code')->default('')->comment('收件人区县编码');
            $table->string('town')->nullable()->comment('收件人乡镇名称');
            $table->string('address')->default('')->comment('收件人详细地址');
            $table->string('mobile')->default('')->comment('收件人手机号');
            $table->double('goods_amount')->default('0.00')->comment('商品金额');
            $table->double('post_amount')->default('0.00')->comment('运费');
            $table->double('total_amount')->default('0.00')->comment('总金额');
            $table->String('waybill_no')->nullable()->comment('运单号');
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
        Schema::dropIfExists('trade');
    }
}

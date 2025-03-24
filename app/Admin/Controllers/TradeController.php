<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Trade;
use App\Models\City;
use App\Models\Distinct;
use App\Models\Platform;
use App\Models\Province;
use App\Models\Shop;
use App\Models\User;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;

class TradeController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(Trade::with(['platform', 'shop', 'user', 'province', 'city', 'distinct']), function (Grid $grid) {
            $grid->column('platform.name', '平台名称');
            $grid->column('shop.name', '店铺名称');
            $grid->column('user.name', '用户姓名');
            $grid->column('trade_no');
            $grid->column('status')->using(\App\Models\Trade::TRADE_STATUS);
            $grid->column('province.province_name', '省/直辖市');
            $grid->column('city.city_name', '城市');
            $grid->column('distinct.distinct_name', '区县');
            $grid->column('town');
            $grid->column('address');
            $grid->column('mobile');
            $grid->column('goods_amount');
            $grid->column('post_amount');
            $grid->column('total_amount');
            $grid->column('waybill_no');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, Trade::with(['platform', 'shop', 'user', 'province', 'city', 'distinct']), function (Show $show) {
            $show->field('platform.name', '平台名称');
            $show->field('shop.name', '店铺名称');
            $show->field('user.name', '用户姓名');
            $show->field('trade_no');
            $show->field('status')->using(\App\Models\Trade::TRADE_STATUS);
            $show->field('province.province_name', '省/直辖市');
            $show->field('city.city_name', '城市');
            $show->field('distinct.distinct_name', '区县');
            $show->field('town');
            $show->field('address');
            $show->field('mobile');
            $show->field('goods_amount');
            $show->field('post_amount');
            $show->field('total_amount');
            $show->field('waybill_no');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Trade(), function (Form $form) {
            $form->select('platform_id', '平台名称')
                ->options(Platform::query()->pluck('name', 'id'))
                ->saving(function ($v) {
                    return (int)$v;
                });
            $form->select('shop_id', '店铺名称')
                ->options(Shop::query()->pluck('name', 'id'))
                ->saving(function ($v) {
                    return (int)$v;
                });
            $form->select('user_id', '用户姓名')
                ->options(User::query()->pluck('name', 'id'))
                ->saving(function ($v) {
                    return (int)$v;
                });
            $form->text('trade_no');
            $form->select('status')->options(['0' => '待付款', '1' => '待发货', '2' => '待收货', '3' => '已完成'])->default('0');
            $form->select('province_code', '省/直辖市')
                ->options(Province::query()->pluck('province_name', 'province_code'))
                ->saving(function ($v) {
                    return (int)$v;
                });
            $form->select('city_code', '城市')
                ->options(City::query()->pluck('city_name', 'city_code'))
                ->saving(function ($v) {
                    return (int)$v;
                });
            $form->select('distinct_code', '区县')
                ->options(Distinct::query()->pluck('distinct_name', 'distinct_code'))
                ->saving(function ($v) {
                    return (int)$v;
                });
            $form->text('town');
            $form->text('address');
            $form->text('mobile');
            $form->text('goods_amount');
            $form->text('post_amount');
            $form->text('total_amount');
            $form->text('waybill_no');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}

<?php

namespace App\Admin\Controllers;

use App\Models\Good;
use App\Models\Order;
use App\Models\Trade;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;

class OrderController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(Order::with(['trade', 'good']), function (Grid $grid) {
            $grid->column('trade.trade_no', '订单号');
            $grid->column('good.name', '商品名称');
            $grid->column('price');
            $grid->column('number');
            $grid->column('total_price');
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
        return Show::make($id, Order::with(['trade', 'good']), function (Show $show) {
            $show->field('trade.trade_no', '订单号');
            $show->field('good.name', '商品名称');
            $show->field('price');
            $show->field('number');
            $show->field('total_price');
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
        return Form::make(Order::with(['trade', 'good']), function (Form $form) {
            $form->select('trade_id', '订单号')
                ->options(Trade::query()->pluck('trade_no', 'id'))
                ->saving(function ($v) {
                    return (int)$v;
                });
            $form->select('goods_id', '商品名称')
                ->options(Good::query()->pluck('name', 'id'))
                ->saving(function ($v) {
                    return (int)$v;
                });
            $form->text('price');
            $form->text('number');
            $form->text('total_price');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}

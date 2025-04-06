<?php

namespace App\Admin\Controllers;

use App\Models\Order;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;
use Illuminate\Support\Facades\DB;

class OrderController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Order(), function (Grid $grid) {
            $grid->model()
                ->join('trade', 'trade.id', '=', 'order.trade_id')
                ->join('goods', 'goods.id', '=', 'order.goods_id')
                ->select('order.id', 'trade.trade_no as trade_no', 'trade.goods_amount as goods_amount', 'goods.name as goods_name',
                    'order.number', 'order.created_at', 'order.updated_at', DB::raw('trade.goods_amount/order.number as price'));
            $grid->column('trade_no', '订单号');
            $grid->column('goods_name', '商品名称');
            $grid->column('price', '商品单价');
            $grid->column('number');
            $grid->column('goods_amount', '商品金额');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('trade_no', '订单号');
            });

            $grid->disableActions();
            $grid->disableRefreshButton();
            $grid->disableCreateButton();
            $grid->disableBatchActions();
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
        return Show::make($id, new Order(), function (Show $show) {
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Order(), function (Form $form) {
        });
    }
}

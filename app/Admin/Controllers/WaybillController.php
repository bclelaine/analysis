<?php

namespace App\Admin\Controllers;

use App\Models\Logistic;
use App\Models\Trade;
use App\Models\Waybill;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;

class WaybillController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(Waybill::with(['trade', 'logistic']), function (Grid $grid) {
            $grid->column('trade.trade_no', '订单号');
            $grid->column('logistic.name', '物流公司名称');
            $grid->column('logistics_no');
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
        return Show::make($id, Waybill::with(['trade', 'logistic']), function (Show $show) {
            $show->field('trade.trade_no', '订单号');
            $show->field('logistics.name', '物流公司名称');
            $show->field('logistics_no');
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
        return Form::make(new Waybill(), function (Form $form) {
            $form->select('trade_id', '订单号')
                ->options(Trade::query()->pluck('trade_no', 'id'))
                ->saving(function ($v) {
                    return (int)$v;
                });
            $form->select('logistics_id', '物流公司名称')
                ->options(Logistic::query()->pluck('name', 'id'))
                ->saving(function ($v) {
                    return (int)$v;
                });
            $form->text('logistics_no');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}

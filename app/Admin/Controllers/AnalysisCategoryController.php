<?php

namespace App\Admin\Controllers;

use App\Models\Trade;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;

class AnalysisCategoryController extends AdminController
{
    protected function grid()
    {
        return Grid::make(new Trade(), function (Grid $grid) {
            $grid->model()
                ->join('order', 'order.trade_id', '=', 'trade.id')
                ->join('goods', 'goods.id', '=', 'order.goods_id')
                ->join('category', 'category.id', '=', 'goods.category_id')
                ->select('goods.id', 'category.name as category_name', DB::raw('COUNT(*) as total'))
                ->groupBy('goods.id')
                ->orderBy('total', 'desc');
            $grid->column('category_name', '分类名称');
            $grid->column('total', '订单数量');

            $grid->disableActions();
            $grid->disableRefreshButton();
            $grid->disableCreateButton();
            $grid->disableBatchActions();
            $grid->export();
            $grid->export()->disableExportSelectedRow();

            $titles = ['category_name' => '分类名称', 'total' => '订单数量'];
            $grid->export()->titles($titles);
            $grid->export()->rows(function ($rows) {
                return $rows;
            })->filename('数据统计-品类分布');
        });
    }
}

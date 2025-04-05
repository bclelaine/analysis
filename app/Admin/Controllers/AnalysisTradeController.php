<?php

namespace App\Admin\Controllers;

use App\Models\Trade;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;

class AnalysisTradeController extends AdminController
{
    protected function grid()
    {
        return Grid::make(new Trade(), function (Grid $grid) {
            $grid->model()
                ->select(DB::raw('DATE(trade.created_at) AS date'),
                    DB::raw('COUNT(*) AS total'))
                ->groupBy('date')
                ->orderBy('total', 'desc');
            $grid->column('date', '日期');
            $grid->column('total', '订单总量');

            $grid->disableActions();
            $grid->disableRefreshButton();
            $grid->disableCreateButton();
            $grid->disableBatchActions();
            $grid->export();
            $grid->export()->disableExportSelectedRow();

            $titles = ['date' => '日期', 'total' => '订单总量'];
            $grid->export()->titles($titles);
            $grid->export()->rows(function ($rows) {
                return $rows;
            })->filename('数据统计-订单总量');
        });
    }
}

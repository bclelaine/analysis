<?php

namespace App\Admin\Controllers;

use App\Models\Waybill;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;

class AnalysisLogisticsController extends AdminController
{
    protected function grid()
    {
        return Grid::make(new Waybill(), function (Grid $grid) {
            $grid->model()
                ->join('logistics', 'logistics.id', '=', 'waybill.logistics_id')
                ->select('logistics.code as logistics_code', 'logistics.name as logistics_name',
                    DB::raw('COUNT(*) as total'))
                ->groupBy('logistics.id')
                ->orderBy('total', 'desc');
            $grid->column('logistics_code', '物流公司编码');
            $grid->column('logistics_name', '物流公司名称');
            $grid->column('total', '发货量');

            $grid->disableActions();
            $grid->disableRefreshButton();
            $grid->disableCreateButton();
            $grid->disableBatchActions();
            $grid->export();
            $grid->export()->disableExportSelectedRow();

            $titles = ['logistics_code' => '物流公司编码', 'logistics_name' => '物流公司名称', 'total' => '发货量'];
            $grid->export()->titles($titles);
            $grid->export()->rows(function ($rows) {
                return $rows;
            })->filename('数据统计-发货物流');
        });
    }
}

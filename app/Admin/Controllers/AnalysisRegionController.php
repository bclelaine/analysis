<?php

namespace App\Admin\Controllers;

use App\Models\Trade;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;

class AnalysisRegionController extends AdminController
{
    protected function grid()
    {
        return Grid::make(new Trade(), function (Grid $grid) {
            $grid->model()
                ->join('province', 'province.province_code', '=', 'trade.province_code')
                ->join('city', 'city.city_code', '=', 'trade.city_code')
                ->join('distinct', 'distinct.distinct_code', '=', 'trade.distinct_code')
                ->select(
                    'province.province_code as new_province_code',
                    'province.province_name as new_province_name',
                    'city.city_code as new_city_code',
                    'city.city_name as new_city_name',
                    'distinct.distinct_code as new_distinct_code',
                    'distinct.distinct_name as new_distinct_name',
                    DB::raw('COUNT(*) as total'))
                ->groupBy('province.province_code', 'city.city_code', 'distinct.distinct_code')
                ->orderBy('total', 'desc');
            $grid->column('new_province_code', '省/直辖市行政区划代码');
            $grid->column('new_province_name', '省/直辖市行政区划名称');
            $grid->column('new_city_code', '城市行政区划代码');
            $grid->column('new_city_name', '城市行政区划名称');
            $grid->column('new_distinct_code', '区县行政区划代码');
            $grid->column('new_distinct_name', '区县行政区划名称');
            $grid->column('total', '订单数量');

            $grid->disableActions();
            $grid->disableRefreshButton();
            $grid->disableCreateButton();
            $grid->disableBatchActions();
            $grid->export();
            $grid->export()->disableExportSelectedRow();

            $titles = [
                'new_province_code' => '省/直辖市行政区划代码',
                'new_province_name' => '省/直辖市行政区划名称',
                'new_city_code' => '城市行政区划代码',
                'new_city_name' => '城市行政区划名称',
                'new_distinct_code' => '区县行政区划代码',
                'new_distinct_name' => '区县行政区划名称',
                'total' => '订单数量'
            ];
            $grid->export()->titles($titles);
            $grid->export()->rows(function ($rows) {
                return $rows;
            })->filename('数据统计-地区分布');
        });
    }
}

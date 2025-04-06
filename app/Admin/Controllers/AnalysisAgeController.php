<?php

namespace App\Admin\Controllers;

use App\Models\Trade;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;

class AnalysisAgeController extends AdminController
{
    protected function grid()
    {
        return Grid::make(new Trade(), function (Grid $grid) {
            $grid->model()
                ->join('users', 'users.id', '=', 'trade.user_id')
                ->select('users.age as users_age', DB::raw('COUNT(*) as total'))
                ->groupBy('users.age')
                ->orderBy('total', 'desc');
            $grid->column('users_age', '用户年龄');
            $grid->column('total', '订单数量');

            $grid->disableActions();
            $grid->disableRefreshButton();
            $grid->disableCreateButton();
            $grid->disableBatchActions();
            $grid->export();
            $grid->export()->disableExportSelectedRow();

            $titles = ['users_age' => '用户年龄', 'total' => '订单数量'];
            $grid->export()->titles($titles);
            $grid->export()->rows(function ($rows) {
                return $rows;
            })->filename('数据统计-年龄分布');
        });
    }
}

<?php

namespace App\Admin\Controllers;

use App\Models\Trade;
use App\Models\User;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;

class AnalysisSexController extends AdminController
{
    protected function grid()
    {
        return Grid::make(new Trade(), function (Grid $grid) {
            $grid->model()
                ->join('users', 'users.id', '=', 'trade.user_id')
                ->select('users.sex as users_sex', DB::raw('COUNT(*) as total'))
                ->groupBy('users.sex')
                ->orderBy('total', 'desc');
            $grid->column('users_sex', '用户性别')->using(User::SEX);
            $grid->column('total', '订单数量');

            $grid->disableActions();
            $grid->disableRefreshButton();
            $grid->disableCreateButton();
            $grid->disableBatchActions();
            $grid->export();
            $grid->export()->disableExportSelectedRow();

            $titles = ['users_sex' => '用户性别', 'total' => '订单数量'];
            $grid->export()->titles($titles);
            $grid->export()->rows(function ($rows) {
                return $rows;
            })->filename('数据统计-性别分布');
        });
    }
}

<?php

namespace App\Admin\Controllers;

use App\Models\Trade;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;

class AnalysisExpenditureController extends AdminController
{
    protected function grid()
    {
        return Grid::make(new Trade(), function (Grid $grid) {
            $grid->model()
                ->join('users', 'users.id', '=', 'trade.user_id')
                ->select('users.id', 'users.name as users_name', 'users.mobile as users_mobile',
                    DB::raw('SUM(trade.total_amount) as total'))
                ->groupBy('users.id')
                ->orderBy('total', 'desc');
            $grid->column('users_name', '用户姓名');
            $grid->column('users_mobile', '联系方式');
            $grid->column('total', '消费支出');

            $grid->disableActions();
            $grid->disableRefreshButton();
            $grid->disableCreateButton();
            $grid->disableBatchActions();
            $grid->export();
            $grid->export()->disableExportSelectedRow();

            $titles = ['users_name' => '用户姓名', 'users_mobile' => '联系方式', 'total' => '消费支出'];
            $grid->export()->titles($titles);
            $grid->export()->rows(function ($rows) {
                return $rows;
            })->filename('数据统计-消费支出');
        });
    }
}

<?php

namespace App\Admin\Controllers;

use App\Models\Good;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;

class AnalysisSalesController extends AdminController
{
    protected function grid()
    {
        return Grid::make(new Good(), function (Grid $grid) {
            $grid->model()
                ->join('category', 'category.id', '=', 'goods.category_id')
                ->select('category.name as category_name', 'goods.name as goods_name', 'goods.sales as goods_sales')
                ->orderBy('goods_sales', 'desc');
            $grid->column('category_name', '分类名称');
            $grid->column('goods_name', '商品名称');
            $grid->column('goods_sales', '商品销量');

            $grid->disableActions();
            $grid->disableRefreshButton();
            $grid->disableCreateButton();
            $grid->disableBatchActions();
            $grid->export();
            $grid->export()->disableExportSelectedRow();

            $titles = ['category_name' => '分类名称', 'goods_name' => '商品名称', 'goods_sales' => '商品销量'];
            $grid->export()->titles($titles);
            $grid->export()->rows(function ($rows) {
                return $rows;
            })->filename('数据统计-商品销量');
        });
    }
}

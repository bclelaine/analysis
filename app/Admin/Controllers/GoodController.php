<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Good;
use App\Models\Category;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;

class GoodController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(Good::with(['category']), function (Grid $grid) {
            $grid->column('category.name', '分类名称');
            $grid->column('name');
            $grid->column('description');
            $grid->column('store');
            $grid->column('sales');
            $grid->column('original_price');
            $grid->column('price');
            $grid->column('status')->using(\App\Models\Good::GOODS_STATUS);
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
        return Show::make($id, Good::with(['category']), function (Show $show) {
            $show->field('category.name', '分类名称');
            $show->field('name');
            $show->field('description');
            $show->field('store');
            $show->field('sales');
            $show->field('original_price');
            $show->field('price');
            $show->field('status')->using(\App\Models\Good::GOODS_STATUS);
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
        return Form::make(new Good(), function (Form $form) {
            $form->select('category_id', '分类名称')
                ->options(Category::query()->pluck('name', 'id'))
                ->saving(function ($v) {
                    return (int)$v;
                });
            $form->text('name');
            $form->text('description');
            $form->text('store');
            $form->text('sales');
            $form->text('original_price');
            $form->text('price');
            $form->radio('status')->options(['0' => '上架', '1' => '下架'])->default('0');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}

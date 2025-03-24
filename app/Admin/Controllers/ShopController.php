<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Shop;
use App\Models\Platform;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ShopController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(Shop::with(['platform']), function (Grid $grid) {
            $grid->column('platform.name', '平台名称');
            $grid->column('name');
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
        return Show::make($id, Shop::with(['platform']), function (Show $show) {
            $show->field('platform.name', '平台名称');
            $show->field('name');
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
        return Form::make(new Shop(), function (Form $form) {
            $form->select('platform_id', '平台名称')
                ->options(Platform::query()->pluck('name', 'id'))
                ->saving(function ($v) {
                    return (int)$v;
                });
            $form->text('name');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}

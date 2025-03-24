<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Province;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;

class ProvinceController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Province(), function (Grid $grid) {
            $grid->column('province_code');
            $grid->column('province_name');
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
        return Show::make($id, new Province(), function (Show $show) {
            $show->field('province_code');
            $show->field('province_name');
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
        return Form::make(new Province(), function (Form $form) {
            $form->text('province_code');
            $form->text('province_name');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}

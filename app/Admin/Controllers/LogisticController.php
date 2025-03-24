<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Logistic;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class LogisticController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Logistic(), function (Grid $grid) {
            $grid->column('code');
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
        return Show::make($id, new Logistic(), function (Show $show) {
            $show->field('id');
            $show->field('code');
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
        return Form::make(new Logistic(), function (Form $form) {
            $form->display('id');
            $form->text('code');
            $form->text('name');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}

<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\User;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;

class UserController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new User(), function (Grid $grid) {
            $grid->column('name');
            $grid->column('mobile');
            $grid->column('email');
            $grid->column('sex')->using(\App\Models\User::SEX);
            $grid->column('age');
            $grid->column('created_at')->sortable();
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
        return Show::make($id, new User(), function (Show $show) {
            $show->field('name');
            $show->field('mobile');
            $show->field('email');
            $show->field('sex')->using(\App\Models\User::SEX);
            $show->field('age');
            $show->field('password');
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
        return Form::make(new User(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->mobile('mobile');
            $form->email('email');
            $form->radio('sex')->options(['0' => '男', '1' => '女'])->default('0');
            $form->text('age');
            $form->password('password');
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}

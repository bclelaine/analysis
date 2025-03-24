<?php

namespace App\Admin\Controllers;

use App\Models\City;
use App\Models\Province;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;

class CityController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(City::with(['province']), function (Grid $grid) {
            $grid->column('province_code');
            $grid->column('province.province_name', '省/直辖市行政区划名称');
            $grid->column('city_code');
            $grid->column('city_name');
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
        return Show::make($id, City::with(['province']), function (Show $show) {
            $show->field('province_code');
            $show->field('province.province_name', '省/直辖市行政区划名称');
            $show->field('city_code');
            $show->field('city_name');
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
        return Form::make(new City(), function (Form $form) {
            $form->select('province_code', '省/直辖市行政区划名称')
                ->options(Province::query()->pluck('province_name', 'province_code'))
                ->saving(function ($v) {
                    return (int)$v;
                });
            $form->text('city_code');
            $form->text('city_name');
        });
    }
}

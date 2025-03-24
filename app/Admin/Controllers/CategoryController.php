<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Dcat\Admin\Form;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Tree;
use Dcat\Admin\Widgets\Form as WidgetForm;
use Dcat\Admin\Widgets\Box;

class CategoryController extends AdminController
{
    public function index(Content $content)
    {
        return $content
            ->title('商品分类')
            ->body(function (Row $row) {
                $row->column(6, $this->treeView()->render());

                $row->column(6, function (Column $column) {
                    $form = new WidgetForm();

                    $form->select('parent_id', '父级')->options(Category::selectOptions());
                    $form->text('name', '名称')->required();

                    $column->append(Box::make('新增', $form));
                });
            });
    }

    protected function treeView()
    {
        return new Tree(new Category(), function (Tree $tree) {
            $tree->disableCreateButton();
            $tree->disableQuickCreateButton();
            $tree->disableEditButton();
            $tree->maxDepth(4);

            $tree->branch(function ($branch) {
                return $branch['name'];
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Category(), function (Form $form) {
            $form->select('parent_id', '父级')
                ->options(Category::selectOptions())
                ->saving(function ($v) {
                    return (int)$v;
                });
            $form->text('name', '名称')->required();
            $form->hidden('order', '排序');
        });
    }
}

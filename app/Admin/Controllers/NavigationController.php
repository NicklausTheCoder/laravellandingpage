<?php

namespace App\Admin\Controllers;

use App\Models\navigation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NavigationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Navigation';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new navigation());

        $grid->column('id', __('Id'));
        $grid->column('label', __('Label'));
        $grid->column('url', __('Url'));
        $grid->column('parent_id', __('Parent id'));
        $grid->column('order', __('Order'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(navigation::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('label', __('Label'));
        $show->field('url', __('Url'));
        $show->field('parent_id', __('Parent id'));
        $show->field('order', __('Order'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new navigation());

        $form->text('label', __('Label'));
        $form->url('url', __('Url'));
        $form->number('parent_id', __('Parent id'));
        $form->number('order', __('Order'));

        return $form;
    }
}

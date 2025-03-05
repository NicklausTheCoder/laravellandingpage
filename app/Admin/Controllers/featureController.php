<?php

namespace App\Admin\Controllers;

use App\Models\featurecard;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class featureController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'featurecard';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new featurecard());

        $grid->column('id', __('Id'));
        $grid->column('icon', __('Icon'));
        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'));
        $grid->column('background_color', __('Background color'));
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
        $show = new Show(featurecard::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('icon', __('Icon'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('background_color', __('Background color'));
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
        $form = new Form(new featurecard());

        $form->text('icon', __('Icon'));
        $form->text('title', __('Title'));
        $form->textarea('description', __('Description'));
        $form->text('background_color', __('Background color'));
        $form->number('order', __('Order'));

        return $form;
    }
}

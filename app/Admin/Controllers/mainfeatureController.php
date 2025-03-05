<?php

namespace App\Admin\Controllers;

use App\Models\feature;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class mainfeatureController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'feature';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new feature());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('subtitle', __('Subtitle'));
        $grid->column('tab_title', __('Tab title'));
        $grid->column('heading', __('Heading'));
        $grid->column('description', __('Description'));
        $grid->column('features', __('Features'));
        $grid->column('image', __('Image'));
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
        $show = new Show(feature::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('subtitle', __('Subtitle'));
        $show->field('tab_title', __('Tab title'));
        $show->field('heading', __('Heading'));
        $show->field('description', __('Description'));
        $show->field('features', __('Features'));
        $show->field('image', __('Image'));
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
        $form = new Form(new feature());

        $form->text('title', __('Title'));
        $form->text('subtitle', __('Subtitle'));
        $form->text('tab_title', __('Tab title'));
        $form->text('heading', __('Heading'));
        $form->textarea('description', __('Description'));
        $form->text('features', __('Features'));
        $form->image('image', __('Image'));
        $form->number('order', __('Order'));

        return $form;
    }
}

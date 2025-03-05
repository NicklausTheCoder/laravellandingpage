<?php

namespace App\Admin\Controllers;

use App\Models\testimonial;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TestimonialController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'testimonial';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new testimonial());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'));
        $grid->column('name', __('Name'));
        $grid->column('position', __('Position'));
        $grid->column('quote', __('Quote'));
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
        $show = new Show(testimonial::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('name', __('Name'));
        $show->field('position', __('Position'));
        $show->field('quote', __('Quote'));
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
        $form = new Form(new testimonial());

        $form->image('image', __('Image'));
        $form->text('name', __('Name'));
        $form->text('position', __('Position'));
        $form->textarea('quote', __('Quote'));
        $form->number('order', __('Order'));

        return $form;
    }
}

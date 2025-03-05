<?php

namespace App\Admin\Controllers;

use App\Models\pricing;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PricingController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'pricing';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new pricing());

        $grid->column('id', __('Id'));
        $grid->column('plan_name', __('Plan name'));
        $grid->column('currency', __('Currency'));
        $grid->column('amount', __('Amount'));
        $grid->column('period', __('Period'));
        $grid->column('description', __('Description'));
        $grid->column('features', __('Features'));
        $grid->column('button_text', __('Button text'));
        $grid->column('button_class', __('Button class'));
        $grid->column('is_popular', __('Is popular'));
        $grid->column('popular_badge_text', __('Popular badge text'));
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
        $show = new Show(pricing::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('plan_name', __('Plan name'));
        $show->field('currency', __('Currency'));
        $show->field('amount', __('Amount'));
        $show->field('period', __('Period'));
        $show->field('description', __('Description'));
        $show->field('features', __('Features'));
        $show->field('button_text', __('Button text'));
        $show->field('button_class', __('Button class'));
        $show->field('is_popular', __('Is popular'));
        $show->field('popular_badge_text', __('Popular badge text'));
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
        $form = new Form(new pricing());

        $form->text('plan_name', __('Plan name'));
        $form->text('currency', __('Currency'));
        $form->decimal('amount', __('Amount'));
        $form->text('period', __('Period'));
        $form->textarea('description', __('Description'));
        $form->text('features', __('Features'));
        $form->text('button_text', __('Button text'));
        $form->text('button_class', __('Button class'));
        $form->switch('is_popular', __('Is popular'));
        $form->text('popular_badge_text', __('Popular badge text'));
        $form->number('order', __('Order'));

        return $form;
    }
}

<?php

namespace App\Admin\Controllers;

use App\Models\hero;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HeroesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Hero';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new hero());

        $grid->column('id', __('Id'));
        $grid->column('company_badge', __('Company badge'));
        $grid->column('heading_line1', __('Heading line1'));
        $grid->column('heading_line2', __('Heading line2'));
        $grid->column('heading_line3', __('Heading line3'));
        $grid->column('accent_text', __('Accent text'));
        $grid->column('description', __('Description'));
        $grid->column('primary_button_text', __('Primary button text'));
        $grid->column('primary_button_link', __('Primary button link'));
        $grid->column('secondary_button_text', __('Secondary button text'));
        $grid->column('secondary_button_link', __('Secondary button link'));
        $grid->column('hero_image', __('Hero image'));
        $grid->column('customer_avatars', __('Customer avatars'));
        $grid->column('customer_text', __('Customer text'));
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
        $show = new Show(hero::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('company_badge', __('Company badge'));
        $show->field('heading_line1', __('Heading line1'));
        $show->field('heading_line2', __('Heading line2'));
        $show->field('heading_line3', __('Heading line3'));
        $show->field('accent_text', __('Accent text'));
        $show->field('description', __('Description'));
        $show->field('primary_button_text', __('Primary button text'));
        $show->field('primary_button_link', __('Primary button link'));
        $show->field('secondary_button_text', __('Secondary button text'));
        $show->field('secondary_button_link', __('Secondary button link'));
        $show->field('hero_image', __('Hero image'));
        $show->field('customer_avatars', __('Customer avatars'));
        $show->field('customer_text', __('Customer text'));
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
        $form = new Form(new hero());

        $form->text('company_badge', __('Company badge'));
        $form->text('heading_line1', __('Heading line1'));
        $form->text('heading_line2', __('Heading line2'));
        $form->text('heading_line3', __('Heading line3'));
        $form->text('accent_text', __('Accent text'));
        $form->textarea('description', __('Description'));
        $form->text('primary_button_text', __('Primary button text'));
        $form->text('primary_button_link', __('Primary button link'));
        $form->text('secondary_button_text', __('Secondary button text'));
        $form->text('secondary_button_link', __('Secondary button link'));
        $form->text('hero_image', __('Hero image'));
        $form->text('customer_avatars', __('Customer avatars'));
        $form->text('customer_text', __('Customer text'));

        return $form;
    }
}

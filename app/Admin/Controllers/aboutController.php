<?php

namespace App\Admin\Controllers;

use App\Models\about;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class aboutController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'About';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new about());

        $grid->column('id', __('Id'));
        $grid->column('meta', __('Meta'));
        $grid->column('heading', __('Heading'));
        $grid->column('description', __('Description'));
        $grid->column('features_left', __('Features left'));
        $grid->column('features_right', __('Features right'));
        $grid->column('ceo_name', __('Ceo name'));
        $grid->column('ceo_position', __('Ceo position'));
        $grid->column('ceo_image', __('Ceo image'));
        $grid->column('contact_label', __('Contact label'));
        $grid->column('contact_number', __('Contact number'));
        $grid->column('main_image', __('Main image'));
        $grid->column('small_image', __('Small image'));
        $grid->column('experience_years', __('Experience years'));
        $grid->column('experience_text', __('Experience text'));
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
        $show = new Show(about::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('meta', __('Meta'));
        $show->field('heading', __('Heading'));
        $show->field('description', __('Description'));
        $show->field('features_left', __('Features left'));
        $show->field('features_right', __('Features right'));
        $show->field('ceo_name', __('Ceo name'));
        $show->field('ceo_position', __('Ceo position'));
        $show->field('ceo_image', __('Ceo image'));
        $show->field('contact_label', __('Contact label'));
        $show->field('contact_number', __('Contact number'));
        $show->field('main_image', __('Main image'));
        $show->field('small_image', __('Small image'));
        $show->field('experience_years', __('Experience years'));
        $show->field('experience_text', __('Experience text'));
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
        $form = new Form(new about());

        $form->text('meta', __('Meta'));
        $form->text('heading', __('Heading'));
        $form->textarea('description', __('Description'));
        $form->text('features_left', __('Features left'));
        $form->text('features_right', __('Features right'));
        $form->text('ceo_name', __('Ceo name'));
        $form->text('ceo_position', __('Ceo position'));
        $form->text('ceo_image', __('Ceo image'));
        $form->text('contact_label', __('Contact label'));
        $form->text('contact_number', __('Contact number'));
        $form->text('main_image', __('Main image'));
        $form->text('small_image', __('Small image'));
        $form->text('experience_years', __('Experience years'));
        $form->text('experience_text', __('Experience text'));

        return $form;
    }
}

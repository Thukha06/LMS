<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Submission;

class SubmissionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Submission';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Submission());

        $grid->column('id', __('Id'));
        $grid->column('student_id', __('Student id'));
        $grid->column('grade', __('Grade'));
        $grid->column('feedback', __('Feedback'));
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
        $show = new Show(Submission::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('student_id', __('Student id'));
        $show->field('grade', __('Grade'));
        $show->field('feedback', __('Feedback'));
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
        $form = new Form(new Submission());

        $form->number('student_id', __('Student id'));
        $form->number('grade', __('Grade'));
        $form->textarea('feedback', __('Feedback'));

        return $form;
    }
}

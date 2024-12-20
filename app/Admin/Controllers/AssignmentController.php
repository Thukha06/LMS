<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Assignment;

class AssignmentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Assignment';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Assignment());

        $grid->column('id', __('Id'));
        $grid->column('task', __('Task'));
        $grid->column('deadline', __('Deadline'));
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
        $show = new Show(Assignment::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('task', __('Task'));
        $show->field('deadline', __('Deadline'));
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
        $form = new Form(new Assignment());

        $form->textarea('task', __('Task'));
        $form->datetime('deadline', __('Deadline'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}

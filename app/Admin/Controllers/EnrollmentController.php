<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Enrollment;
use \App\Models\AdminUser;
use \App\Models\Course;
use Carbon\Carbon;

class EnrollmentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Enrollment';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        
        $grid = new Grid(new Enrollment());

        $grid->column('id', __('Id'))->hide();
        $grid->column('course.avatar', __('Course Avatar'))->image('', 50, 50);
        $grid->column('course.title', __('Course Title'));
        $grid->column('student.name', __('Student Name'));
        $grid->column('status', __('Status'))
            ->display(function($status) {
                return $status == 0 ? 'Pending' : 'Accepted';
            })->label();
        $grid->column('created_at', __('Requested at'));
        $grid->column('updated_at', __('Updated at'))->hide();

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
        $show = new Show(Enrollment::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('course.title', __('Course Title'));
        $show->field('student.name', __('Student Name'));
        $show->field('status', __('Status'))
            ->display(function($status) {
                return $status == 0 ? 'Pending' : 'Accepted';
            })->label();
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
        $form = new Form(new Enrollment());

        // Select Course
        $form->select('course_id', __('Course'))
            ->options(function () {
                return Course::pluck('title', 'id');
            })
            ->required();

        // Select Multiple Students
        $form->select('student_id', __('Students'))
            ->options(function () {
                return AdminUser::whereHas('roles', function ($query) {
                    $query->where('name', 'Student');
                })->pluck('name', 'id');

            })
            ->required();

        // Select Status
        $form->select('status', __('Status'))
            ->options([
                0 => 'Pending',
                1 => 'Accepted',
            ])
            ->default(0)
            ->rules('required');

        return $form;
    }

}

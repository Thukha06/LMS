<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\AdminUser;
use \App\Models\Category;
use \App\Models\Course;

class CourseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Course';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Course());

        $grid->column('id', __('Id'))->hide();
        $grid->column('avatar', __('Avatar'))->image('', 50, 50);
        $grid->column('title', __('Title'));
        $grid->column('category.name', __('Category'));
        $grid->column('adminUser.name', __('Instructor'));
        $grid->column('date_start', __('Date start'));
        $grid->column('date_end', __('Date end'));
        $grid->column('hour_start', __('Hour start'));
        $grid->column('hour_end', __('Hour end'));
        $grid->column('description', __('Description'))->hide();
        $grid->column('created_at', __('Created at'))->hide();
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
        $show = new Show(Course::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category.name', __('Category'));
        $show->field('title', __('Title'));
        $show->field('adminUser.name', __('Instructor'));
        $show->field('date_start', __('Date start'));
        $show->field('date_end', __('Date end'));
        $show->field('hour_start', __('Hour start'));
        $show->field('hour_end', __('Hour end'));
        $show->field('description', __('Description'));
        $show->field('avatar', __('Avatar'))->image('', 100, 100);
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
        $form = new Form(new Course());
        
        // Show the category_id field during creation
        $form->select('category_id', __('Category'))
            ->options(function () {
                // Fetch available category_id values
                return Category::pluck('name', 'id');
            })
            ->required();
        $form->text('title', __('Title'))->required();
        $form->select('teacher_id', __('Instructor'))
            ->options(function () {
                // Fetch available user with teacher role values
                return AdminUser::whereHas('roles', function ($query) {
                    $query->where('name', 'Instructor');
                })->pluck('name', 'id');
            })
            ->required();
        $form->date('date_start', __('Date start'))->default(date('Y-m-d'))->required();
        $form->date('date_end', __('Date end'))->default(date('Y-m-d'))->required();
        $form->time('hour_start', __('Hour start'))->default(date('H:i'))->required();
        $form->time('hour_end', __('Hour end'))->default(date('H:i'))->required();
        $form->ckeditor('description', __('Description'))->required();
        $form->image('avatar', __('Avatar'))->move('courses')->removable()->required();

        return $form;
    }
}

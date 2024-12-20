<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\UserInfo;
use \App\Models\AdminUser;

class UserInfoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'UserInfo';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new UserInfo());

        $grid->column('id', __('Id'))->hide();
        $grid->column('admin_user_id', __('Admin user id'))->hide();
        $grid->column('adminUser.avatar', __('Avatar'))->image('', 50, 50); // Show the avatar as an image
        $grid->column('adminUser.username', __('Username'));
        $grid->column('adminUser.name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('email_verified_at', __('Email verified at'));
        $grid->column('phone_number', __('Phone number'));
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
        $show = new Show(UserInfo::findOrFail($id));

        $show->field('adminUser.avatar', __('Avatar'))->image('', 100, 100);
        $show->field('id', __('Id'));
        $show->field('admin_user_id', __('Admin user id'));
        $show->field('adminUser.username', __('Username'));
        $show->field('adminUser.name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('phone_number', __('Phone number'));
        $show->field('description', __('Description'));
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
        $form = new Form(new UserInfo());

        // Show the admin_user_id field only during creation
        if ($form->isCreating()) {
            $form->select('admin_user_id', __('Username'))
                ->options(function () {
                    // Fetch available admin_user_id values
                    return AdminUser::whereNotIn('id', UserInfo::pluck('admin_user_id')->toArray())->pluck('name', 'id');
                })
                ->required();
        }
        $form->email('email', __('Email'));
        $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
        $form->text('phone_number', __('Phone number'));
        $form->text('description', __('Description'));

        return $form;
    }
}

<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('user-infos', UserInfoController::class);;
    $router->resource('courses', CourseController::class);
    $router->resource('categories', CategoryConroller::class);
    $router->resource('enrollments', EnrollmentController::class);
    $router->resource('modules', ModuleController::class);
    $router->resource('assignments', AssignmentController::class);
    $router->resource('submissions', SubmissionController::class);
    $router->resource('files', FileController::class);

});

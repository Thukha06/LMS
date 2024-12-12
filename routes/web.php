<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseDetailController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AboutController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::get('/courses', [CourseController::class, 'index'])->name('courses');

Route::get('/course-detail', [CourseDetailController::class, 'index'])->name('course-detail');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');

Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/module', [ModuleController::class, 'index'])->name('module');

Route::get('/assignment', [AssignmentController::class, 'index'])->name('assignment');
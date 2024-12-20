<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
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

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'login')->name('login.post');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
});

Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/course-detail/{slug}', [CourseDetailController::class, 'show'])->name('course-detail');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/course-detail/enroll', [CourseDetailController::class, 'store'])->name('enroll.submit');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/module', [ModuleController::class, 'index'])->name('module');
    Route::get('/assignment', [AssignmentController::class, 'index'])->name('assignment');
});

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers');
Route::get('/about', [AboutController::class, 'index'])->name('about');
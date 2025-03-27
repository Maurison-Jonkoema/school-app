<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;

// The default welcome route
Route::get('/', function () {
    return view('welcome');
});

// Routes for Teacher and Course controllers
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
// In web.php
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');


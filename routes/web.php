<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('create-student',[StudentController::class,'studentInfo'])->name('create.student');
Route::POST('create-student',[StudentController::class,'store'])->name('info.store');
Route::get('show_student_info',[StudentController::class,'showInfo'])->name('studentInfo.show');

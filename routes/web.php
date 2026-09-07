<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;


Route::get('/', [TeacherController::class, 'index']);
Route::get('/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('/store', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('/student/{student}/', [TeacherController::class, 'show'])->name('teacher.show');
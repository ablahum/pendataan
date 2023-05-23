<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('student', [StudentController::class, 'index'])->name('student.index');

Route::get('student/create', [StudentController::class, 'create'])->name('student.create');

Route::post('student/store', [StudentController::class, 'store'])->name('student.store');

Route::get('student/update/{id}', [StudentController::class, 'update'])->name('student.update');

Route::patch('student/update/{id}', [StudentController::class, 'edit'])->name('student.edit');

Route::delete('student/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');
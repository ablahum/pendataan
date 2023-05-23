<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::get('', [UserController::class, 'index'])->name('user.index');

Route::get('create', [UserController::class, 'create'])->name('user.create');

Route::post('store', [UserController::class, 'store'])->name('user.store');

Route::get('update/{id}', [UserController::class, 'update'])->name('user.update');

Route::patch('update/{id}', [UserController::class, 'edit'])->name('user.edit');

Route::delete('delete/{id}', [UserController::class, 'delete'])->name('user.delete');
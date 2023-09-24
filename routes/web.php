<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskListController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', [TaskListController::class, 'edit'])->name('tasks.edit');
    Route::post('/task-create', [TaskListController::class, 'create'])->name('task.create');
    Route::post('/task-delete/{id}', [TaskListController::class, 'delete'])->name('task.delete');
    Route::post('/task-update/{id}', [TaskListController::class, 'update'])->name('task.update');
});

require __DIR__ . '/auth.php';

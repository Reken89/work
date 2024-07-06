<?php

use Illuminate\Support\Facades\Route;
use App\Structure\TaskSection\Controllers\TaskController;
use App\Structure\TaskSection\Controllers\TaskViewController;

//Роуты для работы API
Route::get('/read', [TaskController::class, 'ReadTasks']);
Route::post('/add', [TaskController::class, 'AddTask']);
Route::delete('/delete', [TaskController::class, 'DeleteTask']);
Route::patch('/update', [TaskController::class, 'UpdateTask']);
Route::get('/filter', [TaskController::class, 'FilterTask']);

//Роуты для работы фронта
Route::get('/tasks/back', [TaskViewController::class, 'ShowBack']);
Route::get('/tasks', [TaskViewController::class, 'ShowFront']);

Route::get('/', function () {
    return view('welcome');
});

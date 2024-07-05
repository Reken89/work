<?php

use Illuminate\Support\Facades\Route;
use App\Structure\TaskSection\Controllers\TaskController;

//Роуты для работы API
Route::get('/read', [TaskController::class, 'ReadTasks']);
Route::post('/add', [TaskController::class, 'AddTask']);
Route::delete('/delete', [TaskController::class, 'DeleteTask']);
Route::patch('/update', [TaskController::class, 'UpdateTask']);
Route::get('/filter', [TaskController::class, 'FilterTask']);

Route::get('/', function () {
    return view('welcome');
});

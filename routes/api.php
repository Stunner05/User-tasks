<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\TaskController;

Route::apiResource('users', UserController::class);
Route::apiResource('tasks', TaskController::class);

<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoriesNilaiController;
use App\Http\Controllers\Api\ClassroomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/register', [AuthController::class, 'register']);

Route::apiResource('/admin/classrooms', ClassroomController::class);
Route::apiResource('/admin/category-nilai', CategoriesNilaiController::class);

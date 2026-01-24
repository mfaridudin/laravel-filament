<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Filament\Notifications\Notification;
use App\Http\Controllers\ExportController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/export', [ExportController::class, 'export']);

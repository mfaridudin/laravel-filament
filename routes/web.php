<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Filament\Notifications\Notification;
use App\Http\Controllers\ExportController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/test-notif', function () {
    $user = User::first();

    Notification::make()
        ->title('Notif DB aktif')
        ->success()
        ->sendToDatabase($user);

    return 'sent';
});

Route::get('/export', [ExportController::class, 'export']);

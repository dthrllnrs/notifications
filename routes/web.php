<?php

use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome');
// })->name('home');

// Route::get('dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');

Route::get('/', [NotificationController::class, 'index'])->name('notifications.index');

Route::get('info', function () {
    phpinfo();
})->name('info');
// Route::prefix('notifications')->group(function () {

    // Route::get('/{id}', function ($id) {
    //     return Inertia::render('Notifications/Show', ['id' => $id]);
    // })->name('notifications.show');
// });
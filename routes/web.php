<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['splade'])->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/admin', function () {
        return view('welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    });

    Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',])->group(function () {
        Route::view('/dashboard', 'dashboard')->name('dashboard');
        // Ресурсный роут для Services
        Route::resource('settings', \App\Http\Controllers\Admin\SettingsController::class);
        Route::resource('block', \App\Http\Controllers\Admin\BlockController::class);
    });

    Route::get('/', [\App\Http\Controllers\Client\IndexController::class, 'index'])->name('client.index');
});

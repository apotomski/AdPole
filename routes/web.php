<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::prefix('filters')->group(function() {
    Route::prefix('set')->group(function() {
        Route::post('announcement', [
            \App\Http\Controllers\FiltersController::class,
            'setFiltersForAnnouncements'
        ])->name('filters.announcement');
    });

    Route::post('clear/{key}', [\App\Http\Controllers\FiltersController::class, 'clearFilters'])->name('filters.clear');
});
Route::get('/announcements', [App\Http\Controllers\AnnouncementsController::class, 'index'])->name('home');
Route::get('/announcements', [App\Http\Controllers\AnnouncementsController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

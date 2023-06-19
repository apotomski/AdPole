<?php

use App\Enums\RouteNamesEnum;
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
        Route::post(
            'announcement',
            [\App\Http\Controllers\FiltersController::class, 'setFiltersForAnnouncements']
        )->name('filters.announcement');
    });

    Route::post('clear/{key}', [\App\Http\Controllers\FiltersController::class, 'clearFilters'])->name('filters.clear');
});

Route::prefix('announcements')->group(function() {
    Route::get(
        '/',
        [App\Http\Controllers\AnnouncementsController::class, 'index']
    )->name(RouteNamesEnum::AnnouncementList->value);

    Route::get(
        'create',
        [App\Http\Controllers\AnnouncementsController::class, 'create']
    )->name(RouteNamesEnum::AnnouncementCreate->value);
    Route::post(
        'store',
        [App\Http\Controllers\AnnouncementsController::class, 'store']
    )->name(RouteNamesEnum::AnnouncementStore->value);
    Route::get(
        'edit',
        [App\Http\Controllers\AnnouncementsController::class, 'store']
    )->name(RouteNamesEnum::AnnouncementEdit->value);
    Route::put(
        'update',
        [App\Http\Controllers\AnnouncementsController::class, 'store']
    )->name(RouteNamesEnum::AnnouncementUpdate->value);
    Route::delete(
        'destroy',
        [App\Http\Controllers\AnnouncementsController::class, 'destroy']
    )->name(RouteNamesEnum::AnnouncementDestory->value);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

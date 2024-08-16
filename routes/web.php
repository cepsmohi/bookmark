<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
})->name('welcome');
Auth::routes(['register' => false]);
Route::middleware('auth')->group(function () {
    Route::controller(HomeController::class)
        ->group(function () {
            Route::get('home', 'index')->name('home');
        });
    Route::prefix('users')
        ->as('users')
        ->controller(UserController::class)
        ->group(function () {
            Route::get('profile', 'profile')->name('.profile');
            Route::get('password', 'password')->name('.password');
        });
    Route::prefix('categories')
        ->as('categories')
        ->controller(HomeController::class)
        ->group(function () {
            Route::get('', 'categories')->name('');
        });
    Route::prefix('categories')
        ->as('subcategories')
        ->controller(HomeController::class)
        ->group(function () {
            Route::get('{category}/subcategories', 'subcategories')->name('');
            Route::get('{category}/subcategories/{subcategory}', 'subcategorieslinks')->name('.links');
        });
    Route::prefix('links')
        ->as('links')
        ->controller(HomeController::class)
        ->group(function () {
            Route::get('', 'links')->name('');
        });
});

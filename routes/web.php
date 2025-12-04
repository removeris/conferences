<?php

use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

// Main page
Route::get('/', function () {
    return view('index');
})->name('index');

// Login
Route::controller(UserController::class)->
       name('auth.')->
       group(function() {

    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');

});

// ConferenceController
Route::controller(ConferenceController::class)->
       prefix('conferences')->
       name('conferences.')->
       group(function() {

    Route::middleware(isAdmin::class)->group(function() {
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');

        Route::prefix('/{id}')->group(function() {
            Route::get('/', 'show')->name('show');
            Route::delete('/', 'delete')->name('delete');
            Route::put('/', 'update')->name('update');
            Route::get('/edit', 'edit')->name('edit');
        });

    });
    Route::get('/', 'index' )->name('index');
    
});

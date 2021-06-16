<?php

use Illuminate\Support\Facades\Route;

//Admin
Route::group(['middleware' => ['auth'], 'prefix' => 'admin/', 'as' => ''], function(){
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->middleware(['auth'])->name('dashboard');


    Route::resource('team', \App\Http\Controllers\TeamController::class);
    Route::resource('page', \App\Http\Controllers\PageController::class);
    Route::resource('pageItem', \App\Http\Controllers\PageItemController::class);
});



<?php

use Illuminate\Support\Facades\Route;

//Admin
Route::group(['middleware' => ['auth'], 'prefix' => 'admin/', 'as' => ''], function(){
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->middleware(['auth'])->name('dashboard');


    Route::get('home', [\App\Http\Controllers\StaticOptionController::class, 'getHomeInfo'])->name('home.edit');
    Route::post('home', [\App\Http\Controllers\StaticOptionController::class, 'updateHomeInfo'])->name('home.update');

    Route::get('basic-info', [\App\Http\Controllers\StaticOptionController::class, 'getBasicInfo'])->name('basic.edit');
    Route::post('basic-info', [\App\Http\Controllers\StaticOptionController::class, 'updateBasicInfo'])->name('basic.update');

    Route::resource('team', \App\Http\Controllers\TeamController::class);
    Route::resource('page', \App\Http\Controllers\PageController::class);
    Route::resource('pageItem', \App\Http\Controllers\PageItemController::class);
});



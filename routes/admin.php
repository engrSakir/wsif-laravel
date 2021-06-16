<?php

use Illuminate\Support\Facades\Route;

//Admin
Route::group(['middleware' => ['auth'], 'prefix' => 'admin/', 'as' => ''], function(){
    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->middleware(['auth'])->name('dashboard');


    Route::get('/manage-page/{slug}', function ($slug) {
        $page = \App\Models\Page::where('slug', $slug)->first();
        if(!$page){
            return back();
        }
        return view('backend.page.index', compact('page'));
    })->name('admin.page');

    Route::resource('team', \App\Http\Controllers\TeamController::class);
});



<?php

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

Route::get('/', [\App\Http\Controllers\FrontendController::class, 'home'])->name('home');
Route::get('/page/{slug}',[\App\Http\Controllers\FrontendController::class, 'page'])->name('page');
Route::get('/about', [\App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/team', [\App\Http\Controllers\FrontendController::class, 'team'])->name('team');
Route::get('/team/{slug}', [\App\Http\Controllers\FrontendController::class, 'teamDetails'])->name('teamDetails');
Route::get('/event', [\App\Http\Controllers\FrontendController::class, 'event'])->name('event');
Route::get('/news', [\App\Http\Controllers\FrontendController::class, 'news'])->name('news');
Route::get('/contact', [\App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

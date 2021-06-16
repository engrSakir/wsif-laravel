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

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/team', function () {
    return view('frontend.team');
})->name('team');

Route::get('/event', function () {
    return view('frontend.event');
})->name('event');

Route::get('/initiatives-and-platforms', function () {
    return view('frontend.initiatives-and-platforms');
})->name('initiatives-and-platforms');

Route::get('/news', function () {
    return view('frontend.news');
})->name('news');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

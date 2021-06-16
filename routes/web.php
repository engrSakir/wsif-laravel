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
    $items = \App\Models\PageItem::where('active', true)->where('show_on_home', true)->orderBy('id', 'desc')->get();
    $partners = \App\Models\Partner::all();
    return view('frontend.home', compact('items', 'partners'));
})->name('home');

Route::get('/page/{slug}', function ($slug) {
    $page = \App\Models\Page::where('slug', $slug)->where('active', true)->first();
        if(!$page){
            return back();
        }
    return view('frontend.page', compact('page'));
})->name('page');



Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/team', function () {
    $teams = \App\Models\Team::where('active', true)->orderBy('id', 'asc')->get();
    return view('frontend.team', compact('teams'));
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

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

<?php

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

Route::get('/eonecode', function () {
    return view('guest.index');
})->name('dashboard');
// Route laravel
Route::get('/laravel-intro', function () {
    return view('home.laravel.beginner.intro');
})->name('laravel-intro');

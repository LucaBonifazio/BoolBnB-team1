<?php

use Illuminate\Support\Facades\Auth;
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
    return view('guest.homepage');
});

Auth::routes();

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', 'PageController@dashboard')->name('dashboard');
        Route::resource('messages', 'MessageController');
        Route::resource('services', 'ServiceController');
        Route::resource('views', 'ViewsController');
        Route::resource('sponsorships', 'SponsorshipController');
});

Route::get('{any?}', function() {
    return view('homepage');
})->where("any", ".*")->name('homepage');

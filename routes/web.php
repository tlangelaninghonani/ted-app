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
    return view('welcome_ini');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/mapbox', function () {
    return view('mapbox');
});

Route::get('/design', function () {
    return view('design');
});

Route::get('/sign_in', function () {
    return view('sign_in');
});

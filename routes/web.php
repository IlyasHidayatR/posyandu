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
    return view('user.userHome');
});

Route::get('/sample', function () {
    return view('user.formBlade');
});


Route::get('/sample1', function () {
    return view('user.formBlade1');
});

Route::get('/home', function () {
    return view('welcome');
});

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
    return view('index');
})->name('home');

Route::get('/calcula', function(){
    return view('calcula');
})->name('calcula');

Route::get('/OS', function(){
    return view('OS/login');

})->name('OS');

Route::get('/sistema', function(){
    return view('OS/dashboard');
})->name('sistemaOS');

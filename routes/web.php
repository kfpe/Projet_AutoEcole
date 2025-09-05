<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/base', function () {
    return view('base');
});
Route::get('/users', function(){
    return view('users');
});
//Route::resource('/users', UserController::class);

Route::get('/test', function(){
    return view('layout3.candidat.index');
});

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

/*route du dashboard admin */
Route::get('/admin', function () {
    return view('layout2/admin/admin');
});

route:: get ('/moniteur', function () {
    return view('layout3/moniteur/moniteur');
});

route:: get ('/secretaire', function () {
    return view('layout3/secretaire/secretaire');
});

route:: get ('/login', function () {
    return view('auth/login');
});




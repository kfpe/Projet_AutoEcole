<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
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
    return view('layout1.home');
});


Route::get('/services', function () {
    return view('layout1.services');
})->name('services');

Route::get('/askservice', function () {
    return view('layout1.askservices');
})->name('askservice');



Route::post('/services/store', [ServiceController::class, 'store'])->name('services.store');

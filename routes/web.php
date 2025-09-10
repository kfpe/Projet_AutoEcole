<?php

use App\Http\Controllers\UserController;
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

/* --------- Routes de la branche main (HEAD) --------- */
Route::get('/test', function () {
    return view('layout3.candidat.index');
});
Route::get('/dashCand', function () {
    return view('layout3/candidat/dashboard');
});
Route::get('/zzz', function () {
    return view('zzzzz');
});

/* --------- Routes de la branche sandeu --------- */
Route::get('/admin', function () {
    return view('layout2/admin/admin');
});

Route::get('/moniteur', function () {
    return view('layout3/moniteur/moniteur');
});

Route::get('/secretaire', function () {
    return view('layout3/secretaire/secretaire');
});

Route::get('/login', function () {
    return view('auth/login');
});

/* --------- Ressource users --------- */
Route::resource('users', UserController::class);



// Route::prefix('/users')->controller('UserContoller')->group(function(){
    
// });
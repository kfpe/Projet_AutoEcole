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

//Route::resource('/users', UserController::class);

Route::get('/test', function(){
    return view('layout3.candidat.index');
});
Route::get('/dashCand', function(){
    return view('layout3/candidat/dashboard');
});
Route::get('/zzz', function(){
    return view('zzzzz');
});

Route::get('/admin', function () {
    return view('layout2/superAdmin/admin');
})->name('admin');

Route::get('/agence', function () {
    return view('layout2/superAdmin/agence');
})->name('agence');

Route::get('/parametres', function () {
    return view('home.parametres');
})->name('parametres');

Route::get('/welcome', function () {
    return view('layout2/superAdmin/welcome');
})->name('welcome');

Route::get('/liste_agence', function () {
    return view('layout2/superAdmin/liste_agence');
})->name('liste_agence');

Route::get('/liste_admin', function () {
    return view('layout2/superAdmin/liste_admin');
})->name('liste_admin');

Route::get('/parametres', function () {
    return view('layout2/superAdmin/parametres');
})->name('parametres');


//--------------------------------------------- debut de project

Route::resource('users', UserController::class);


// Route::prefix('/users')->controller('UserContoller')->group(function(){
    
// });

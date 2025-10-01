<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\AdministrateurController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/1', function () {
    return view('layout1.home');
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
    return view('layout2/administrateurs/admin');
});

Route::get('/moniteur', function () {
    return view('layout3/moniteur/moniteur');
});

Route::get('/secretaire', function () {
    return view('layout3/secretaire/secretaire');
});

Route::get('/login', function () {
    return view('auth/login');
 })->name('login');


/* --------- Ressource users --------- */
Route::resource('users', UserController::class);



// Route::prefix('/users')->controller('UserContoller')->group(function(){
    
// });

Route::get('/services', function () {
    return view('layout1.services');
})->name('services');

Route::get('/askservices', function () {
    return view('layout1.askservices');
})->name('askservices');



Route::get('/askservices', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');


Route::get('/superAdmin', function () {
    return view('layout2.superAdmin.superAdmin');
})->name('superAdmin');

// routes pour les agences
Route::resource('agences', AgenceController::class);

// Gestion des administrateurs
Route::resource('administrateurs', AdministrateurController::class);



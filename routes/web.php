<?php

use App\Http\Controllers\CandidatController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
//Route::get('/test', function () {
//    return view('layout3.candidat.index');
//});
Route::get('/dashboardCandidat', function () {
    return view('layout3.candidat.dashboardCandidat');
})->name('dashCand');
Route::get('/zzz', function () {
    return view('zzzzz');
});

/* --------- Routes de la branche sandeu --------- */
Route::get('/dashboardAdmin', function () {
    return view('layout2.admin.dashboardAdmin');
})->name('dashboardAdmin');

Route::get('/dashboardMoniteur', function () {
    return view('layout3.moniteur.dashboardMoniteur');
})->name('dashboardMoniteur');

Route::get('/dashboardSecretaire', function () {
    return view('layout3.secretaire.dashboardSecretaire');
})->name('dashboardSecretaire');

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






Route::get('/askservices', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');

// ------------------------------------------------Gestion des users---

// Il faudrait que je cree le middelware admin qui va justement se charger de s'assurer que seul les admin et les secretaire edit les candidats
Route::middleware(['admin','secretaire'])->group(function(){
    Route::resource('candidats', CandidatController::class);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/candidat/profile', [CandidatController::class, 'profile'])->name('candidat.profile');
    Route::patch('/candidat/profile', [CandidatController::class, 'updateProfile'])->name('candidat.profile.update');
});



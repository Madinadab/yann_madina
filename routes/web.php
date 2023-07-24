<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EtudiantController;
use App\Models\User;
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
Route::get('/redirects', [EtudiantController::class, 'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('register', [EtudiantController::class, 'create'])->name('register');

Route::get('/formulaire', [EtudiantController::class, 'formulaire'])->name('formulaire_etude');
Route::post('/formulaire', [EtudiantController::class, 'traitement_register'])->name('formulaire');
Route::get('/liste', [EtudiantController::class, 'affissage'])->name('liste');

Route::get('/liste/{id}delete', [EtudiantController::class, 'delete'])->name('supprimer');
Route::get('/liste/{id}edit', [EtudiantController::class, 'edit'])->name('modifier');
Route::post('/updade/traitement', [EtudiantController::class, 'traitement_update']);
Route::get('/liste/{id}detail', [EtudiantController::class, 'detail'])->name('detail');

Route::get('registersecretaire', [EtudiantController::class, 'createsecretaire'])
    ->name('registersecretaire');

Route::post('registersecretaire', [EtudiantController::class, 'storesecretaire']);




Route::get('/mail/{id}', [EtudiantController::class, 'mail'])->name('mail');

Route::get('/secretairemail/{id}', [EtudiantController::class, 'secretairemail'])->name('secretairemail');


Route::get('/cartePDF', [EtudiantController::class, 'cartePDF']);

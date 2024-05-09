<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\NotationController;
use App\Http\Controllers\UniversiteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AutrePageController;

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

Route::get('/home',[HomeController::class, 'index'])->name('home');

require __DIR__.'/auth.php';

Route::middleware(['auth', 'verified'])->group(function () {
    // Routes pour afficher la liste des notations et créer une nouvelle notation
    Route::get('/notations', [NotationController::class, 'index'])->name('notations.index');
    Route::get('/notations/create', [NotationController::class, 'create'])->name('notations.create');
    Route::post('/notations', [NotationController::class, 'store'])->name('notations.store');
    
    // Routes pour afficher, éditer et mettre à jour une notation existante
    Route::get('/notations/{notation}/edit', [NotationController::class, 'edit'])->name('notations.edit');
    Route::put('/notations/{notation}', [NotationController::class, 'update'])->name('notations.update');
    
    // Route pour supprimer une notation
    Route::delete('/notations/{notation}', [NotationController::class, 'destroy'])->name('notations.destroy');
});


Route::middleware(['auth', 'verified'])->group(function () {
    // Afficher la liste des universités
    Route::get('/universites', [UniversiteController::class, 'index'])->name('universites.index');
    
    // Afficher le formulaire de création d'une université
    Route::get('/universites/create', [UniversiteController::class, 'create'])->name('universites.create');
    
    // Enregistrer une nouvelle université
    Route::post('/universites', [UniversiteController::class, 'store'])->name('universites.store');
    
    // Afficher le formulaire d'édition d'une université
    Route::get('/universites/{universite}/edit', [UniversiteController::class, 'edit'])->name('universites.edit');
    
    // Mettre à jour une université existante
    Route::put('/universites/{universite}', [UniversiteController::class, 'update'])->name('universites.update');
    
    // Supprimer une université existante
    Route::delete('/universites/{universite}', [UniversiteController::class, 'delete'])->name('universites.delete');
});


Route::get('/user_home', [PageController::class, 'index'])->name('user_home');
Route::get('/notation', [PageController::class, 'create'])->name('ajout_notation');
Route::post('/user_notation', [PageController::class, 'store'])->name('notation_store');


Route::get('/user_universites', [AutrePageController::class, 'index'])->name('user_universites');


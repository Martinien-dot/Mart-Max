<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterielController;

Route::get('/', function () {
    return view('welcome');
})->name('materiel.welcome');

Route::get('/materiel', [MaterielController::class, 'index'])->name('materiel.index');

Route::get('/materiel/create', [MaterielController::class, 'create'])->name('materiel.create');

Route::post('/materiel', [MaterielController::class, 'enregistrer'])->name('materiel.enregistrer');

Route::get('/materiel/{materiel}/edit', [MaterielController::class, 'edit'])->name('materiel.edit');

Route::put('/materiel/{materiel}/update', [MaterielController::class, 'update'])->name('materiel.update');

Route::delete('/materiel/{materiel}/destroy', [MaterielController::class, 'destroy'])->name('materiel.destroy');

Route::get('/materiel/chercherPourSupprimer', [MaterielController::class, 'showSearchForm'])->name('materiel.searchToDelete');
Route::post('/materiel/chercherPourSupprimer', [MaterielController::class, 'searchToDelete'])->name('materiel.searchToDelete.submit');

Route::get('/materiel/chercherPourMettreAJour', [MaterielController::class, 'showSearchForm1'])->name('materiel.searchToUpdate');
Route::post('/materiel/chercherPourMettreAJour', [MaterielController::class, 'searchToUpdate'])->name('materiel.searchToUpdate.submit');
<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterielController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/', function () {
    return view('welcome');
})->name('materiel.welcome');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
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
    
    Route::get('/materiel/VchercherParDate', [MaterielController::class, 'showSearchForm2'])->name('materiel.VchercherDate');
    Route::get('/materiel/chercherParDate', [MaterielController::class, 'chercherParDate'])->name('materiel.chercherParDate');
    
    Route::get('/materiel/VchercherParDesignation', [MaterielController::class, 'showSearchForm3'])->name('materiel.VchercherParDesignation');
    Route::get('/materiel/chercherParDesignation', [MaterielController::class, 'chercherParDesignation'])->name('materiel.chercherParDesignation');
    
    
    Route::get('/materiel/VchercherParCategorie', [MaterielController::class, 'showSearchForm4'])->name('materiel.VchercherParCategorie');
    Route::get('/materiel/chercherParCategorie', [MaterielController::class, 'chercherParcategorie'])->name('materiel.chercherParCategorie');
    
    Route::get('/materiel/afficherParCategorie', [MaterielController::class, 'afficheParCat'])->name('materiel.afficherParCategorie');
    Route::get('/materiel/afficherCoutsParAnnee', [MaterielController::class, 'CoutsParAnnee'])->name('materiel.CoutsParAnnee');
    Route::get('/materiel/export-txt', [MaterielController::class, 'exportToTxt'])->name('materiel.exportToTxt');
    Route::get('/materiel/export-excel', [MaterielController::class, 'exportToExcel'])->name('materiel.exportToExcel');
    Route::post('/Materiel/import-excel', [MaterielController::class, 'importFromExcel'])->name('materiel.importFromExcel');
});

require __DIR__.'/auth.php';

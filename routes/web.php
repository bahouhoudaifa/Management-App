<?php

use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\exelController;
use App\Http\Controllers\RetirementController;
use App\Http\Controllers\SemaineController;
use App\Http\Controllers\StagiairesController;
use App\Http\Controllers\ComportementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssiduiteController;



Route::get('/form', [exelController::class,'form'])->name('form');

Route::post('/upload', [exelController::class,'upload'])->name('upload');





Route::get('/',[StagiairesController::class, 'accuiel'])->name('accuiel');
Route::get('/listeStag',[StagiairesController::class, 'index'])->name('index');



Route::get('/retirement',[RetirementController::class, 'retirement'])->name('retirement');
Route::get('/saisieretirement/{id}',[RetirementController::class, 'saisieretirement'])->name('saisieretirement');
Route::post('/saisieretirement',[RetirementController::class, 'storeRetirement'])->name('storeRetirement');



Route::get('/absence',[AbsenceController::class, 'absence'])->name('absence');
Route::get('/SaisieAbsence/{id}',[AbsenceController::class, 'SaisieAbsence'])->name('SaisieAbsence');
Route::post('/SaisieAbsence',[AbsenceController::class, 'storeAbsence'])->name('storeAbsence');



Route::get('/saisiesemaine',[SemaineController::class, 'saisiesemaine'])->name('saisiesemaine');
Route::post('/saisiesemaine',[SemaineController::class, 'storesemaine'])->name('saisiesemaine.store');



Route::get('/details/{id}',[AbsenceController::class, 'details'])->name('details');


 
Route::get('/comportement',[ComportementController::class, 'comportement'])->name('comportement');
Route::get('/saisiecomportement/{id}',[ComportementController::class, 'saisiecomportement'])->name('saisiecomportement');
Route::post('/saisiecomportement',[ComportementController::class, 'storeComportement'])->name('storeComportement');





Route::get('/modifierAbsence/{id}', [AbsenceController::class,'modifierAbsence'])->name('modifierAbsence');
Route::put('/updateAbsence/{id}', [AbsenceController::class,'updateAbsence'])->name('updateAbsence');




Route::get('/modifierComportement/{id}', [ComportementController::class,'modifierComportement'])->name('modifierComportement');
Route::put('/updateComportement/{id}', [ComportementController::class,'updateComportement'])->name('updateComportement');



Route::get('/modifierRetirement/{id}', [RetirementController::class,'modifierRetirement'])->name('modifierRetirement');
Route::put('/updateRetirement/{id}', [RetirementController::class,'updateRetirement'])->name('updateRetirement');





Route::delete('/deleteAbsence/{id}', [AbsenceController::class,'deleteAbsence'])->name('deleteAbsence');



Route::delete('/deleteComportement/{id}', [ComportementController::class,'deleteComportement'])->name('deleteComportement');



Route::delete('/deleteRetirement/{id}', [RetirementController::class,'deleteRetirement'])->name('deleteRetirement');



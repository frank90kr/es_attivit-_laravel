<?php

use App\Http\Controllers\CreaController;
use App\Http\Controllers\DettaglioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModificaController;

Route::get('/', [HomeController::class, 'homepage'])->name('homepage');

Route::get('Crea', [CreaController::class, 'crea'])->name('crea')->name('crea');

Route::get('Dettaglio', [DettaglioController::class, 'dettaglio'])->name('dettaglio');

Route::get('Modifica', [ModificaController::class, 'modifica'])->name('modifica');



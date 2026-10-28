<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimoController;

Route::get('/', [PrimoController::class, 'homepage'])->name('homepage');

Route::get('/scrivici', [PrimoController::class, 'contattaci'])->name('pagina.contattaci');

Route::post('/scrivici/inviato', [PrimoController::class, 'inviato'])->name('pagina.inviato');
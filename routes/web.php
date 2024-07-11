<?php

use App\Http\Controllers\GerenciadorController;
use Illuminate\Support\Facades\Route;

Route::get('/gerenciador', [GerenciadorController::class, 'gerenciador'])->name('gerenciador');
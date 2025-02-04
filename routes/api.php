<?php

use App\Http\Controllers\DomainController;
use App\Http\Controllers\BlockController;
use Illuminate\Support\Facades\Route;

// Rotas para Domínios
Route::apiResource('domains', DomainController::class);

// Rotas para Blocos
Route::apiResource('blocks', BlockController::class);
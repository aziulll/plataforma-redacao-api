<?php

use App\Http\Controllers\Adm\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Adm\RedacoesController;
use Illuminate\Auth\Events\Login;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('minhas-redacoes/{id}', [RedacoesController::class, 'show'])->name('minhas-redacoes.show');
Route::get('minhas-redacoes',  [RedacoesController::class, 'index'])->name('minhas-redacoes.index');
Route::post('nova-redacao', [RedacoesController::class, 'create'])->name('nova-redacao.create');
Route::delete('minhas-redacoes/{id}',  [RedacoesController::class, 'destroy'])->name('minhas-redacoes.destroy');



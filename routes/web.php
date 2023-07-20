<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AssociadosController;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\EventosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/* Rotas para Eventos */
Route::prefix('eventos')->group(function () {

    Route::post('update/{id}', [EventosController::class, 'update'])->name('eventos.update');

    Route::get('edit/{id}', [EventosController::class, 'edit'])->name('eventos.edit');

    Route::post('store', [EventosController::class, 'store'])->name('eventos.store');

    Route::get('create', [EventosController::class, 'create'])->name('eventos.create');

    Route::get('index', [EventosController::class, 'index'])->name('eventos.index');

});


/* Rotas para Áreas */

// Atualização de associados
Route::put('update/areas/{id}', [AreasController::class, 'update'])->name('update.areas');

// Página de edição
Route::get('edit/areas/{id}', [AreasController::class, 'edit'])->name('edit.areas');

// Set de areas
Route::post('store/areas', [AreasController::class, 'store'])->name('store.areas');

// Cadastrar areas
Route::get('create/areas', [AreasController::class, 'create'])->name('create.areas');

// Retorna a página index de areas
Route::get('index/areas', [AreasController::class, 'index'])->name('index.areas');


/* Rotas para Associados */

// Atualização de associados
Route::put('update/{id}', [AssociadosController::class, 'update'])->name('update.associados');

// Visualizar detalhes do associado
Route::get('show/{id}', [AssociadosController::class, 'show'])->name('show.associados');

// Editar associados
Route::get('edit/{id}/{codarea?}', [AssociadosController::class, 'edit'])->name('edit.associados');

// Store de associados
Route::post('store', [AssociadosController::class, 'store'])->name('store.associados');

// Cadastrar os associados
Route::get('criar/associados', [AssociadosController::class, 'create'])->name('criar.associados');

// Retorno de página dos associados
Route::get('lista/associados', [AssociadosController::class, 'index'])->name('lista.associados');

// Dashboard que retorna os dados da index
Route::get('/', [DashboardController::class, 'index'])->name('index');

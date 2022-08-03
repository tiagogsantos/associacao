<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AssociadosController;

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

// Atualização de associados
Route::put('update/{id}', [AssociadosController::class, 'update'])->name('update.associados');

// Visualizar detalhes do associado
Route::get('show/{id}', [AssociadosController::class, 'show'])->name('show.associados');

// Editar associados
Route::get('edit/{id}', [AssociadosController::class, 'edit'])->name('edit.associados');

// Store de associados
Route::post('store', [AssociadosController::class, 'store'])->name('store.associados');

// Cadastrar os associados
Route::get('criar/associados', [AssociadosController::class, 'create'])->name('criar.associados');

// Retorno de página dos associados
Route::get('lista/associados', [AssociadosController::class, 'index'])->name('lista.associados');

// Dashboard que retorna os dados da index
Route::get('/', [DashboardController::class, 'index'])->name('index');

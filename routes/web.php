<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GrupoeEconomico\GrupoEconomicoController;
use App\Http\Controllers\Unidade\UnidadeController;
use App\Http\Controllers\Colaborador\ColaboradorController;
use App\Http\Controllers\Bandeira\BandeiraController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rota inicial
Route::get('/', function () {
    return view('welcome');
});

// Rotas de autenticação
Auth::routes();

// Grupo de rotas para Grupo Econômico
Route::prefix('grupo-economico')->middleware('auth')->name('grupo-economico.')->group(function () {
    Route::get('/', [GrupoEconomicoController::class, 'index'])->name('index');
    Route::get('/create', [GrupoEconomicoController::class, 'create'])->name('create');
    Route::post('/', [GrupoEconomicoController::class, 'store'])->name('store');
    Route::get('/{grupoEconomico}', [GrupoEconomicoController::class, 'show'])->name('show');
    Route::get('/{grupoEconomico}/edit', [GrupoEconomicoController::class, 'edit'])->name('edit');
    Route::put('/{grupoEconomico}', [GrupoEconomicoController::class, 'update'])->name('update');
    Route::delete('/{grupoEconomico}', [GrupoEconomicoController::class, 'destroy'])->name('destroy');
    Route::resource('grupo_economico', GrupoEconomicoController::class);
});

// Grupo de rotas para Bandeira
Route::prefix('bandeira')->middleware('auth')->name('bandeira.')->group(function () {
    Route::get('/', [BandeiraController::class, 'index'])->name('index');
    Route::get('/create', [BandeiraController::class, 'create'])->name('create');
    Route::post('/', [BandeiraController::class, 'store'])->name('store');
    Route::get('/{bandeira}', [BandeiraController::class, 'show'])->name('show');
    Route::get('/{bandeira}/edit', [BandeiraController::class, 'edit'])->name('edit');
    Route::put('/{bandeira}', [BandeiraController::class, 'update'])->name('update');
    Route::delete('/{bandeira}', [BandeiraController::class, 'destroy'])->name('destroy');
    Route::resource('bandeiras', BandeiraController::class);
});

// Grupo de rotas para Colaborador
Route::prefix('colaborador')->middleware('auth')->name('colaborador.')->group(function () {
    Route::get('/', [ColaboradorController::class, 'index'])->name('index');
    Route::get('/create', [ColaboradorController::class, 'create'])->name('create');
    Route::post('/', [ColaboradorController::class, 'store'])->name('store');
    Route::get('/{colaborador}', [ColaboradorController::class, 'show'])->name('show');
    Route::get('/{colaborador}/edit', [ColaboradorController::class, 'edit'])->name('edit');
    Route::put('/{colaborador}', [ColaboradorController::class, 'update'])->name('update');
    Route::delete('/{colaborador}', [ColaboradorController::class, 'destroy'])->name('destroy');
    Route::resource('colaboradores', ColaboradorController::class);
});

// Grupo de rotas para Unidade
Route::prefix('unidade')->middleware('auth')->name('unidade.')->group(function () {
    Route::get('/', [UnidadeController::class, 'index'])->name('index');
    Route::get('/create', [UnidadeController::class, 'create'])->name('create');
    Route::post('/', [UnidadeController::class, 'store'])->name('store');
    Route::get('/{unidade}', [UnidadeController::class, 'show'])->name('show');
    Route::get('/{unidade}/edit', [UnidadeController::class, 'edit'])->name('edit');
    Route::put('/{unidade}', [UnidadeController::class, 'update'])->name('update');
    Route::delete('/{unidade}', [UnidadeController::class, 'destroy'])->name('destroy');
});

// Rota para a página inicial autenticada
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

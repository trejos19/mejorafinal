<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Models\Cliente;

Route::get('/', function () {
    return view('welcome');
});

Route::get('clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('clientes/{nif}', [ClienteController::class, 'show'])->name('clientes.show');
Route::get('clientes/{nif}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('clientes/{nif}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('clientes/{nif}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
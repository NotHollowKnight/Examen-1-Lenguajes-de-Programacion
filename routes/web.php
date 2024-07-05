<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directorioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directorio/mostrar',
    [directorioController::class, 'mostrar'])->name('directorio.mostrar');

Route::get('/directorio/crear',
    [directorioController::class, 'crear'])->name('directorio.crear');

Route::post('/directorio/crear/confirmar',
    [directorioController::class, 'crearEntrada'])->name('directorio.crear.confirmar');

Route::get('/directorio/buscar',
    [directorioController::class, 'buscar'])->name('directorio.buscar');

Route::get('/directorio/buscar/confirmar/',
    [directorioController::class, 'buscarEntrada'])->name('directorio.buscar.confirmar');

Route::get('/directorio/verContactos/{codigoEntrada}',
    [directorioController::class, 'verContactos'])->name('directorio.verContactos');

Route::get('/directorio/eliminar',
    [directorioController::class, 'eliminar'])->name('directorio.eliminar');


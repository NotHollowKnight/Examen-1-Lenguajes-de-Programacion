<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directorioController;
use App\Http\Controllers\contactosController;

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

Route::get('/directorio/buscar/confirmar',
    [directorioController::class, 'buscarEntrada'])->name('directorio.buscar.confirmar');

Route::get('/directorio/verContactos/{codigoEntrada}',
    [directorioController::class, 'verContactos'])->name('directorio.verContactos');

Route::get('/directorio/eliminar',
    [directorioController::class, 'eliminar'])->name('directorio.eliminar');

Route::get('/contactos/añadir/{codigoEntrada}',
    [contactosController::class, 'añadir'])->name('contacto.añadir');

Route::POST('/contactos/añadir/confirmar/{codigoEntrada}',
    [contactosController::class, 'añadirContacto'])->name('contacto.añadir.confirmar');


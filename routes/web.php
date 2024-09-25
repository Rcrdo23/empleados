<?php

use App\Http\Controllers\CargoController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PaisController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('empleados');
});

   Route::resource('empleados', EmpleadoController::class);
   Route::resource('cargos', CargoController::class);
   Route::resource('paises', PaisController::class);
   Route::resource('ciudades', CiudadController::class);

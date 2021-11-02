<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Crear una nueva empresa ruta
Route::post('/companies',[ProductoController::Class,'storeCategoria']);
//Edita una nueva empresa ruta
Route::put('/companies/{id}',[ProductoController::Class,'updateCategoria']);
//Muestra la lista de todas las empresas ruta
Route::get('/companies',[ProductoController::Class,'indexCategoria']);
//Muestra un empresa especificada por un id ruta
Route::get('/companies/{id}',[ProductoController::Class,'showCategoria']);
//Burra una empresa especificada por un id ruta
Route::delete('/companies/{id}',[ProductoController::Class,'destroyCategoria']);


//Crear una pantalla nueva ruta
Route::post('/displays',[ProductoController::Class,'store']);
//Editar una pantalla por un  id ruta
Route::put('/displays/{id}',[ProductoController::Class,'update']);
//Mostrar las pantallas ruta
Route::get('/displays/{country?}',[ProductoController::Class,'index']);
//Mostrar una pantalla especificada por un id
Route::get('/displays/1/{id}',[ProductoController::Class,'showDisplay']);
//Borrar una pantalla especificada por un id
Route::delete('/displays/{id}',[ProductoController::Class,'destroy']);

//Mostrar las pantallas ruta
//Route::get('/displays/{id_categoria}/mostrar',[ProductoController::Class,'mostrarPantallasIdEmpresa']);
//Route::get('/ultimo/{country?}',[ProductoController::Class,'mostrarPantallasCountry']);
Route::get('/product/{id}',[ProductoController::Class,'show']);





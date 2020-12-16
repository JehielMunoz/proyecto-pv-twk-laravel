<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

# Ventas
Route::get('/productos', 'ProductoController@index');

# Ingreso productos
Route::get('/ingresoProducto', 'IngresoProdController@index');


# ...Vue?

Route::get('/ventas', 'VentasController@index');
Route::get('/compras', 'ComprasController@index');
Route::get('/crear_producto', 'CrearProductoController@index');
Route::get('/flujo_entrada', 'FlujoEntradaController@index');

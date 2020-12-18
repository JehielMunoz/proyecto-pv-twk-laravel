<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/home', 'HomeController@index')->name('home');

#getParametros
Route::get('/maxId', 'ProductoController@maxId');

Route::get('/marcas',       'ProductoController@getMarcas');
Route::get('/categorias',   'ProductoController@getCategorias');
Route::get('/medidas',      'ProductoController@getMedidas');
Route::get('/proveedores',  'ProductoController@getProv');

# Creaciones
#   |Productos
Route::post('/crearProducto/','ProductoController@crearProducto');
Route::post('/crearProducto/{newProd}','ProductoController@crearProducto');

# Restaurar AutoIncrement
Route::get('/restoreAA/','ProductoController@restoreAutoIncrement');
# Borrar
Route::get('/eliminar/{productoId}', 'ProductoController@eliminar');
# fromVue
Route::get('/buscar/', 'ProductoController@index');
Route::get('/buscarCodigo/{id}', 'ProductoController@buscaId');
Route::get('/buscarNombre/{name}', 'ProductoController@buscaName');
Route::get('/ventas', 'VentasController@index');
Route::get('/compras', 'ComprasController@index');
Route::get('/flujo_entrada', 'FlujoEntradaController@index');

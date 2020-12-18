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
/*
Route::get('/home', 'HomeController@index')->name('home');

#getParametros
Route::get('/maxId', 'ProductoController@maxId');

Route::get('/marcas',       'ProductoController@getMarcas');
Route::get('/categorias',   'ProductoController@getCategorias');
Route::get('/medidas',      'ProductoController@getMedidas');
Route::get('/proveedores',  'ProductoController@getProv');

#Creaciones
#   |Productos
Route::post('/crearProducto','ProductoController@crearProducto');
# fromVue
Route::get('/buscar', 'ProductoController@index2');
Route::get('/buscarCodigo/{id}', 'ProductoController@buscaId');
Route::get('/buscarNombre/{name}', 'ProductoController@buscaName');
Route::get('/ventas', 'VentasController@index');
Route::get('/compras', 'ComprasController@index');
Route::get('/flujo_entrada', 'FlujoEntradaController@index');
*/

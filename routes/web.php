<?php

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

use App\Http\Controllers\redireccionController;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ProductoController@ListadoProductosCategorias');

Route::get('/bajamodificacion', 'ProductoController@ListadoProductosCategoriasModificarEliminar');

Route::get('/altaProducto','ProductoController@ListadoProductosVariaciones');

Route::get('/altaCategoria',function()
{
    return view("altaCategoria");
});

Route::get('/altaMarca',function()
{
    return view("altaMarca");
});
Route::get('/carrito','CarritoController@CarritoDesdeInicio');

Route::post('/','ProductoController@AltaProducto');

Route::post('/altaCategoria','CategoriaController@AltaCategoria');

Route::post('/altaMarca','MarcaController@AltaMarca');

Route::get('/panel',function()
{
    $valor = "vacio";

    return view('panel',compact('valor'));
})->name('panel');;


Route::post('inicio/{buscador?}', 'ProductoController@ListadoProductosBuscador');

Route::get('/{categoria}', 'ProductoController@ListadoProductosPorCategoria');

Route::get('/producto/{id}','ProductoController@ProductoParaCarrito');

Route::post('/carrito','CarritoController@SumandoAlCarrito');


Route::get('/productobm/{id}', 'ProductoController@ProductoBajaModificar');


Route::get('/panel/{id}', 'ProductoController@EliminarProducto');








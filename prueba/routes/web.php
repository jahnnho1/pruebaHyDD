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

Route::get('/', 'homeController@home');
Route::get('/producto/{id}', 'productoController@vistaProducto');
Route::get('/ingresoCliente', 'ingresoClienteController@homeIngreso');
Route::get('/Empresa', 'homeController@homeEmpresa');
Route::get('/Servicios', 'homeController@homeServicio');
Route::get('/Categorias', 'homeController@homeCategorias');


/* * 
 * Categoria* 
 * /
 */
Route::get('/Categorias/{id}', 'productoController@categoria');




/*
 * 
 * Area Administrativa
 * 
 * /
 */

Route::get('/Administracion/areaAdministrativa', 'administracionController@homeAdministracion');
Route::get('/Administracion/productoAdministrativa', 'administracionController@homeProducto');
Route::get('/Administracion/categoriaAdministrativa', 'administracionController@homeCategoria');
Route::get('/Administracion/homePageAdministrativa', 'administracionController@homePageAdministracion');

/*
 * Admin Producto
 */
Route::get('/Administracion/agregarProductoAdm', 'productoAdministracionController@agregarProducto');
Route::post('/Administracion/EjecutarAgregarProductoAdm', 'productoAdministracionController@EjecutarAgregarProducto');


/*
 * Admin Categoria
 */
Route::get('/Administracion/agregarCategoriaAdm', 'categoriaAdministracionController@agregarCategoria');
Route::post('/Administracion/EjecutarAgregarCategoriaAdm', 'categoriaAdministracionController@EjecutarAgregarCategoria');


/*
 * 
 * Admin Home
 * 
 */


Route::get('/Administracion/agregarPromocionAdm', 'homepageAdministracionController@agregarPromocion');
Route::post('/Administracion/EjecutarAgregarPromocionAdm', 'homepageAdministracionController@EjecutarAgregarPromocion');

Route::get('/Administracion/agregarDestacadoAdm', 'homepageAdministracionController@agregarDestacado');
Route::post('/Administracion/EjecutarAgregarDestacadoAdm', 'homepageAdministracionController@EjecutarAgregarDestacado');
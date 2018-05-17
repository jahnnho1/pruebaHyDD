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

Route::get('/Administracion/areaAdministrativa', 'administracionController@homeAdministracion')->middleware('auth');
Route::get('/Administracion/productoAdministrativa', 'administracionController@homeProducto')->middleware('auth');
Route::get('/Administracion/categoriaAdministrativa', 'administracionController@homeCategoria')->middleware('auth');
Route::get('/Administracion/homePageAdministrativa', 'administracionController@homePageAdministracion')->middleware('auth');

/*
 * Admin Producto
 */
Route::get('/Administracion/agregarProductoAdm', 'productoAdministracionController@agregarProducto')->middleware('auth');
Route::post('/Administracion/EjecutarAgregarProductoAdm', 'productoAdministracionController@EjecutarAgregarProducto')->middleware('auth');


/*
 * Admin Categoria
 */
Route::get('/Administracion/agregarCategoriaAdm', 'categoriaAdministracionController@agregarCategoria')->middleware('auth');
Route::post('/Administracion/EjecutarAgregarCategoriaAdm', 'categoriaAdministracionController@EjecutarAgregarCategoria')->middleware('auth');


/*
 * 
 * Admin Home
 * 
 */


Route::get('/Administracion/agregarPromocionAdm', 'homepageAdministracionController@agregarPromocion')->middleware('auth');;
Route::post('/Administracion/EjecutarAgregarPromocionAdm', 'homepageAdministracionController@EjecutarAgregarPromocion')->middleware('auth');;

Route::get('/Administracion/agregarDestacadoAdm', 'homepageAdministracionController@agregarDestacado')->middleware('auth');;
Route::post('/Administracion/EjecutarAgregarDestacadoAdm', 'homepageAdministracionController@EjecutarAgregarDestacado')->middleware('auth');;



/*
 * 
 * Login
 * 
 */

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
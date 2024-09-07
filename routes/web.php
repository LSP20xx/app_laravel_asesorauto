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

//Auth::routes();

Route::get('/', 'WebController@index')->name('home');
Route::get('/quienes-somos', 'WebController@quienes')->name('quienes-somos');
Route::get('/servicios', 'WebController@servicios')->name('servicios');
Route::get('/nuestra-mision', 'WebController@mision')->name('mision');
Route::get('/terminos-y-condiciones', 'WebController@terminos')->name('terminos');
Route::get('/contacto', 'WebController@contacto')->name('contacto');
Route::post('/contacto', 'WebController@contactopost')->name('contactopost');
Route::get('/novedades', 'WebController@novedades')->name('novedades');
Route::get('/automoviles', 'WebController@automoviles')->name('automoviles');
Route::get('/auto/{id}', 'WebController@auto')->name('auto');
Route::get('/consultar/{id}', 'WebController@consultar')->name('consultar');
Route::post('/consultar/{id}', 'WebController@consultapost')->name('consultapost');
Route::get('/get_by_marca', 'WebController@get_by_marca')->name('get_by_marca');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
    Route::get('logout', 'Auth\LoginController@logout');
    Route::get('/', 'Admin\HomeController@index')->name('home');
    Route::resource('autos', 'Admin\AutosController');
    Route::resource('marcas', 'Admin\MarcasController');
    Route::resource('modelos', 'Admin\ModelosController');
    Route::resource('equipamientos', 'Admin\EquipamientosController');
    Route::resource('segmentos', 'Admin\SegmentosController');
    Route::resource('tipo_combustibles', 'Admin\TiposCombustibleController');
    Route::resource('tipo_vendedores', 'Admin\TiposVendedorController');
    Route::resource('destacados', 'Admin\DestacadosController');
});

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Form'], function () {

    /**
     * VERBO GET
     */

    Route::get('condominio', 'ControllerCondominio@ListAllCondominios')->name('condominios.listAll');
    Route::get('condominio/novo', 'ControllerCondominio@formAddCondominios')->name('condominios.formAddCondominio');
    Route::get('condominio/editar/{condominio}', 'ControllerCondominio@formEditCondominios')->name('condominios.formAddCondominio');
    Route::get('condominio/{condominio}', 'ControllerCondominio@listCondominios')->name('condominios.list');

    /**
     * VERBO POST
     */
    Route::post('condominio/store', 'ControllerCondominio@storeCondominios')->name('condominios.store');
    /**
     * VERBO PUT/PATCH
     */
    Route::put('condominio/edit/{condominios}', 'ControllerCondominio@edit')->name('condominios.edit');
    /**
     * VERBO DELETE
     */
    Route::delete('condominio/destroy/{condominio}', 'ControllerCondominio@destroy')->name('condominio.destroy');


});


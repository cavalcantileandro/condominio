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

    Route::get('bloco', 'ControllerBloco@ListAllBlocos')->name('blocos.listAll');
    Route::get('bloco/novo', 'ControllerBloco@formAddBlocos')->name('blocos.formAddBloco');
    Route::get('bloco/editar/{bloco}', 'ControllerBloco@formEditBlocos')->name('blocos.formAddBloco');
    Route::get('bloco/{bloco}', 'ControllerBloco@listBlocos')->name('blocos.list');

    /**
     * VERBO POST
     */
    Route::post('condominio/store', 'ControllerCondominio@storeCondominios')->name('condominios.store');

    Route::post('bloco/store', 'ControllerBloco@storeBlocos')->name('blocos.store');

    /**
     * VERBO PUT/PATCH
     */
    Route::put('condominio/edit/{condominios}', 'ControllerCondominio@edit')->name('condominios.edit');

    Route::put('bloco/edit/{blocos}', 'ControllerBloco@edit')->name('blocos.edit');

    /**
     * VERBO DELETE
     */
    Route::delete('condominio/destroy/{condominio}', 'ControllerCondominio@destroy')->name('condominio.destroy');

    Route::delete('bloco/destroy/{bloco}', 'ControllerBloco@destroy')->name('bloco.destroy');


});


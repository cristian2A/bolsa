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


/** SECCION ADMINISTRACION */
Route::get('/admin', function () {
    return view('admin/admin');
});

//Route::get('user/profile', 'UserController@showProfile')->name('profile');


    /** SUBSECCION EMPRESAS */
    Route::get('/admin/empresas', 'EmpresaController@listar');
    Route::get('/admin/empresas/nueva', 'EmpresaController@crear'); 
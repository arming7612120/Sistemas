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


Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/','inicio')->name('inicio');


//REGISTRO DE PERSONAL
Route::view('/personal.registro_personal','personal.registro_personal')->name('personal.registro_personal');
Route::post('/personal', 'PersonalController@store')->name('personal.registro_personal');
Route::get('/registro_personal', 'PersonalController@nuevo')->name('personal.registro_personal');

//REGISTROS ADICIONALES
Route::get('/listadopersonal', 'PersonalController@registros_adicionales')->name('personal.registros_adicionales');


//Route::view('/personal.registros_adicionales','personal.registros_adicionales')->name('personal.registros_adicionales');
Route::view('/personal.registrar_varios','personal.registrar_varios')->name('personal.registrar_varios');
Route::view('/personal.actualizar_registros','personal.actualizar_registros')->name('personal.actualizar_registros');
Route::view('/personal.actualizar','personal.actualizar')->name('personal.actualizar');




Route::view('/cursos.listar_cursos','cursos.listar_cursos')->name('cursos.listar_cursos');
Route::view('/cursos.registrar_cursos','cursos.registrar_cursos')->name('cursos.registrar_cursos');
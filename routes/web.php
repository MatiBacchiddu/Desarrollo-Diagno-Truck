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

Route::get('/', 'InicioController@index')->name('inicio.index');

// admin
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::post('/consultaAdmin', 'ConsultaController@store')->name('consultaAdmin.store');

// admin consultas
Route::get('/admin/consultas', 'AdminController@consultas')->name('admin.consultas');
Route::delete('/consultas/{consulta}', 'ConsultaController@destroy')->name('consulta.destroy');

//admin noticias
Route::get('/admin/noticias', 'NoticiaController@index')->name('noticia.index');
Route::get('/admin/noticiasCrear', 'NoticiaController@create')->name('noticia.create');
Route::post('/noticia', 'NoticiaController@store')->name('noticia.store');
Route::delete('/noticia/{noticia}', 'NoticiaController@destroy')->name('noticia.destroy');

// admin servicios
Route::get('/admin/servicios', 'AdminController@servicios')->name('admin.servicios');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

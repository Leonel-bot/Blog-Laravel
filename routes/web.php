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

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//redactar una nueva noticia
Route::get('/Redactar', function () {
    return view('noticia.redactar');
});
Route::post('/Redactar', 'NoticiaController@create');


//muestra las noticias
Route::get('/Noticias', 'NoticiaController@index');

//detalle de la noticia
Route::get('/Noticias/{id}', 'NoticiaController@show');

//edita la noticia
Route::post('/Editar','NoticiaController@edit');
Route::get('/Noticias/{id}/Editar','NoticiaController@editar');

Route::get('/Noticias/{id}/Borrar','NoticiaController@destroy');


//Route::post('/Comentario', 'ComentarioController@create');
Route::post('/Noticias/{id}/Comentar', 'ComentarioController@create');












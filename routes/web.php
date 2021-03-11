<?php

use Illuminate\Support\Facades\Route;



Route::get('/iniciodatos/{id_user}', 'DatosController@index');
Route::post('/guardardatos', 'DatosController@save');
Route::get('/mostrar/{id}', 'DatosController@index2')->name('familia.mostrar');
Route::post('/mostrar', 'DatosController@save');



Route::get('/encuesta', 'EncuestaController@index');
Route::post('/guardarencuesta', 'EncuestaController@save');
Route::get('/diagnostico/{id}', 'EncuestaController@index2')->name('general');



Route::get('/likert2/{iddiag}/{idfamili}', 'LikertController@index2');
Route::post('/saveliket2', 'LikertController@save');
Route::get('/mostrarliker/{iddiag}/{idfamili}', 'LikertController@index3')->name('pre-evaluacion');



Route::get('/likert3/{iddiag}/{idfamili}', 'Likert3Controller@index')->name('post-evaluacion');;
Route::post('/saveliket3', 'Likert3Controller@save');
Route::get('/likert31/{iddiag}/{idfamili}', 'LikertController@index3')->name('evalua');



Route::post('/resultado/{idfamili}', 'ResultadoController@index')->name('Resultado');;


Route::get('/Familia/{id_user}','FamiliaController@index');





Route::resource ('Ubigeo','UbigeoController');
Route::resource ('Religion','ReligionController');
Route::resource ('Dominio','DominioController');
Route::resource ('Clase','ClaseController');
Route::resource ('TipoDiagnostico','TipoDiagnosticoController');
Route::resource ('Diagnostico','DiagnosticoController');
Route::resource ('PosibleCausa','PosibleCausaController');


Route::resource ('ObjetivoNoc','ObjetivoNocController');
Route::resource ('SubObjetivoNoc','SubObjetivoNocController');

Route::resource ('IntervencionesNic','IntervencionesNicController');
Route::resource ('Racimo','RacimoController');






Auth::routes();

Route::get('', 'HomeController@index')->name('home');

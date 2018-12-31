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

Route::get('/', 'WelcomeController@index');
/*Estoy creando una ruta fotos para en ella escribir estas en la galeria de fotos
y le paso un parametro, pongo el signo de interrogacion para cuando no tenga un numero, osea un parametro ya fijo
claro que si lo cambias ese cambia 

Route::get('fotos/{numero?}',function ($numero='si numero') {
    return 'Estas en la galeria de fotos: '.$numero;
});

ahora si solo queremeo snumero seria asi, valiadando lo que coloca el usuario en la url

*/ 


/*Route::get('solonumero/{numero?}',function ($numero='si numero') {
    return 'Estas en la galeria de fotos: '.$numero;
})-> where('numero','[0-9]');

Route::get('numeroletra/{numero?}',function ($numero='si numero') {
    return 'Estas en la galeria de fotos: '.$numero;
});
ademas podemos hacer un atajo, donde primero es la galeria y luego ya mostramos el fotos php
Route::view('galeria','fotos', ['numero'=>125]);

Route::get('fotos',"Pagescontroller@fotos")->name('foto');

Route::get('blog',"Pagescontroller@blog")->name('noticia');

Route::get('nosotros/{nombre?}',"Pagescontroller@nosotros")->name('nosotros');*/



Route:: get('/usuarios','UserController@index');
Route ::get('/usuarios/{id}','UserController@number')->where('id','\d+');/*\d+ nos permite caracteres de numeros y \w alfanumericos*/
Route::get('/usuarios/{nuevo}','UserController@show')->where('$nuevo','\w');
Route::get('/saludo/{name?}/{nickname?}','UserController@saludo');
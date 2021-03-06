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

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {

 $datos = [
     "titulo"=>"Hola alumnos de Laravel",
     "contenido"=>"Esto es una prueba de envío"
 ];

 Mail::send('emails.test', $datos, function($mensaje){

    $mensaje->to('felipepinoredes@gmail.com',
    'Felipe Pino')->subject('Ojo, mensaje importante');
 });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdministradorController@index');

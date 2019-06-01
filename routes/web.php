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

/*Route::get('/', function () {
    return view('welcome');
});*/
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home') -> middleware('verified');

Route::get('/error', 'ExceptionController@index');

Route::get('vertabla','UsuarioController@ver_tabla');
Route::put('eliminar_datos/{id}', 'UsuarioController@eliminar_datos');
Route::put('actualizarp/{id}','UsuarioController@actualizar');
Route::get('actualizar/{id}', 'UsuarioController@edit_datos');


Route::get('/', function () {
    return view('home');
})->name('home')->middleware('verified');

//test register book
Route::get('/registro_libro', function () {
    return view('registro_libro');
})/*->name('registro_libro')->middleware('verified')*/;
//registrar libro
Route::post('/registrar_libro', 'RegistroLibroController@register_book');
Route::get('/listar_estantes', 'RegistroLibroController@listado_estantes');

//TODO busqueda de libros

//regresa la vista del buscador de libros
Route::get('/buscarlibro', 'BuscadorControlador@buscar_view');
//ruta usado internamente para buscar live
Route::post('/observador', 'BuscadorControlador@buscar');

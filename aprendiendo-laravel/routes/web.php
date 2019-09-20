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

use function foo\func;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peliculas/{pagina?}', 'PeliculaController@index');
Route::get('/detalle/{year?}', [
    'middleware'    => 'testyear',
    'uses'  => 'PeliculaController@detalle',
    'as'    => 'detalle.pelicula'
]);
Route::get('redirigir', 'PeliculaController@redirigir');

Route::get('/formulario', 'PeliculaController@formulario');
Route::post('/recibir', 'PeliculaController@recibir');

Route::resource('/usuario', 'UserController');

// Routes of Books
Route::group(['prefix' => 'books'], function () {
    Route::get('index', 'BookController@index');
    Route::get('show/{id}', 'BookController@detail');
    Route::get('guardar', 'BookController@create');
    Route::post('save', 'BookController@save');
});

/*
Route::get('/mostrar-fecha', function () {
    $title = "soy una variable creada en la ruta";
    return view('mostrar-fecha', array(
        'titulo' => $title
    ));
});

Route::get('/pelicula/{titulo?}', function ($titulo = "No hay una pelicula seleccionada") {
   return view('pelicula', array(
       'title' => $titulo
   ));
});

Route::get('/listado-peliculas', function () {
    $title = "Listado de películas";
    $listado = array('batman', 'superman', 'hulk');
    return view('pelicula.listado')
        ->with('title', $title)
        ->with('listado', $listado);
});

Route::get('/pagina-generica', function () {
    return view('pagina');
});
*/

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

//Route::get('/', function () {
//    return view('welcome');
//});
/* Rotas */
/* Series */
Route::get('/series', 'SeriesController@index')
        ->name('listar_series');
Route::get('/series/criar', 'SeriesController@create')
        ->middleware('autenticador');
Route::post('/series/criar', 'SeriesController@store')
        ->name('form_criar_serie')
        ->middleware('autenticador');
Route::delete('/series/{id}', 'SeriesController@destroy')
        ->middleware('autenticador');
Route::post('/series/{id}/editaNome', 'SeriesController@edit')
        ->middleware('autenticador');

Route::get('/series/{serieId}/temporadas', 'TemporadasController@index');

/* Temporadas */
Route::get('/temporadas/{temporada}/episodios', 'EpisodiosController@index');
Route::post('/temporadas/{temporada}/episodios/assistido', 'EpisodiosController@assistido')
        ->middleware('autenticador');

/* Auth */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* Entrar */
Route::get('/entrar', 'EntrarController@index');
Route::post('/entrar', 'EntrarController@entrar');

/* Registrar */
Route::get('/registrar', 'RegistroController@create');
Route::post('/registrar', 'RegistroController@store');

/* Sair */
Route::get('/sair', function () {
    \Illuminate\Support\Facades\Auth::logout();

    return redirect('/entrar');
});

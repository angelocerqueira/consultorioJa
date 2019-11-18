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

Route::get('/', 'Controller@homepage');
Route::get('/cadastro', function(){
    return view('pages.cadastro');
});
Route::get('/quemsomos', function () { return view('pages.quemsomos'); });
Route::get('/faleconosco', function () { return view('pages.faleconosco'); });
Route::get('/resultbusca/buscaavancada', function () { return view('pages.buscaavancada'); });


Route::get('/resultbusca', 'AnuncianteController@index');
Route::post('/cadastrarconsultorio', 'AnuncianteController@store');



Route::get('/search' ,'AnuncianteController@search' );
Route::get('/searchAdvanced' ,'SearchAdvancedController@search' );
Route::get('/searchHome' ,'Controller@searchHome');

Route::get('/cadastroconsultorio', function(){
    return view('acessoAnunciante.cadastroconsultorio');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

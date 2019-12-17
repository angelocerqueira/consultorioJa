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
Route::get('/quemsomos', 'Controller@about');
Route::get('/faleconosco', 'Controller@contact');


Route::post('/cadastrarconsultorio', 'AnuncianteController@store');
Route::get('/search' ,'AnuncianteController@search' );
Route::get('/searchAdvanced' ,'SearchAdvancedController@search' );

Route::get('/searchHome' ,'Controller@searchHome');


Route::get('/cadastroconsultorio', function(){
    return view('acessoAnunciante.cadastroconsultorio');
});

Route::get('/immobiles/seach-advanced', 'Controller@searchAdvanced');
Route::get('/immobiles', 'SearchController@index');
Route::get('/{immobileId}/immobiles', 'SearchController@show');
Route::get('/{immobileId}/immobiles/enrollment', 'SearchController@enrollment');
Route::post('/{immobileId}/immobiles/enrollment/thanks', 'SearchController@thanks');

// Route::get('/{id}/imovel', function (){
//     return view('pages.imovel');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


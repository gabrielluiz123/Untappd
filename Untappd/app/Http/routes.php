<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('/index', function(){
	if(!Auth::check())
		return redirect('auth/login');
	
	return redirect('inicio');  
});
Route::get('/', function(){
	if(!Auth::check())
		return redirect('auth/login'); 
});
Route::group(['prefix' => '', 'middleware' => 'auth'], function(){
		Route::get('/teste', 'UserController@teste');
		Route::get('/home','UserController@show');
		Route::get('/inicio','UserController@show');
		Route::get('/solicitations','UserController@solicitations');
		Route::get('/accept/{id}', 'FriendshipController@accept');
		Route::get('/make_solicitation/{id}', 'FriendshipController@makeSolicitation');
		Route::get('/decline/{id}', 'FriendshipController@decline');
		Route::get('/vizualizar/{id}', 'FriendshipController@vizualizar');
		Route::get('/vizualizarP/{id}', 'FriendshipController@vizualizarP');
		Route::get('/check', 'CheckInController@show');
		Route::post('/check2', 'CheckInController@fase2');
		Route::get('/register_beer', 'CervejaController@show');
		Route::post('/store_beer', 'CervejaController@store');
		Route::get('/register_bar', 'CervejariaController@show');
		Route::post('/store_bar', 'CervejariaController@store');
		Route::post('/store_check', 'CheckInController@store');
		Route::get('/friends', 'FriendshipController@showFriends');
		Route::post('/search', 'UserController@search');
		Route::get('/visualizarC/{id}', 'CervejaController@showPerfil');
		Route::get('/visualizarCer/{id}', 'CervejariaController@showPerfil');
		Route::get('/badges', 'BadgeController@index');
		Route::post('/store_coment', 'ComentarioController@store');
		Route::post('/register', 'UserController@store');
		Route::get('/feed', 'FeedController@show');
		Route::get('/badges_amigo/{id}', 'BadgeController@badgesAmigo');
});

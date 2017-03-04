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

Route::get('/', function () {
	$usuarios = DB::table('users')->get();
	$restaurantes = DB::table('restaurants')->get();
	$platos = DB::table('dishes')->get();
	
    return Response::json(['users'=>$usuarios,'restaurant'=>$restaurantes,'dishes'=>$platos]);
});

Route::get('/api-json', function () {
	$usuarios = DB::table('users')->get();
	$restaurantes = DB::table('restaurants')->get();
	$platos = DB::table('dishes')->get();
	
    return Response::json(['users'=>$usuarios,'restaurant'=>$restaurantes,'dishes'=>$platos]);
});

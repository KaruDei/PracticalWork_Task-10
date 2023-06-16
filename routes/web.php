<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
	return view('welcome');
}) -> name('home');

route::get(
	'/exit', 
	'App\Http\Controllers\UserController@logout'
) -> name('logout');


/* Authorization */

Route::get('/auth', function () {
	return view('auth');
}) -> name('auth');

Route::post(
	'/auth',
	'App\Http\Controllers\UserController@auth'
) -> name('auth.sub');


/* Registration */

Route::get('/reg', function () {
	return view('reg');
}) -> name('reg');

Route::post(
	'/reg/sub',
	'App\Http\Controllers\UserController@reg'
) -> name('reg.sub');
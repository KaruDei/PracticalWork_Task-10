<?php

use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Library;

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

/* Authorization */

Route::get('/auth', function () {
	return view('auth');
}) -> name('auth');

Route::post(
	'/auth/sub',
	'App\Http\Controllers\UserController@auth'
) -> name('auth.sub');

route::get(
	'/exit', 
	'App\Http\Controllers\UserController@logout'
) -> name('logout');

/* Registration */

Route::get('/reg', function () {
	return view('reg');
}) -> name('reg');

Route::post(
	'/reg/sub',
	'App\Http\Controllers\UserController@reg'
) -> name('reg.sub');

/* Profile */

route::get(
	'/profile/{id}',
	'App\Http\Controllers\UserController@profile'
) -> name('profile');

/* Library */

route::get(
	'/library',
	'App\Http\Controllers\UserController@out_library'
) -> name('library');

route::post(
	'/library',
	'App\Http\Controllers\UserController@add_book'
) -> name('add_book');

route::get(
	'/library/book/{id}',
	'App\Http\Controllers\UserController@out_book'
) -> name('library_book');
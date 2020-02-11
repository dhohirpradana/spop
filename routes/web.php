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
    return view('welcome');
});

Route::get('/pemutakhiran/create',              'PemutakhiranController@create');
Route::post('/pemutakhiran/create',             'PemutakhiranController@store');
Route::get('/pemutakhiran/{nop}/bangunan/create',      'PemutakhiranController@createBangunan');
Route::post('/pemutakhiran/{nop}/bangunan/create',     'PemutakhiranController@storeBangunan');
Route::get('/pemutakhiran/{nop}',               'PemutakhiranController@show');
// Route::get('/create/{idPerson}', 'TransaksiController@createId');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register', function() {
    return view("profile.register");
});
Route::get('/profile', function() {
    return view("profile.show");
});
Route::get('/pemutakhiran', function() {
    return view("pemutakhiran.index");
});

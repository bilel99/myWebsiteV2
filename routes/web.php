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


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| BACKS OFFICES
|
*/
// Dashboard
Route::get('/dashboard', ['as' => 'admin.dashboard', 'uses' => 'Admin\DashboardController@index']);





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|  Authentification
|
*/
Auth::routes();



Route::get('/', function () {
    return view('welcome');
});

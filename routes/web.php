<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/countries', 'CountriesController@index');
Route::get('/countries/create', 'CountriesController@create');
Route::post('/countries/store', 'CountriesController@store');
Route::get('/countries/{id}/show', 'CountriesController@show');
Route::get('/countries/{id}/edit', 'CountriesController@edit');
Route::post('/countries/{id}/update', 'CountriesController@update');
Route::post('/countries/{id}/delete', 'CountriesController@destroy');

// States Routes

Route::get('/states', 'StatesController@index');
Route::get('/states/create', 'StatesController@create');
Route::post('/states/store', 'StatesController@store');
Route::get('/states/{id}/show', 'StatesController@show');
Route::get('/states/{id}/edit', 'StatesController@edit');
Route::post('/states/{id}/update', 'StatesController@update');
Route::post('/states/{id}/destroy', 'StatesController@destroy');

// Cities Routes

Route::get('/cities', 'CitiesController@index');
Route::get('/cities/create', 'CitiesController@create');
Route::post('/cities/store', 'CitiesController@store');
Route::get('/cities/{id}/show', 'CitiesController@show');
Route::get('/cities/{id}/edit', 'CitiesController@edit');
Route::post('/cities/{id}/update', 'CitiesController@update');
Route::post('/cities/{id}/destroy', 'CitiesController@destroy');

// Continents Route

Route::resource('/continents', 'ContinentsController');

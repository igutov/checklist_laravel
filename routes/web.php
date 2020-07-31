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

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route::resources('/home', [
//     'list' => 'ListController',
//     'task' => 'TaskController',
// ]);

// Route::resource('/list', 'ListController');
// Route::resource('/task', 'TaskController');

Route::resources([
    'list' => 'ListController',
    'task' => 'TaskController',
]);

// Route::resource('photos', 'PhotoController')->names([
//     'create' => 'photos.build'
// ]);
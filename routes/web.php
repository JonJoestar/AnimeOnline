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

Route::get('/aboutus', function() {
    return view('aboutus');
});

Route::get('/contactus', function() {
    return view('contactus');
});

//Admin.AnimeName Route
Route::get('/admin/AnimeName', 'AnimeController@Index');

Route::get('/admin/AnimeName/Create', 'AnimeController@Create');

Route::post('/admin/AnimeName/Create', 'AnimeController@Online');

Route::get('/admin/AnimeName/Edit/{id}', 'AnimeController@Edit');

Route::post('/admin/AnimeName/Edit/', 'AnimeController@Update');

Route::get('/admin/AnimeName/Delete/{id}', 'AnimeController@Delete');

Route::delete('/admin/AnimeName/Delete/', 'AnimeController@Remove');

Route::get('/admin/AnimeName/{id}', 'AnimeController@Show');

//AnimeOnline routes
Route::get('/AnimeName', 'AnimeController@AnimeOnline')->name('AnimeOnline');

Route::get('/AnimeName/{id}', 'AnimeController@AnimeDetails')->name('AnimeDetails');

Route::get('/mongodb', function() {
    return view('mongodb');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

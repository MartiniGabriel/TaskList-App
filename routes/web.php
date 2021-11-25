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
    return view('dashboard.dashboard');
});

Route::get('/classification', function () {
    return view('classification.viewClassification');
});

Route::get('/tag', function () {
    return view('tag.viewTag');
});

Route::get('/tag/create/', 'App\Http\Controllers\tagController@create');
Route::get('/tag/view/{id}', 'App\Http\Controllers\tagController@show');
Route::post('/tag/update/{id}', 'App\Http\Controllers\tagController@update')->name('update_tag');
Route::post('/tag/create/', 'App\Http\Controllers\tagController@store')->name('create_tag');

Route::get('/task', function () {
    return view('task.viewTasks');
});
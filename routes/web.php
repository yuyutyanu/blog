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

Route::get('/', BlogController::class.'@index');
Route::get('/posts/{id}', BlogController::class.'@show');
Route::get('/new', BlogController::class.'@new');
Route::patch('/posts/{id}',BlogController::class.'@update');
Route::post('/create',BlogController::class.'@create');
Route::post('/posts/{id}/edit',BlogController::class.'@edit');
Route::delete('/posts/{id}',BlogController::class.'@delete');
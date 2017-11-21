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

// Route::resourceをつけるだけでCRUDルーティングを作成する
//Route::get('/report', 'MonthlyReportController@index');
//Route::get('/report/{id}', 'MonthlyReportController@show');
//Route::get('/report/create', 'MonthlyReportController@create');

Route::resource('report', 'MonthlyReportController');

// 何故かstoreがうまくいかないので別途定義する
Route::post('/report/store', 'MonthlyReportController@store');

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

Route::get('/index', 'HelloController@index');


// Route::get('/index', function () {
//     // Log::channel('logstash')->emergency('aaafeaf');
//     // \Log::channel("logstash")->info("THIS IS SAMPLE RECORD FROM LOG");
//     print("ログを出力しました");
// });

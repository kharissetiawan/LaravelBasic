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

route::get('/user', function () {
    return 'Hello world!';
});

Route::get('/siswa/{id}', function ($id) {
     return "Hello World ". $id;
});

Route::get('/guru/{id}', function ($id=null){
    return "Hello Guru ". $id;
});

Route::get('/admin', function () {
    return view("admin");
});

Route::get('/siswa', function () {
    return view("siswa");
});

Route::get('/guru', function () {
    return view("guru");
});

Route::get('/admin', function () {
    return view("admin");
});

Route::get('/admin/{id}', function ($id) {
    return ("Hello admin"). $id;
});
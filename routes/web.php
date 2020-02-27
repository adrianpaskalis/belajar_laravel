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

Route :: get('halo', function() { 
    return "gue lagi belajar biar dapet s.kom";
}); 

Route :: get('blog', function() {
    return view ('blog');
});  

Route :: get('dosen', 'DosenController@index');
Route :: get('pegawai/{nama}', 'PegawaiController@index');
Route::get('/form', 'PegawaiController@form');
Route::post('/form/proses', 'PegawaiController@proses'); 

// route blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak'); 

Route :: get('/pegawai', 'PegawaiController@index'); 
Route :: get ('/pegawai', 'PegawaiController@tambah'); 
Route :: post('/pegawai/store', 'PegawaiController@store');
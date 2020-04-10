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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/kategori','KategoriMakananController@kategori');
Route::get('/kategori_list/{id}', 'KategoriMakananController@kategori_list');
Route::post('/kategori/tambah','KategoriMakananController@tambah');
Route::post('/kategori/update/{id}','KategoriMakananController@update');
Route::get('/kategori/delete/{id}','KategoriMakananController@delete');


Route::get('/resep', 'ResepMakananController@resep');
Route::get('/resep_list/{id}', 'ResepMakananController@resep_list');
Route::post('/resep/tambah', 'ResepMakananController@tambah');
Route::get('/resep/create/{id_kategori}', 'ResepMakananController@create');
Route::post('/resep/update/{id}', 'ResepMakananController@update');
Route::get('/resep/delete/{id}', 'ResepMakananController@delete');
Route::get('/resep/detail/{id}', 'ResepMakananController@detail');
Route::get('/resep/edit/{id}', 'ResepMakananController@edit');







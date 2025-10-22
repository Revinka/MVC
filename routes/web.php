<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "Hello World";
   });
   Route::get('/shey', function () {
    return "Hello shey";
   });

   Route::get('/form-produk', function () {
    return view('form-produk');
   });

   Route::post('/kirim-produk', function (Request $request) {
    $nama = $request->input('nama');
    $harga = $request->input('harga');
    $kategori = $request->input('kategori');
    return "Produk bernama <b>$nama</b> dengan harga <b>Rp$harga</b>
   termasuk kategori <b>$kategori</b> berhasil dikirim!";
   });

 
Route::get('/produk/edit', function () { 
    return view('edit-produk'); 
});

Route::put('/produk/update', function (Request $request) { 
    $namaBaru = $request->input('nama'); 
    $hargaBaru = $request->input('harga'); 
    $kategoriBaru = $request->input('kategori'); 
 
    return "Data produk berhasil diperbarui menjadi:<br> 
            <b>Nama:</b> $namaBaru <br> 
            <b>Harga:</b> Rp$hargaBaru <br> 
            <b>Kategori:</b> $kategoriBaru"; 
}); 

Route::get('/produk/edit-harga', function () { 
    return view('edit-harga'); 
}); 

Route::patch('/produk/update-harga', function (Request $request) { 
    $hargaBaru = $request->input('harga'); 
 
    return "Harga produk berhasil diperbarui menjadi <b>Rp$hargaBaru</b> 
(tanpa mengubah data lain)."; 
}); 

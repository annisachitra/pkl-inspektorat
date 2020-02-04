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
    return view('home');
})->name('home');
Route::get('kondisi',function(){
    return view('tentang.kondisi');
})->name('kondisi');
Route::get('data',function(){
    return view('tentang.data');
})->name('data');
Route::get('rencana',function(){
    return view('tentang.rencana');
})->name('rencana');
Route::get('sambutan',function(){
    return view('tentang.sambutan');
})->name('sambutan');
Route::get('struktur',function(){
    return view('tentang.struktur');
})->name('struktur');
Route::get('tugas',function(){
    return view('tentang.tugas');
})->name('tugas');
Route::get('visi',function(){
    return view('tentang.visi');
})->name('visi');
Route::get('agenda',function(){
    return view('informasi.agenda');
})->name('agenda');
Route::get('artikel',function(){
    return view('informasi.artikel');
})->name('artikel');
Route::get('berita',function(){
    return view('informasi.berita');
})->name('berita');
Route::get('pengumuman',function(){
    return view('informasi.pengumuman');
})->name('pengumuman');
Route::get('foto',function(){
    return view('galeri.foto');
})->name('foto');
Route::get('video',function(){
    return view('galeri.video');
})->name('video');
Route::get('transparan',function(){
    return view('transparansi.index');
})->name('transparan');
Route::get('download',function(){
    return view('download.index');
})->name('download');
Route::get('situs',function(){
    return view('situs.index');
})->name('situs');
Route::get('kontak',function(){
    return view('kontak.index');
})->name('kontak');
Route::get('content1',function(){
    return view('informasi.content');
})->name('content1');

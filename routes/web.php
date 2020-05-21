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
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/berita', function () {
    return view('blog');
})->name('blog');

Route::get('/mendes-pdtt-resmikan-wahana-edu-wisata-lontar-sewu', function () {
    return view('berita1');
})->name('berita1');

Route::get('/4-tempat-wisata-di-gresik-uniknya-bukit-kapur-hingga-kebun-mangrove', function () {
    return view('berita2');
})->name('berita2');

Route::get('/berikut-daftar-lengkap-juara-cak-dan-yuk-gresik-2016', function () {
    return view('berita3');
})->name('berita3');

Route::get('/upacara-adat-di-bali', function () {
    return view('berita4');
})->name('berita4');

Route::get('/wisata-kuliner-indonesia', function () {
    return view('berita4');
})->name('berita4');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/elements', function () {
    return view('elements');
})->name('elements');

Route::get('/trending', function () {
    return view('offers');
})->name('offers');

Route::get('/single_listing', function () {
    return view('single_listing');
})->name('single_listing');
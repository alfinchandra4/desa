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

Route::view('/', 'public.index')->name('homepage');
Route::view('/profile', 'public.profile')->name('profile');
Route::view('/infografis', 'public.infografis')->name('infografis');
Route::view('/berita', 'public.berita')->name('berita');
Route::view('/layanan', 'public.layanan')->name('layanan');

Route::prefix('potensi_desa')->group(function() {
    Route::view('/', 'public.potensi')->name('potensi_desa');
    Route::get('/umkm');
    Route::get('/seni_budaya');
    Route::get('/wisata');
    Route::get('/guest_house');
});

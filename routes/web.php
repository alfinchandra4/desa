<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\PotensiDesaController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;
use Symfony\Polyfill\Intl\Idn\Info;

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
    Route::get('/umkm', [PotensiDesaController::class, 'umkm'])->name('potensi_umkm');
    Route::get('/seni_budaya', [PotensiDesaController::class, 'seni_budaya'])->name('potensi_seni_budaya');
    Route::get('/wisata', [PotensiDesaController::class, 'wisata'])->name('potensi_wisata');
    Route::get('/guest_house', [PotensiDesaController::class, 'guest_house'])->name('potensi_guest_house');
});

// Login Area
Route::get('/login',  [AdminAuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AdminAuthController::class, 'attempting']);
Route::get('/logout', [AdminAuthController::class, 'logout']);

// Admin Area
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::prefix('berita')->group(function() {
        Route::get('/', [BeritaController::class, 'index'])->name('admin.berita');
        Route::get('/create', [BeritaController::class, 'create'])->name('admin.berita.create');
        Route::post('/', [BeritaController::class, 'store'])->name('admin.berita.store');
        Route::get('/edit/{berita_id}', [BeritaController::class, 'edit'])->name('admin.berita.edit');
        Route::post('/update/{berita_id}', [BeritaController::class, 'update'])->name('admin.berita.update');
        Route::get('/delete/{berita_id}', [BeritaController::class, 'destroy'])->name('admin.berita.delete');
        Route::get('/detail/{berita_id}', [BeritaController::class, 'detail'])->name('admin.berita.detail');
    });

    Route::prefix('infografis')->group(function () {
        Route::get('agama', [InfografisController::class, 'agama'])->name('admin.infografis.agama');
        Route::post('agama', [InfografisController::class, 'agama_store'])->name('admin.infografis.agama.store');
        Route::get('agama/{agama_id}', [InfografisController::class, 'agama_delete'])->name('admin.infografis.agama.delete');

        Route::get('demografi', [InfografisController::class, 'demografi'])->name('admin.infografis.demografi');
        Route::post('demografi', [InfografisController::class, 'demografi_update'])->name('admin.infografis.demografi.update');

        Route::get('pekerjaan', [InfografisController::class, 'pekerjaan'])->name('admin.infografis.pekerjaan');
        Route::post('pekerjaan', [InfografisController::class, 'pekerjaan_store'])->name('admin.infografis.pekerjaan.store');
        Route::get('pekerjaan/{pekerjaan_id}', [InfografisController::class, 'pekerjaan_delete'])->name('admin.infografis.pekerjaan.delete');

        Route::get('pendidikan', [InfografisController::class, 'pendidikan'])->name('admin.infografis.pendidikan');
        Route::post('pendidikan', [InfografisController::class, 'pendidikan_store'])->name('admin.infografis.pendidikan.store');
        Route::get('pendidikan/{poendidikan_id}', [InfografisController::class, 'pendidikan_delete'])->name('admin.infografis.pendidikan.delete');

        Route::get('umur', [InfografisController::class, 'umur'])->name('admin.infografis.umur');
        Route::post('umur', [InfografisController::class, 'umur_store'])->name('admin.infografis.umur.store');
        Route::get('umur/{umur_id}', [InfografisController::class, 'umur_delete'])->name('admin.infografis.umur.delete');

    });

    Route::prefix('potensi')->group(function() {
        Route::get('budaya', [PotensiDesaController::class, 'budaya_admin'])->name('admin.infografis.budaya');
        Route::get('guest_house', [PotensiDesaController::class, 'guest_house_admin'])->name('admin.infografis.guest_house');
        Route::get('umkm', [PotensiDesaController::class, 'umkm_admin'])->name('admin.infografis.umkm');
        Route::get('wisata', [PotensiDesaController::class, 'wisata_admin'])->name('admin.infografis.wisata');

        Route::get('create', [PotensiDesaController::class, 'create'])->name('admin.potensi.create');
        Route::post('store', [PotensiDesaController::class, 'store'])->name('admin.potensi.store');
        Route::get('delete/{potensi_desa_id}', [PotensiDesaController::class, 'delete'])->name('admin.potensi.delete');
    });

});

// File manager
Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\GeografisController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\LembagaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\BeritaDesaController;
use App\Http\Controllers\Admin\LembagaAdminController;
use App\Http\Controllers\Admin\SktmController;
use App\Http\Controllers\Admin\SuratUsahaController;

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

Route::get('/',[IndexController::class, 'index'] );
Route::get('tentangkami',[AboutController::class, 'index'] );
Route::get('visimisi',[VisimisiController::class, 'index'] );
Route::get('sejarah',[SejarahController::class, 'index'] );
Route::get('geografis',[GeografisController::class, 'index'] );
Route::get('struktur',[StrukturController::class, 'index'] );
Route::get('agenda',[AgendaController::class, 'index'] );
Route::get('register',[RegisterController::class, 'index'] );
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// surat surat
Route::prefix('surat')->group(function () {
    Route::get('/sktm', [SktmController::class, 'surat'])->name('index.sktm');
    Route::get('/sktm/view', [SktmController::class, 'view'])->name('sktm.view');
    Route::get('/sktm/download/{id}', [SktmController::class, 'downloadPDF'])->name('sktm.download');
    Route::get('/suratusaha', [SuratUsahaController::class, 'suratusaha'])->name('index.suratusaha');
    Route::get('/suratusaha/view', [SuratUsahaController::class, 'view'])->name('suratusaha.view');
    Route::get('/suratusaha/contoh', [SuratUsahaController::class, 'contohsurat'])->name('suratusaha.contoh');
    Route::get('/suratusaha/download/{id}', [SuratUsahaController::class, 'downloadPDF'])->name('suratusaha.download');
});

// lembaga
Route::prefix('lembaga')->group(function () {
    Route::get('/', [LembagaController::class, 'index'])->name('index.lembaga');
});

// berita
Route::prefix('berita')->group(function () {
    Route::get('/', [BeritaController::class, 'index'])->name('index.berita');
    Route::get('/{id}', [BeritaController::class, 'show'])->name('berita.show');
});

// admin dashboard
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/{admin}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/{admin}', [AdminController::class, 'update'])->name('admin.update');
});

// berita admin
Route::prefix('admin/berita')->group(function () {
    Route::get('/', [BeritaDesaController::class, 'index'])->name('berita.index');
    Route::get('/create', [BeritaDesaController::class, 'create'])->name('berita.create');
    Route::post('/', [BeritaDesaController::class, 'store'])->name('berita.store');
    Route::get('/{berita}/edit', [BeritaDesaController::class, 'edit'])->name('berita.edit');
    Route::put('/{berita}', [BeritaDesaController::class, 'update'])->name('berita.update');
    Route::delete('/{berita}', [BeritaDesaController::class, 'destroy'])->name('berita.destroy');
});

// sktm admin
Route::prefix('admin/sktm')->group(function () {
    Route::get('/', [SktmController::class, 'index'])->name('sktm.index');
    Route::get('/create', [SktmController::class, 'create'])->name('sktm.create');
    Route::post('/', [SktmController::class, 'store'])->name('sktm.store');
    Route::get('/{sktm}/edit', [SktmController::class, 'edit'])->name('sktm.edit');
    Route::put('/{sktm}', [SktmController::class, 'update'])->name('sktm.update');
    Route::delete('/{sktm}', [SktmController::class, 'destroy'])->name('sktm.destroy');
});

// surat usaha admin
Route::prefix('admin/suratusaha')->group(function () {
    Route::get('/', [SuratUsahaController::class, 'index'])->name('suratusaha.index');
    Route::get('/create', [SuratUsahaController::class, 'create'])->name('suratusaha.create');
    Route::post('/', [SuratUsahaController::class, 'store'])->name('suratusaha.store');
    Route::get('/{suratusaha}/edit', [SuratUsahaController::class, 'edit'])->name('suratusaha.edit');
    Route::put('/{suratusaha}', [SuratUsahaController::class, 'update'])->name('suratusaha.update');
    Route::delete('/{suratusaha}', [SuratUsahaController::class, 'destroy'])->name('suratusaha.destroy');
});

// lembaga admin
Route::prefix('admin/lembaga')->group(function () {
    Route::get('/', [LembagaAdminController::class, 'index'])->name('lembaga.index');
    Route::get('/create', [LembagaAdminController::class, 'create'])->name('lembaga.create');
    Route::post('/', [LembagaAdminController::class, 'store'])->name('lembaga.store');
    Route::get('/{lembaga}/edit', [LembagaAdminController::class, 'edit'])->name('lembaga.edit');
    Route::put('/{lembaga}', [LembagaAdminController::class, 'update'])->name('lembaga.update');
    Route::delete('/{lembaga}', [LembagaAdminController::class, 'destroy'])->name('lembaga.destroy');
});

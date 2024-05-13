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
use App\Http\Controllers\Admin\VisiAdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\BeritaDesaController;
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
Route::get('lembaga',[LembagaController::class, 'index'] );
Route::get('agenda',[AgendaController::class, 'index'] );
Route::get('register',[RegisterController::class, 'index'] );
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');




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


// admin visi misi
Route::prefix('admin/visimisi')->group(function () {
    Route::get('/', [VisiAdminController::class, 'index'])->name('visi-misi.index');
    Route::get('/create', [VisiAdminController::class, 'create'])->name('visi-misi.create');
    Route::post('/', [VisiAdminController::class, 'store'])->name('visi-misi.store');
    Route::get('/{visimisi}/edit', [VisiAdminController::class, 'edit'])->name('visi-misi.edit');
    Route::put('/{visimisi}', [VisiAdminController::class, 'update'])->name('visi-misi.update');
    Route::delete('/{visimisi}', [VisiAdminController::class, 'destroy'])->name('visi-misi.destroy');
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


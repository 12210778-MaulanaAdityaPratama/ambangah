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
    return view('welcome');
});
Route::get('index',[IndexController::class, 'index'] );
Route::get('tentangkami',[AboutController::class, 'index'] );
Route::get('visimisi',[VisimisiController::class, 'index'] );
Route::get('sejarah',[SejarahController::class, 'index'] );
Route::get('geografis',[GeografisController::class, 'index'] );
Route::get('struktur',[StrukturController::class, 'index'] );
Route::get('lembaga',[LembagaController::class, 'index'] );
Route::get('berita',[BeritaController::class, 'index'] );
Route::get('agenda',[AgendaController::class, 'index'] );
Route::get('admin',[AdminController::class, 'index'] );

// admin visi misi
Route::prefix('admin/visimisi')->group(function () {
    Route::get('/', [VisiAdminController::class, 'index'])->name('visi-misi.index');
    Route::get('/create', [VisiAdminController::class, 'create'])->name('visi-misi.create');
    Route::post('/', [VisiAdminController::class, 'store'])->name('visi-misi.store');
    Route::get('/{visimisi}/edit', [VisiAdminController::class, 'edit'])->name('visi-misi.edit');
    Route::put('/{visimisi}', [VisiAdminController::class, 'update'])->name('visi-misi.update');
    Route::delete('/{visimisi}', [VisiAdminController::class, 'destroy'])->name('visi-misi.destroy');
});



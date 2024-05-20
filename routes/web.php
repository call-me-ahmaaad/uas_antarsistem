<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Models\Produk;

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

// Route yang berisi fungsi untuk menampilkan dashboard
Route::get('/', function () {
    return view('dashboard');
});

//* Route untuk menampilkan isi tabel Produk
// Menjalankan fungsi web_index
Route::get('/figureList', [ProdukController::class, 'web_index'])->name('figure.list');

//* Route untuk melakukan fitur penambahan produk/figure ke tabel Produk
// Menjalankan fungsi web_addFigure dan web_store
Route::get('/addFigure', [ProdukController::class, 'web_addFigure'])->name('figure.add');
Route::post('/simpan-data', [ProdukController::class, 'web_store']);

//* Route untuk menjalankan fitur update produk/figure berdasarkan produk/figure yang dipilih
// Menjalankan fungsi web_edit dan web_update
Route::get('/updateFigure/{id}', [ProdukController::class, 'web_edit'])->name('figure.edit');
Route::put('/updateFigure/update-data/{id}', [ProdukController::class, 'web_update']);

//* Route untuk menjalankan fitur delete produk/figure berdasarkan produk/figure yang dipilih
// Menjalankan fungsi web_delete dan web_destroy
Route::get('/deleteFigure/{id}', [ProdukController::class, 'web_delete'])->name('figure.delete');
Route::delete('/deleteFigure/destroy-data/{id}', [ProdukController::class, 'web_destroy']);

//* Route untuk menampilkan file XML dari kelompok 5 (Hansel)
// Menjalankan fungsi web_xml
Route::get('/hanselList', [ProdukController::class, 'web_xml'])->name('hansel.xml');

Route::get('/hanselAdd', [ProdukController::class, 'hansel_add'])->name('hansel.add');

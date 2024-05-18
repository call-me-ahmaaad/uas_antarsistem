<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdukController;
use App\Models\Produk;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//* Route untuk menjalankan fitur penambahan produk/figure di luar website proyek atau melalui Postman
// Menjalankan fungsi api_store
Route::post('/addFigure', [ProdukController::class, 'api_store']);

//* Route untuk menjalankan fitur menampilkan produk/figure di luar website proyek atau melalui Postman
// Menjalankan fungsi api_index
Route::get('/listFigure', [ProdukController::class, 'api_index']);

//* Route untuk menjalankan fitur konversi data dari tabel Produk ke dalam bentuk XML dan dapat diakses pihak lain
// Menjalankan fungsi api_xml
Route::get('/produks/xml', [ProdukController::class, 'api_xml']);

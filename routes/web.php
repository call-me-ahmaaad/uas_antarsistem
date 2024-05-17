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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/figureList', [ProdukController::class, 'web_index']);

Route::get('/addFigure', function () {
    return view('addFigure', [
        "title" => "ADD FIGURE",
        "favicon" => "addFigure.png"
    ]);
});

Route::post('/simpan-data', [ProdukController::class, 'web_store']);
Route::get('/updateFigure/{id}', [ProdukController::class, 'web_edit']);
Route::put('/updateFigure/update-data/{id}', [ProdukController::class, 'web_update']);
Route::get('/deleteFigure/{id}', [ProdukController::class, 'web_delete']);
Route::delete('/deleteFigure/destroy-data/{id}', [ProdukController::class, 'web_destroy']);

Route::get('/hanselList', function () {
    return view('hanselList');
});

Route::get('/addHansel', function () {
    return view('addHansel');
});

Route::get('/xmlTable', function () {
    return view('xmlTable');
});

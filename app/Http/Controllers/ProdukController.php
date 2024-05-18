<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    // Menampilkan Seluruh Isi Data Tabel Produk di halaman FIGURE LIST
    public function web_index(){
        return view('figureList', [
            "produks" => Produk::all(),
            "title" => "FIGURE LIST",
            "favicon" => "figureList.png"
        ]);
    }

    // Menampilkan Halaman ADD FIGURE
    public function web_addFigure() {
        return view('addFigure', [
            "title" => "ADD FIGURE",
            "favicon" => "addFigure.png"
        ]);
    }

    // Memasukkan data yang sudah diisi di halaman ADD FIGURE ke tabel Produk
    public function web_store(Request $request){
        $produk = new Produk;
        $produk->nama = $request->nama;
        $produk->anime = $request->anime;
        $produk->tipe = $request->tipe;
        $produk->harga = $request->harga;
        $produk->deskripsi = $request->deskripsi;
        $produk->save();

        return redirect('/figureList' );
    }

    // Menampilakan halaman UPDATE FIGURE berdasarkan produk/figure yang dipilih
    public function web_edit(Request $request, $id){
        $produk = Produk::findOrFail($id);
        return view('updateFigure', [
            "produk" => Produk::find($id),
            "title" => "UPDATE FIGURE",
            "favicon" => "updateFigure.png"
        ]);
    }

    // Memasukkaan hasil perbaruan ke tabel Produk
    public function web_update(Request $request, $id){
        $produk = Produk::find($id);
        $produk->nama = is_null($request->nama) ? $device->nama : $request->nama;
        $produk->anime = is_null($request->anime) ? $device->anime : $request->anime;
        $produk->tipe = is_null($request->tipe) ? $device->tipe : $request->tipe;
        $produk->harga = is_null($request->harga) ? $device->harga : $request->harga;
        $produk->deskripsi = is_null($request->deskripsi) ? $device->deskripsi : $request->deskripsi;
        $produk->save();

        return redirect('figureList');
    }

    // Menampilkan halaman DELETE FIGURE berdasarkan produk/figure yang dipilih
    public function web_delete($id){
        $produk = Produk::findOrFail($id);
        return view('deleteFigure', [
            "produk" => $produk,
            "title" => "DELETE FIGURE",
            "favicon" => "deleteFigure.png"
        ]);
    }

    // Menghapus produk yang dipilih dari tabel Produk
    public function web_destroy($id){
        $deletedProduk = Produk::findOrFail($id);
        $deletedProduk->delete();

        return redirect('figureList');
    }

    // Fungsi untuk API POST agar dapat menambahkan data di tempat lain atau melalui Postman
    public function api_store(Request $request){
        $produk = new Produk;
        $produk->nama = $request->nama;
        $produk->anime = $request->anime;
        $produk->tipe = $request->tipe;
        $produk->harga = $request->harga;
        $produk->deskripsi = $request->deskripsi;
        $produk->save();

        // Mendapatkan ID produk yang baru saja ditambahkan
        $produkId = $produk->id;

        // Membuat pesan JSON yang menyertakan data produk yang baru saja ditambahkan
        return response()->json([
            "message" => "Produk telah ditambahkan.",
            "data" => [
                "id" => $produkId,
                "nama" => $produk->nama,
                "anime" => $produk->anime,
                "tipe" => $produk->tipe,
                "harga" => $produk->harga,
                "deskripsi" => $produk->deskripsi
            ]
        ], 201);
    }

    // Fungsi untuk API GET agar dapat memperlihatkan isi tabel Produk di tempat lain atau Postman
    public function api_index(){
        return Produk::all();
    }

    // Fungsi untuk mengkonversi data tabel Produk ke dalam bentuk XML
    // XML akan digunakan oleh pihak lain untuk menampilkan data dari tabel Produk agar dapat ditampilkan di tempatnya
    public function api_xml()
    {
        $produks = Produk::all();

        $xml = new \SimpleXMLElement('<produks/>');

        foreach ($produks as $produk) {
            $produkXml = $xml->addChild('produk');
            $produkXml->addChild('id', $produk->id);
            $produkXml->addChild('nama', $produk->nama);
            $produkXml->addChild('anime', $produk->anime);
            $produkXml->addChild('tipe', $produk->tipe);
            $produkXml->addChild('harga', $produk->harga);
            $produkXml->addChild('deskripsi', $produk->deskripsi);
            $produkXml->addChild('created_at', $produk->created_at);
            $produkXml->addChild('updated_at', $produk->updated_at);
        }

        return response($xml->asXML(), 200)
            ->header('Content-Type', 'application/xml');
    }
}

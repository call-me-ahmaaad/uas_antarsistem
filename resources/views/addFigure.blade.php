@extends('layouts.main')
@section('navbar')
    @include('partials.navbar_tim6')
@endsection
@section('container')
    {{-- <div class="form-area">
        <form action="simpan-data" method="post">
            @csrf
            <div>
                <label for="nama">Nama Figure:</label><br>
                <input type="text" id="nama" name="nama"><br>
            </div>
            <div>
                <label for="anime">Nama Anime:</label><br>
                <input type="text" id="anime" name="anime"><br>
            </div>
            <div>
                <label for="tipe">Tipe Figure:</label><br>
                <select id="tipe" name="tipe">
                    <option value="Nendoroids">Nendoroids</option>
                    <option value="Nendoroid Dolls">Nendoroid Dolls</option>
                    <option value="Scales">Scales</option>
                    <option value="Figma">Figma</option>
                    <option value="Gachapon">Gachapon</option>
                    <option value="Lainnya">Lainnya</option>
                </select><br>
            </div>
            <div>
                <label for="harga">Harga Produk:</label><br>
                <input type="number" id="harga" name="harga" step="0.01"><br>
            </div>
            <div>
                <label for="deskripsi">Deskripsi:</label><br>
                <textarea id="deskripsi" name="deskripsi"></textarea><br>
            </div>
            <button type="submit">Simpan</button>
        </form>
    </div> --}}

    <div class="table-update">
        <form action="simpan-data" method="post">
            @csrf
            <table>
                <tbody>
                    <tr>
                        <th scope="row">Nama Produk</th>
                        <td><input type="text" id="nama" name="nama" placeholder="Isi nama produk/figure"></td>
                    </tr>
                    <tr>
                        <th scope="row">Nama Anime</th>
                        <td><input type="text" id="anime" name="anime" placeholder="Isi nama anime dari figure"></td>
                    </tr>
                    <tr>
                        <th scope="row">Tipe Figure</th>
                        <td>
                            <select id="tipe" name="tipe">
                                <option value="Nendoroids">Nendoroids</option>
                                <option value="Nendoroid Dolls">Nendoroid Dolls</option>
                                <option value="Scales">Scales</option>
                                <option value="Figma">Figma</option>
                                <option value="Gachapon">Gachapon</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Harga Figure</th>
                        <td><input type="number" id="harga" name="harga" step="0.01" placeholder="Masukkan harga figure"></td>
                    </tr>
                    <tr>
                        <th scope="row">Deskripsi</th>
                        <td><textarea id="deskripsi" name="deskripsi" placeholder="Jelaskan deskripsi dari figure"></textarea></td>
                    </tr>
                </tbody>
            </table>
            <div class="table-update button">
                <button type="submit">Simpan</button>
                <a href="/figureList">Back to Figure List</a>
            </div>
        </form>
    </div>
@endsection

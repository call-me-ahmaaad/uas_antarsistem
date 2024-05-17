@extends('layouts.main')
@section('navbar')
    @include('partials.navbar_tim6')
@endsection
@section('container')
    <div class="table-update">
        <h1>{{$produk["nama"]}} (ID: {{$produk["id"]}})</h1>
        <form action="update-data/{{$produk["id"]}}" method="post">
            @csrf
            @method('PUT')
            <table>
                <tbody>
                    <tr>
                        <th scope="row">Nama Produk</th>
                        <td><input type="text" id="nama" name="nama" value="{{$produk["nama"]}}"></td>
                    </tr>
                    <tr>
                        <th scope="row">Nama Anime</th>
                        <td><input type="text" id="anime" name="anime" value="{{$produk["anime"]}}"></td>
                    </tr>
                    <tr>
                        <th scope="row">Tipe Figure</th>
                        <td>
                            <select id="tipe" name="tipe">
                            <option value="{{$produk["tipe"]}}">{{$produk["tipe"]}}</option>
                            @if ($produk["tipe"] == "Nendoroids")
                                <option value="Nendoroid Dolls">Nendoroid Dolls</option>
                                <option value="Scales">Scales</option>
                                <option value="Figma">Figma</option>
                                <option value="Gachapon">Gachapon</option>
                                <option value="Lainnya">Lainnya</option>
                            @elseif($produk["tipe"] == "Nendoroid Dolls")
                                <option value="Nendoroids">Nendoroids</option>
                                <option value="Scales">Scales</option>
                                <option value="Figma">Figma</option>
                                <option value="Gachapon">Gachapon</option>
                                <option value="Lainnya">Lainnya</option>
                            @elseif($produk["tipe"] == "Scales")
                                <option value="Nendoroids">Nendoroids</option>
                                <option value="Nendoroid Dolls">Nendoroid Dolls</option>
                                <option value="Figma">Figma</option>
                                <option value="Gachapon">Gachapon</option>
                                <option value="Lainnya">Lainnya</option>
                            @elseif($produk["tipe"] == "Figma")
                                <option value="Nendoroids">Nendoroids</option>
                                <option value="Nendoroid Dolls">Nendoroid Dolls</option>
                                <option value="Scales">Scales</option>
                                <option value="Gachapon">Gachapon</option>
                                <option value="Lainnya">Lainnya</option>
                            @elseif($produk["tipe"] == "Gachapon")
                                <option value="Nendoroids">Nendoroids</option>
                                <option value="Nendoroid Dolls">Nendoroid Dolls</option>
                                <option value="Scales">Scales</option>
                                <option value="Figma">Figma</option>
                                <option value="Lainnya">Lainnya</option>
                            @else
                                <option value="Nendoroids">Nendoroids</option>
                                <option value="Nendoroid Dolls">Nendoroid Dolls</option>
                                <option value="Scales">Scales</option>
                                <option value="Figma">Figma</option>
                                <option value="Gachapon">Gachapon</option>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Harga Figure</th>
                        <td><input type="number" id="harga" name="harga" step="0.01" value="{{$produk["harga"]}}"></td>
                    </tr>
                    <tr>
                        <th scope="row">Deskripsi</th>
                        <td><textarea id="deskripsi" name="deskripsi">{{$produk["deskripsi"]}}</textarea></td>
                    </tr>
                </tbody>
            </table>
            <div class="table-update button">
                <button type="submit">Update</button>
                <a href="/figureList">Back to Figure List</a>
            </div>
        </form>
    </div>
@endsection

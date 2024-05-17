@extends('layouts.main')
@section('navbar')
    @include('partials.navbar_tim6')
@endsection
@section('container')
    <div class="table-delete">
        <h1>{{$produk["nama"]}} (ID: {{$produk["id"]}})</h1>
        <table>
            <tbody>
                <tr>
                    <th scope="row">ID</th>
                    <td>{{ $produk["id"] }}</td>
                </tr>
                <tr>
                    <th scope="row">Nama Produk</th>
                    <td>{{ $produk["nama"] }}</td>
                </tr>
                <tr>
                    <th scope="row">Nama Anime</th>
                    <td>{{ $produk["anime"] }}</td>
                </tr>
                <tr>
                    <th scope="row">Tipe Figure</th>
                    <td>{{ $produk["tipe"] }}</td>
                </tr>
                <tr>
                    <th scope="row">Harga Produk</th>
                    <td>Rp {{ $produk["harga"] }}</td>
                </tr>
                <tr>
                    <th scope="row">Deskripsi</th>
                    <td>{{ $produk["deskripsi"] }}</td>
                </tr>
                <tr>
                    <th scope="row">Dimasukkan</th>
                    <td>{{ $produk["created_at"] }}</td>
                </tr>
                <tr>
                    <th scope="row">Diupdate</th>
                    <td>{{ $produk["updated_at"] }}</td>
                </tr>
            </tbody>
        </table>
        <div class="table-delete button">
            <form action="destroy-data/{{$produk["id"]}}" method="post">
                @csrf
                @method('delete')
                <button type="submit">Delete</button>
            </form>
            <a href="/figureList">Back to Figure List</a>
        </div>
    </div>
@endsection
